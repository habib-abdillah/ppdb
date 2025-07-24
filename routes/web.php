<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Siswa\PembayaranTpaController;

// Landing Page (halaman awal sebelum login)
Route::get('/', fn() => view('landing.index'))->name('landing');

// Autentikasi
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', fn() => view('dashboard.admin'));
});

// Panitia
Route::middleware(['auth', 'role:panitia'])->group(function () {
    Route::get('/panitia', fn() => view('dashboard.panitia'));
});

// Siswa
Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/siswa', fn() => view('dashboard.siswa'));
});

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/siswa/pembayaran/tpa', [PembayaranTpaController::class, 'index'])->name('siswa.pembayaran.tpa');
    Route::post('/siswa/pembayaran/tpa', [PembayaranTpaController::class, 'store'])->name('siswa.pembayaran.tpa.store');
});
