<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KirimPesanController;
use App\Http\Controllers\TambahPerangkatController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\UpdateGrupController;

Route::middleware('auth:member')->group(function () {
    // Halaman utama perangkat
    Route::get('/device', [DeviceController::class, 'index'])->name('device');
    Route::post('/devices', [DeviceController::class, 'store'])->name('devices.store');

    Route::post('/device/request-otp/{deviceId}', [DeviceController::class, 'requestOtp'])->name('device.requestOtp');
    Route::delete('/device/delete/{deviceId}', [DeviceController::class, 'deleteDevice'])->name('device.delete');


    Route::post('/devices/qr', [DeviceController::class, 'getQrCode'])->name('device.qr');
    Route::post('/devices/add', [DeviceController::class, 'addDevice'])->name('device.add');

    Route::post('/devices/connect', [DeviceController::class, 'connectDevice'])->name('device.connect');


    Route::delete('/devices/{device}', [DeviceController::class, 'delete'])->name('devices.delete');

    Route::match(['get', 'post'], '/devices/activate', [DeviceController::class, 'activateDevice'])->name('device.activate');

    // Kirim pesan
    Route::get('/kirim-pesan', [KirimPesanController::class, 'index'])->name('kirimPesan.index');


    // Update grup
    Route::get('/updateGrup', [UpdateGrupController::class, 'index'])->name('updateGrup.index');

    // CRUD Devices
    Route::post('/devices/disconnect', [DeviceController::class, 'disconnect'])->name('device.disconnect');
    Route::delete('/devices/{id}', [DeviceController::class, 'destroy'])->name('device.delete'); // Tambahkan route delete
    Route::post('/devices/reconnect', [DeviceController::class, 'reconnect'])->name('device.reconnect');


    // Kirim pesan langsung dari perangkat
    Route::post('/send-message', [KirimPesanController::class, 'index'])->name('kirimPesan');

    Route::post('/update-grup', [UpdateGrupController::class, 'index'])->name('updateGrup');

    // Logout member
    Route::post('/member-logout', [AuthenticatedSessionController::class, 'destroy'])->name('member.logout');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

require __DIR__ . '/auth.php';
