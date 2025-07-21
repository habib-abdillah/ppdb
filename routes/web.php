<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Landing Page (halaman awal sebelum login)
Route::get('/', fn() => view('landing'))->name('landing');

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
