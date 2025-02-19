<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KirimPesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TambahPerangkatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/beranda', [DashboardController::class, 'index'])->name('beranda');
Route::get('/tambah-perangkat', [TambahPerangkatController::class, 'index'])->name('tambahPerangkat');
Route::get('/kirim-pesan', [KirimPesanController::class, 'index'])->name('kirimPesan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
