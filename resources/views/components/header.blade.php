@props(['information', 'links', 'userIsLoggedIn' => false])

<header class="fixed w-full top-0 z-40 bg-bg-dark/95 backdrop-blur-md border-b border-white/10 py-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex justify-between items-center">
            {{-- Logo and Name --}}
            <a href="/" class="flex items-center space-x-4 text-2xl font-bold hover:text-white transition duration-300">
                <div class="w-12 h-12 neon-bg-gradient rounded-xl flex items-center justify-center text-2xl shadow-lg">
                    {{ $information['logo'] }}
                </div>
                <span>{{ $information['name'] }}</span>
            </a>

            <div class="flex items-center space-x-6">
                {{-- Navigation Links (Desktop) --}}
                <ul class="hidden md:flex space-x-8 list-none">
                    <li><a href="#features" class="text-white hover:text-neon-green transition duration-300 font-medium">Features</a></li>
                    <li><a href="#stats" class="text-white hover:text-neon-green transition duration-300 font-medium">Stats</a></li>
                    <li><a href="{{ $links['support'] }}" target="_blank" class="text-white hover:text-neon-green transition duration-300 font-medium">Support</a></li>
                </ul>

                {{-- Login/Dashboard Button (The New Addition) --}}
                @if ($userIsLoggedIn)
                    <a href="/dashboard" class="px-5 py-2 rounded-full font-semibold text-base neon-bg-gradient text-bg-dark hover:shadow-xl hover:shadow-neon-green/30 transition-all duration-300 transform hover:scale-105">
                        Dashboard
                    </a>
                @else
                    {{-- Assuming 'login' link is defined in your config or is a known route --}}
                    {{-- Updated: If $links['login'] is not set, default to the discord login route --}}
                    <a href="{{ $links['login'] ?? route('discord.login') }}" class="px-5 py-2 rounded-full font-semibold text-base bg-transparent text-neon-green border-2 border-neon-green hover:bg-neon-green/10 transition-all duration-300 transform hover:scale-105">
                        Login
                    </a>
                @endif
            </div>
        </nav>
    </div>
</header>
