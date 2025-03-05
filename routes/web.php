<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KirimPesanController;
use App\Http\Controllers\UpdateGrupController;
use App\Http\Controllers\GrupWhatsAppController;
use App\Http\Controllers\TambahPerangkatController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware('auth:member')->group(function () {


    // Halaman utama perangkat
    Route::get('/device', [DeviceController::class, 'index'])->name('device');
    Route::post('/devices', [DeviceController::class, 'store'])->name('devices.store');
    Route::post('/devices/add', [DeviceController::class, 'addDevice'])->name('device.add');

    //Action
    Route::post('/devices/disconnect', [DeviceController::class, 'disconnect'])->name('device.disconnect');
    Route::post('/devices/connect', [DeviceController::class, 'connectDevice'])->name('device.connect');
    Route::post('/devices/qr', [DeviceController::class, 'getQrCode'])->name('device.qr');
    Route::post('/devices/reconnect', [DeviceController::class, 'reconnect'])->name('device.reconnect');
    Route::delete('/devices/{device}', [DeviceController::class, 'delete'])->name('devices.delete');
    Route::delete('/devices/{id}', [DeviceController::class, 'destroy'])->name('device.delete'); // Tambahkan route delete
    Route::post('/device/request-otp/{deviceId}', [DeviceController::class, 'requestOtp'])->name('device.requestOtp');
    Route::delete('/device/delete/{deviceId}', [DeviceController::class, 'deleteDevice'])->name('device.delete');

    // Copy Nomor
    Route::get('/copyNomor', [UpdateGrupController::class, 'index'])->name('copyNomor');

    Route::get('/fonnte/group/{groupId}/numbers', function ($groupId, Request $request) {
        $limit = $request->query('limit', 10); // Default ambil 10 nomor

        // Ambil token dari user yang login
        $token = Auth::user()->tokenAkun;

        // Request ke API Fonnte yang benar
        $response = Http::withHeaders([
            'Authorization' => $token
        ])->get("https://api.fonnte.com/get-whatsapp-group");

        $data = $response->json();

        // Cek apakah respons berhasil
        if (!$response->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghubungi API Fonnte',
                'error' => $response->body()
            ], 500);
        }

        // Pastikan ada data grup dalam response
        if (!isset($data['groups']) || !is_array($data['groups'])) {
            return response()->json([
                'success' => false,
                'message' => 'Data grup tidak ditemukan dalam respons API'
            ], 400);
        }

        // Cari grup berdasarkan ID yang diberikan
        $group = collect($data['groups'])->firstWhere('id', $groupId);

        if (!$group || !isset($group['member']) || !is_array($group['member'])) {
            return response()->json([
                'success' => false,
                'message' => 'Grup tidak ditemukan atau tidak memiliki anggota'
            ], 400);
        }

        // Ambil nomor anggota grup sesuai limit
        $numbers = collect($group['member'])->pluck('number')->take($limit)->toArray();

        return response()->json([
            'success' => true,
            'numbers' => $numbers
        ]);
    });




    // GroupUpdate
    Route::get('/update-grup', [UpdateGrupController::class, 'index'])->name('upGroup.view');
    Route::post('/update-grup', [UpdateGrupController::class, 'updateGroup'])->name('upGroup.sub');

    // List Group
    Route::get('/list-group', [GrupWhatsAppController::class, 'index'])->name('list.group');
    Route::post('/list-group', [GrupWhatsAppController::class, 'getGroupsByDevice'])->name('showGroup');



    // Kirim pesan langsung dari perangkat
    Route::get('/send-message', [KirimPesanController::class, 'index'])->name('kirimPesan');

    // Logout member
    Route::post('/member-logout', [AuthenticatedSessionController::class, 'destroy'])->name('member.logout');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/', [AuthenticatedSessionController::class, 'store']);
});


require __DIR__ . '/auth.php';
