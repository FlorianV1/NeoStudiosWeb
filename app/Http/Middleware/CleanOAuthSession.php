<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CleanOAuthSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Clean up old callback processed flags (older than 5 minutes)
        if (session()->has('discord_callback_processed_at')) {
            $processedAt = session()->get('discord_callback_processed_at');
            $elapsed = time() - $processedAt;

            if ($elapsed > 300) { // 5 minutes
                Log::info('Cleaning up old OAuth session data (processed ' . $elapsed . ' seconds ago)');
                session()->forget(['discord_callback_processed', 'discord_callback_processed_at']);
            }
        }

        // Clean up stale OAuth in progress flags (older than 2 minutes)
        if (session()->has('discord_oauth_timestamp')) {
            $timestamp = session()->get('discord_oauth_timestamp');
            $elapsed = time() - $timestamp;

            if ($elapsed > 120) { // 2 minutes
                Log::info('Cleaning up stale OAuth in progress flag (started ' . $elapsed . ' seconds ago)');
                session()->forget(['discord_oauth_in_progress', 'discord_oauth_timestamp', 'discord_oauth_state']);
            }
        }

        return $next($request);
    }
}
