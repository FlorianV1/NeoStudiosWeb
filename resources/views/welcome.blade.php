{{-- Load Config Data --}}
@php
    $config = config('neostudios');
    $information = $config['information'];
    $links = $config['links'];
    $features = $config['features'];
    $stats = $config['stats'];
@endphp

{{-- Use the new Layout Component --}}
<x-layout :information="$information" title="Home">

    {{-- Include Header --}}
    <x-header :information="$information" :links="$links" />

    {{-- Hero Section --}}
    <section class="pt-48 pb-24 text-center" style="animation: fadeIn 1s ease-out forwards;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-7xl md:text-8xl font-extrabold mb-5 neon-gradient-text">
                {{ $information['tagline'] }}
            </h1>
            <p class="text-xl text-text-muted mb-10 max-w-3xl mx-auto">
                {{ $information['description'] }}
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="{{ $links['invite'] }}" target="_blank" class="px-10 py-4 rounded-full font-semibold text-lg neon-bg-gradient text-bg-dark shadow-lg shadow-neon-green/30 hover:shadow-neon-green/50 transition-all duration-300 transform hover:scale-[1.02]">
                    ➕ Add to Discord
                </a>
                <a href="{{ $links['support'] }}" target="_blank" class="px-10 py-4 rounded-full font-semibold text-lg bg-transparent text-white border-2 border-neon-green hover:bg-neon-green/10 transition-all duration-300 transform hover:scale-[1.02]">
                    💬 Join Support Server
                </a>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="py-24 bg-white/5" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-5xl font-extrabold text-center mb-16 neon-gradient-text">
                Powerful Features
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($features as $feature)
                    <x-feature-card :icon="$feature['icon']" :title="$feature['title']" :description="$feature['description']" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-20 text-center" id="stats">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-5xl font-extrabold mb-12 neon-gradient-text">
                Trusted by Communities
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <h3 class="text-6xl font-extrabold neon-gradient-text">{{ $stats['servers'] }}</h3>
                    <p class="text-lg text-text-muted mt-2">Servers</p>
                </div>
                <div class="text-center">
                    <h3 class="text-6xl font-extrabold neon-gradient-text">{{ $stats['users'] }}</h3>
                    <p class="text-lg text-text-muted mt-2">Users</p>
                </div>
                <div class="text-center">
                    <h3 class="text-6xl font-extrabold neon-gradient-text">{{ $stats['uptime'] }}</h3>
                    <p class="text-lg text-text-muted mt-2">Uptime</p>
                </div>
                <div class="text-center">
                    <h3 class="text-6xl font-extrabold neon-gradient-text">24/7</h3>
                    <p class="text-lg text-text-muted mt-2">Support</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Include Footer --}}
    <x-footer :information="$information" :links="$links" />

</x-layout>
