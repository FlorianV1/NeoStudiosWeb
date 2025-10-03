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
            ->with(['permissions' => '8'])
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
                return redirect('/login')->withErrors(['error' => 'Login failed immediately after creation.']);
            }

            return redirect()->intended('/dashboard');

        } catch (\Exception $e) {
        // Even uitzoeken wat precies de juiste exception class. Je moet er iig voor zorgen om
            \Log::error('Discord Authentication Failed: ' . $e->getMessage());
            // niet "teveel" op te vangen, want anders is het een drama om te debuggen.
        return redirect('/login')->withErrors(['error' => 'Failed to authenticate with Discord: ' . $e->getMessage()]);
    }
    }
}
