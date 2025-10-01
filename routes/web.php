<?php

use App\Http\Controllers\Auth\DiscordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    Log::info('Root route accessed');
    Log::info('User authenticated: ' . (auth()->check() ? 'Yes' : 'No'));

    if (auth()->check()) {
        return view('welcome', ['user' => auth()->user()]);
    }
    return view('welcome');
});

Route::get('/login', function () {
    Log::info('Login route accessed');
    Log::info('User authenticated: ' . (auth()->check() ? 'Yes' : 'No'));

    if (auth()->check()) {
        Log::info('User already authenticated, redirecting to /admin');
        return redirect('/admin');
    }

    Log::info('User not authenticated, redirecting to discord.login');
    return redirect()->route('discord.login');
})->name('login');

Route::get('/admin/login', function () {
    Log::info('Admin login route accessed');
    Log::info('User authenticated: ' . (auth()->check() ? 'Yes' : 'No'));

    if (auth()->check()) {
        Log::info('User already authenticated, redirecting to /admin');
        return redirect('/admin');
    }

    Log::info('User not authenticated, redirecting to login route');
    return redirect()->route('login');
});

Route::middleware('clean.oauth')->group(function () {
    Route::get('auth/discord', [DiscordController::class, 'redirect'])->name('discord.login');
    Route::get('auth/discord/callback', [DiscordController::class, 'callback']);
});

Route::get('auth/discord', [DiscordController::class, 'redirect'])->name('discord.login');
Route::get('auth/discord/callback', [DiscordController::class, 'callback']);
