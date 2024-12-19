<?php

use App\Livewire\Chat\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ApartmentsComplexController;
use App\Http\Controllers\LivewireController;

Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth.redirection/{provider}', 'authProviderRedirect')->name('auth.redirection');
    Route::get('auth/{provider}/callback', 'socialAuthentication')->name('auth.callback');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/mensagens', [LivewireController::class, 'index'])->name('mensagens');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/condominio', [ApartmentsComplexController::class, 'show'])->name('apartmentsComplex');
});

Route::middleware('auth')->group(function () {
    Route::get('/anuncios', [AdvertisementController::class, 'index'])->name('advertisement');
});

require __DIR__ . '/auth.php';


