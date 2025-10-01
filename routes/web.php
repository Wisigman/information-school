<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UpdateUserController;
use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Dashboard (Membutuhkan otentikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute yang memerlukan otentikasi
Route::middleware('auth')->group(function () {
    // Profil bawaan Laravel
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Custom edit user
    Route::get('/edit-user', function(){
        return view('edit.edit');
    })->name('user.edit');
    Route::post('/edit-user', [UpdateUserController::class, 'store'])->name('user.update');

    // Logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Rute Otentikasi (Diganti dari Administrator ke Login Standar)
// Catatan: Kami menggunakan nama rute 'adminprcs' untuk POST /login sesuai kebutuhan formulir Anda.

// Login View (GET /login)
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login'); 

// Login Process (POST /login) - Menggunakan nama rute 'adminprcs'
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('adminprcs'); 

// Register
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Reset Password
Route::get('password-reset', [ResetPasswordController::class, 'create'])->name('password-reset');
Route::post('password-reset', [ResetPasswordController::class, 'store'])->name('password-reset-post');

// Halaman Statis
Route::get('/about', fn() => view('about')); 
Route::get('/profil', fn() => view('profil'));
Route::get('/prestasi', fn() => view('prestasi'));
Route::get('/ekskul', fn() => view('ekskul'));
Route::get('/absensi', fn() => view('absensi'));

// Fallback
Route::fallback(fn() => redirect('/'));
require __DIR__.'/auth.php';