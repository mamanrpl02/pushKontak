<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KirimPesanController;
use App\Http\Controllers\TambahPerangkatController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\GrupWhatsAppController;
use App\Http\Controllers\UpdateGrupController;

Route::middleware('auth:member')->group(function () {


    // Halaman utama perangkat
    Route::get('/device', [DeviceController::class, 'index'])->name('device');
    Route::post('/devices', [DeviceController::class, 'store'])->name('devices.store');
    Route::post('/devices/add', [DeviceController::class, 'addDevice'])->name('device.add');



    // GroupUpdate
    Route::get('/update-grup', [UpdateGrupController::class, 'index'])->name('viewGrup');
    Route::post('/update-grup/update', [UpdateGrupController::class, 'updateGrup'])->name('update.groups');

    // List Group
    Route::get('/list-group', [GrupWhatsAppController::class, 'index'])->name('list.group');

    Route::post('/list-group', [GrupWhatsAppController::class, 'getGroupsByDevice'])->name('showGroup');

    //Action
    Route::post('/devices/disconnect', [DeviceController::class, 'disconnect'])->name('device.disconnect');
    Route::post('/devices/connect', [DeviceController::class, 'connectDevice'])->name('device.connect');
    Route::post('/devices/qr', [DeviceController::class, 'getQrCode'])->name('device.qr');
    Route::post('/devices/reconnect', [DeviceController::class, 'reconnect'])->name('device.reconnect');
    Route::delete('/devices/{device}', [DeviceController::class, 'delete'])->name('devices.delete');
    Route::delete('/devices/{id}', [DeviceController::class, 'destroy'])->name('device.delete'); // Tambahkan route delete
    Route::post('/device/request-otp/{deviceId}', [DeviceController::class, 'requestOtp'])->name('device.requestOtp');
    Route::delete('/device/delete/{deviceId}', [DeviceController::class, 'deleteDevice'])->name('device.delete');


    // Kirim pesan langsung dari perangkat
    Route::get('/send-message', [KirimPesanController::class, 'index'])->name('kirimPesan');

    // Logout member
    Route::post('/member-logout', [AuthenticatedSessionController::class, 'destroy'])->name('member.logout');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

require __DIR__ . '/auth.php';
