<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Siswa\PembayaranController;
use App\Http\Controllers\Siswa\TpaController;

// Landing Page (halaman awal sebelum login)
Route::get('/', fn() => view('landing.index'))->name('landing');

// Autentikasi
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

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
    Route::get('/siswa/pembayaran/tpa', [PembayaranController::class, 'index_tpa'])->name('siswa.pembayaran.tpa');
    Route::post('/siswa/pembayaran/tpa', [PembayaranController::class, 'store_tpa'])->name('siswa.pembayaran.tpa.store');
    Route::get('/siswa/tpa/informasi', [TpaController::class, 'index'])->name('siswa.tpa.informasi');
    Route::get('/siswa/tpa/tracking', [TpaController::class, 'hasil'])->name('tpa.hasil');
    Route::get('/siswa/pembayaran/daftar-ulang', [PembayaranController::class, 'index_du'])->name('siswa.pembayaran.du');
    Route::post('/siswa/pembayaran/daftar-ulang', [PembayaranController::class, 'store_du'])->name('siswa.pembayaran.du.store');
});
