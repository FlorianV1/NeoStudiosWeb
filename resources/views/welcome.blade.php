<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'name' }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #fff;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: rgba(26, 26, 46, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 24px;
            font-weight: bold;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #00ff87 0%, #60efff 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #00ff87;
        }

        /* Hero Section */
        .hero {
            padding: 180px 0 100px;
            text-align: center;
        }

        .hero h1 {
            font-size: 64px;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #00ff87 0%, #60efff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 20px;
            color: #b4b4b4;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #00ff87 0%, #60efff 100%);
            color: #1a1a2e;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 255, 135, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid #00ff87;
        }

        .btn-secondary:hover {
            background: rgba(0, 255, 135, 0.1);
            transform: translateY(-3px);
        }

        /* Features Section */
        .features {
            padding: 100px 0;
            background: rgba(255, 255, 255, 0.02);
        }

        .section-title {
            text-align: center;
            font-size: 48px;
            margin-bottom: 60px;
            background: linear-gradient(135deg, #00ff87 0%, #60efff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: #00ff87;
            box-shadow: 0 20px 40px rgba(0, 255, 135, 0.1);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #00ff87 0%, #60efff 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #fff;
        }

        .feature-card p {
            color: #b4b4b4;
            line-height: 1.6;
        }

        /* Stats Section */
        .stats {
            padding: 80px 0;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .stat-item h3 {
            font-size: 48px;
            background: linear-gradient(135deg, #00ff87 0%, #60efff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }

        .stat-item p {
            color: #b4b4b4;
            font-size: 18px;
        }

        /* Footer */
        footer {
            padding: 60px 0 30px;
            background: rgba(0, 0, 0, 0.3);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .footer-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .footer-links a {
            color: #b4b4b4;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #00ff87;
        }

        .copyright {
            width: 100%;
            text-align: center;
            color: #666;
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .hero {
            animation: fadeIn 1s;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 40px;
            }

            .nav-links {
                display: none;
            }

            .section-title {
                font-size: 32px;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <nav>
            <div class="logo">
                <div class="logo-icon">🚀</div>
                <span>NeoBot</span>
            </div>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#stats">Stats</a></li>
                <li><a href="https://discord.gg/XTRpThZwTB" target="_blank">Support</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="container">
        <h1>Level Up Your Discord Server</h1>
        <p>The ultimate Discord bot with powerful moderation, engaging games, and advanced automation features.</p>
        <div class="cta-buttons">
            <a href="https://discord.com/api/oauth2/authorize?client_id=YOUR_CLIENT_ID&permissions=8&scope=bot%20applications.commands" target="_blank" class="btn btn-primary">
                ➕ Add to Discord
            </a>
            <a href="https://discord.gg/XTRpThZwTB" target="_blank" class="btn btn-secondary">
                💬 Join Support Server
            </a>
        </div>
    </div>
</section>

<section class="features" id="features">
    <div class="container">
        <h2 class="section-title">Powerful Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Advanced Moderation</h3>
                <p>Keep your server safe with auto-mod, custom filters, warnings, mutes, and comprehensive logging systems.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🎮</div>
                <h3>Fun & Games</h3>
                <p>Engage your community with mini-games, trivia, economy system, leveling, and custom rewards.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🎵</div>
                <h3>Music Player</h3>
                <p>High-quality music streaming from multiple sources with playlists, queue management, and audio filters.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">⚙️</div>
                <h3>Customization</h3>
                <p>Fully customizable commands, welcome messages, role menus, and automated workflows for your server.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Analytics</h3>
                <p>Track server growth, member activity, message stats, and get insights with beautiful dashboards.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🔔</div>
                <h3>Notifications</h3>
                <p>Get updates for YouTube, Twitch, Twitter, Reddit, and more with customizable notification channels.</p>
            </div>
        </div>
    </div>
</section>

<section class="stats" id="stats">
    <div class="container">
        <h2 class="section-title">Trusted by Communities</h2>
        <div class="stats-grid">
            <div class="stat-item">
                <h3>50K+</h3>
                <p>Servers</p>
            </div>
            <div class="stat-item">
                <h3>2M+</h3>
                <p>Users</p>
            </div>
            <div class="stat-item">
                <h3>99.9%</h3>
                <p>Uptime</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Support</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="logo">
                <div class="logo-icon">🚀</div>
                <span>YourBot</span>
            </div>
            <ul class="footer-links">
                <li><a href="https://discord.gg/yourserver" target="_blank">Support Server</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/terms">Terms of Service</a></li>
            </ul>
        </div>
        <div class="copyright">
            <p>&copy; 2025 YourBot. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
