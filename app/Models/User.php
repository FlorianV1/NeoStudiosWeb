<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use Notifiable;

    protected $fillable = [
        'discord_id',
        'name',
        'email',
        'discord_avatar',
        'discord_token',
        'discord_refresh_token',
        'is_admin',
    ];

    protected $hidden = [
        'discord_token',
        'discord_refresh_token',
    ];

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    // Only allow admins to access Filament panel
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin === true;
    }

    public function getAvatarUrlAttribute()
    {
        if ($this->discord_avatar) {
            return "https://cdn.discordapp.com/avatars/{$this->discord_id}/{$this->discord_avatar}.png";
        }

        return "https://cdn.discordapp.com/embed/avatars/0.png";
    }
}
