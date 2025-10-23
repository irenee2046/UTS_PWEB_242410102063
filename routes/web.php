<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiketController;

Route::get('/', [PiketController::class, 'halamanlogin'])->name('login');
Route::post('/login', [PiketController::class, 'prosesLogin'])->name('prosesLogin');
Route::get('/dashboard', [PiketController::class, 'dashboard'])->name('dashboard');
Route::get('/profil', [PiketController::class, 'profil'])->name('profil');
Route::get('/jadwal', [PiketController::class, 'jadwal'])->name('jadwal');
Route::get('/logout', [PiketController::class, 'logout'])->name('logout');
