<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialiteController;

// Redirecionar '/' para '/login'
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/google', 'googleLogin')->name('auth.google');
    Route::get('auth/google/callback', 'googleAuthentication')->name('auth.google-callback');
});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::fallback(function () {
    return redirect()->route('login');
});
