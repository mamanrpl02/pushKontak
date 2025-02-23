<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KirimPesanController;
use App\Http\Controllers\TambahPerangkatController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::middleware('auth:member')->group(function () {
    Route::get('/device', [DashboardController::class, 'index'])->name('device');
    Route::get('/kirim-pesan', [KirimPesanController::class, 'index'])->name('kirimPesan');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/member-logout', [AuthenticatedSessionController::class, 'destroy'])->name('member.logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

require __DIR__ . '/auth.php';
