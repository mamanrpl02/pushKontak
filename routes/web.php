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
    Route::get('/device', [DeviceController::class, 'index'])->name('device');
    Route::get('/kirim-pesan', [KirimPesanController::class, 'index'])->name('kirimPesan');
    Route::get('/updateGrup', [UpdateGrupController::class, 'index'])->name('updateGrup');
    Route::post('/devices', [DeviceController::class, 'store'])->name('devices.store');

    Route::post('send-message', [DeviceController::class, 'sendMessage'])->name('send.message');
    Route::post('devices/status', [DeviceController::class, 'checkDeviceStatus']);
    Route::post('devices/activate', [DeviceController::class, 'activateDevice'])->name('devices.activate');
    Route::post('devices/disconnect', [DeviceController::class, 'disconnect'])->name('devices.disconnect');

    Route::post('/member-logout', [AuthenticatedSessionController::class, 'destroy'])->name('member.logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

require __DIR__ . '/auth.php';
