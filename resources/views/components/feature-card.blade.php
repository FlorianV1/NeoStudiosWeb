@props(['icon', 'title', 'description'])

<div class="p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-neon-green/50 transition-all duration-300 hover:shadow-2xl hover:shadow-neon-green/10 flex flex-col items-center text-center">
    <div class="text-5xl mb-4 p-3 bg-neon-green/20 rounded-xl">
        {{ $icon }}
    </div>
    <h3 class="text-3xl font-bold mb-3 neon-gradient-text">{{ $title }}</h3>
    <p class="text-text-muted text-lg">{{ $description }}</p>
</div>
