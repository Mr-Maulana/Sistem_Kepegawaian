<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/search', [PegawaiController::class, 'search'])->name('pegawai.search');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::get('/pegawai/search', [PegawaiController::class, 'search'])->name('pegawai.search'); // routes/web.php
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Route untuk menampilkan form login
Route::post('/login', [LoginController::class, 'login']); // Route untuk memproses login
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Route untuk logout
Route::middleware('auth')->group(function () {
    Route::get('/', [PegawaiController::class, 'index'])->name('pegawai.index');
});