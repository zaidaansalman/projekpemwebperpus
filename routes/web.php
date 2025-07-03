<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Login page
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Dashboard page
Route::get('/dashboard-admin', function () {
    return view('layouts.dashboard-admin');
})->middleware('admin');

// Dashboard page
Route::get('/dashboard-anggota', function () {
    return view('layouts.dashboard-user');
})->middleware('user');

// Data buku
Route::get('/data-buku', function () {
    $bukus = \App\Models\Buku::all();
    return view('layouts.buku.data-buku', compact('bukus'));
});

// Tambah buku
Route::get('/add-buku', [App\Http\Controllers\AdminController::class, 'showAddBuku']);
Route::post('/add-buku', [App\Http\Controllers\AdminController::class, 'storeBuku'])->name('buku.store');

// Edit buku
Route::get('/edit-buku/{id}', [App\Http\Controllers\AdminController::class, 'editBuku'])->name('buku.edit');
Route::post('/edit-buku/{id}', [App\Http\Controllers\AdminController::class, 'updateBuku'])->name('buku.update');

// Delete buku
Route::post('/delete-buku/{id}', [App\Http\Controllers\AdminController::class, 'deleteBuku'])->name('buku.delete');

// Data anggota
Route::get('/data-agt', function () {
    $anggotas = \App\Models\Anggota::all();
    return view('layouts.agt.data-agt', compact('anggotas'));
});

// Tambah anggota
Route::get('/add-agt', [App\Http\Controllers\AdminController::class, 'showAddAgt']);
Route::post('/add-agt', [App\Http\Controllers\AdminController::class, 'storeAgt'])->name('agt.store');

// Edit anggota
Route::get('/edit-agt', function () {
    return view('layouts.agt.edit-agt');
});

// Data Sirkulasi
Route::get('/data-sirkul', function () {
    $sirkuls = \App\Models\Sirkulasi::with(['buku', 'anggota'])->get();
    return view('layouts.sirkul.data-sirkul', compact('sirkuls'));
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
