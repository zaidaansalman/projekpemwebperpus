<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Login page
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::POST('/login', [LoginController::class, 'login']);

// register page
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


// Dashboard page
Route::get('/dashboard-admin', function () {
    return view('layouts.dashboard-admin');
});

// Data buku
Route::get('/data-buku', function () {
    return view('layouts.buku.data-buku');
});

// Tambah buku
Route::get('/add-buku', function () {
    return view('layouts.buku.add-buku');
});

// Edit buku
Route::get('/edit-buku', function () {
    return view('layouts.buku.edit-buku');
});

// Data anggota
Route::get('/data-agt', function () {
    return view('layouts.agt.data-agt');
});

// Tambah anggota
Route::get('/add-agt', function () {
    return view('layouts.agt.add-agt');
});

// Edit anggota
Route::get('/edit-agt', function () {
    return view('layouts.agt.edit-agt');
});

// Data Sirkulasi
Route::get('/data-sirkul', function () {
    return view('layouts.sirkul.data-sirkul');
});

// Tambah Sirkulasi
Route::get('/add-sirkul', function () {
    return view('layouts.sirkul.add-sirkul');
});

// Log Pinjam
Route::get('/log-pinjam', function () {
    return view('layouts.log.log-pinjam');
});

// Log Kembali
Route::get('/log-kembali', function () {
    return view('layouts.log.log-kembali');
});

// Laporan Sirkulasi
Route::get('/laporan-sirkulasi', function () {
    return view('layouts.laporan.laporan-sirkulasi');
});

// Data Pengguna
Route::get('/data-pengguna', function () {
    return view('layouts.pengguna.data-pengguna');
});

// Tambah Pengguna
Route::get('/add-pengguna', function () {
    return view('layouts.pengguna.add-pengguna');
});

// Edit Pengguna
Route::get('/edit-pengguna', function () {
    return view('layouts.pengguna.edit-pengguna');
});
