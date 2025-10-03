<?php

return [
    'information' => [
        'name' => 'Neo Studios Bot', // Changed name slightly for better demo
        'tagline' => 'Level Up Your Discord Server', // Browser title and tagline
        'logo' => '🚀',
        'description' => 'The ultimate Discord bot with powerful moderation, engaging games, and advanced automation features.',
    ],
    'links' => [
        'invite' => 'https://discord.com/oauth2/authorize?client_id=1422951731981062296&response_type=code&redirect_uri=http%3A%2F%2Fneostudiosweb.test%2Fauth%2Fdiscord%2Fcallback&scope=identify+guilds+email',
        'support' => 'https://discord.gg/XTRpThZwTB',
        'privacy' => '/privacy-policy',
        'terms' => '/terms-of-service',
        'login' => '/auth/discord',
        'dashboard' => '/dashboard',
    ],
    'features' => [
        [
            'icon' => '🛡️',
            'title' => 'Powerful Moderation',
            'description' => 'Automatic anti-raid, custom rules, and a full logging system to keep your community safe 24/7.',
        ],
        [
            'icon' => '🎮',
            'title' => 'Engaging Games & Fun',
            'description' => 'From trivia and gambling to custom leveling, give your members a reason to stay and play.',
        ],
        [
            'icon' => '🤖',
            'title' => 'Advanced Automation',
            'description' => 'Self-assignable roles, welcome messages, and webhooks to automate daily server management tasks.',
        ],
    ],
    'stats' => [
        'column-1' => 'Servers',
        'column-2' => 'Users',
        'column-3' => 'Uptime',
        'column-4' => 'Support',

        'column-1-answer' => '100+',
        'column-2-answer' => '4,000+',
        'column-3-answer' => '99.99%',
        'column-4-answer' => '24/7',
    ],
];
