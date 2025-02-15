<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahPerangkatController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tambahPerangkat', [TambahPerangkatController::class, 'index'])->name('tambahPerangkat');
