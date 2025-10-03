<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Sample data - replace with actual Discord bot data
        $stats = [
            'total_servers' => 150,
            'total_users' => 45000,
            'commands_today' => 1250,
            'uptime' => '99.9%'
        ];

        $recentActivity = [
            ['server' => 'Gaming Hub', 'action' => 'Command executed', 'time' => '2 minutes ago'],
            ['server' => 'Dev Community', 'action' => 'New member joined', 'time' => '5 minutes ago'],
            ['server' => 'Music Lovers', 'action' => 'Settings updated', 'time' => '10 minutes ago'],
        ];

        return view('dashboard.index', compact('stats', 'recentActivity'));
    }
}
