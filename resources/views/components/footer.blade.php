<footer class="py-12 bg-black/30 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-start flex-wrap gap-8">
            {{-- Logo and Name --}}
            <div class="flex items-center space-x-4 text-2xl font-bold">
                <div class="w-12 h-12 neon-bg-gradient rounded-xl flex items-center justify-center text-2xl">
                    {{ $information['logo'] }}
                </div>
                <span>{{ $information['name'] }}</span>
            </div>

            {{-- Footer Links --}}
            <ul class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-8 list-none">
                <li><a href="{{ $links['support'] }}" target="_blank" class="text-text-muted hover:text-neon-green transition text-base">Support Server</a></li>
                <li><a href="#features" class="text-text-muted hover:text-neon-green transition text-base">Features</a></li>
                <li><a href="{{ $links['privacy'] ?? '/privacy' }}" class="text-text-muted hover:text-neon-green transition text-base">Privacy Policy</a></li>
                <li><a href="{{ $links['terms'] ?? '/terms' }}" class="text-text-muted hover:text-neon-green transition text-base">Terms of Service</a></li>
            </ul>
        </div>

        {{-- Copyright --}}
        <div class="w-full text-center text-gray-500 mt-12 pt-6 border-t border-white/10">
            <p>&copy; {{ date('Y') }} {{ $information['name'] }}. All rights reserved.</p>
        </div>
    </div>
</footer>
