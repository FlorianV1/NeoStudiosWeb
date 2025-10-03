<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DiscordController; // Already imported
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/privacy-policy', 'privacy');
Route::view('/terms-of-service', 'terms');

// --- AUTHENTICATION ROUTES (UPDATED) ---
// We group these under the 'auth' prefix to match the URL Discord is using: /auth/discord/callback
Route::prefix('auth')->group(function () {
    Route::get('/discord', [DiscordController::class, 'redirect'])->name('discord.login');
    Route::get('/discord/callback', [DiscordController::class, 'callback'])->name('discord.callback');
    Route::post('/logout', [DiscordController::class, 'logout'])->name('logout');

});

// --- DASHBOARD AND PROTECTED ROUTES ---

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



require __DIR__.'/auth.php';

// --- CUSTOM ERROR/TEST ROUTES (OPTIONAL) ---

Route::get('/error/{code}', function ($code) {
     abort($code);
 })->where('code', '[0-9]+');
