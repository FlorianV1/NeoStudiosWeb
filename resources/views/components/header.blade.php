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

            {{-- Navigation Links (Desktop) --}}
            <ul class="hidden md:flex space-x-8 list-none">
                <li><a href="#features" class="text-white hover:text-neon-green transition duration-300 font-medium">Features</a></li>
                <li><a href="#stats" class="text-white hover:text-neon-green transition duration-300 font-medium">Stats</a></li>
                <li><a href="{{ $links['support'] }}" target="_blank" class="text-white hover:text-neon-green transition duration-300 font-medium">Support</a></li>
            </ul>
        </nav>
    </div>
</header>
