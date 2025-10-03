<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class DiscordController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('discord')
            ->scopes(['identify', 'email', 'guilds'])
            ->redirect();
    }

    public function callback()
    {
        try {
            $discordUser = Socialite::driver('discord')->user();

            $user = User::updateOrCreate(
                ['discord_id' => $discordUser->id],
                [
                    'name' => $discordUser->name,
                    'email' => $discordUser->email,
                    'discord_avatar' => $discordUser->avatar,
                    'discord_token' => $discordUser->token,
                    'discord_refresh_token' => $discordUser->refreshToken,
                ]
            );

            Auth::login($user, true);

            if (!Auth::check()) {
                return redirect('/login')->withErrors(['error' => 'Login failed.']);
            }

            if ($user->is_admin) {
                return redirect()->intended('/admin');
            }

            return redirect()->intended('/dashboard');

        } catch (\Exception $e) {
            \Log::error('Discord Authentication Failed: ' . $e->getMessage());
            return redirect('/login')->withErrors(['error' => 'Failed to authenticate with Discord.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully');
    }
}
