{{-- Load Config Data --}}
@php
    $config = config('neostudios');
    $information = $config['information'];
    $links = $config['links'];
@endphp

{{-- Use the existing Layout and Components for consistency --}}
<x-layout :information="$information" title="Terms of Service">

    {{-- Header --}}
    <x-header :information="$information" :links="$links" />

    <main class="pt-40 pb-20 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Content Wrapper --}}
            <div class="bg-white/5 p-8 md:p-12 lg:p-16 rounded-2xl border border-white/10 shadow-2xl shadow-black/30">

                <h1 class="text-5xl font-extrabold mb-2 neon-gradient-text">
                    Terms of Service
                </h1>
                <p class="text-text-muted mb-8 text-sm">Effective Date: October 2, 2025</p>

                <div class="text-text-muted text-lg leading-relaxed border-b border-white/10 pb-8 mb-8">
                    <p class="text-white">These Terms of Service ("Terms") govern your access to and use of the {{ $information['name'] }} Discord bot and related services (collectively, "the Service"). By using the Service, you agree to be bound by these Terms.</p>
                </div>

                {{-- Section 1: Acceptance --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">1.</span> Acceptance of Terms
                    </h2>
                    <p class="text-text-muted leading-relaxed">By adding {{ $information['name'] }} to your Discord server or otherwise using the Service, you confirm that you have read, understood, and agree to these Terms. If you do not agree, you must not use the Service.</p>
                </div>

                {{-- Section 2: Use of the Service --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">2.</span> User Conduct
                    </h2>
                    <p class="text-text-muted leading-relaxed">You agree not to use the Service to:</p>
                    <ul class="list-disc ml-6 space-y-2 text-text-muted mt-4">
                        <li>Violate Discord's Terms of Service or Community Guidelines.</li>
                        <li>Transmit or upload any content that is illegal, harmful, threatening, or abusive.</li>
                        <li>Overload, disrupt, or attack the Service or its hosting infrastructure.</li>
                        <li>Attempt to gain unauthorized access to any part of the Service.</li>
                    </ul>
                </div>

                {{-- Section 3: Intellectual Property --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">3.</span> Intellectual Property
                    </h2>
                    <p class="text-text-muted leading-relaxed">The Service, including its code, design, and content, is the property of {{ $information['name'] }} and is protected by copyright and other intellectual property laws. You may not copy, modify, distribute, or create derivative works without explicit written permission.</p>
                </div>

                {{-- Section 4: Disclaimer and Limitation of Liability --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">4.</span> Disclaimer and Liability
                    </h2>
                    <p class="text-text-muted leading-relaxed">The Service is provided "as is," without warranty of any kind. We do not guarantee that the Service will be uninterrupted or error-free.</p>
                    <div class="bg-red-900/10 border-l-4 border-red-600 p-4 mt-6 rounded-lg text-white">
                        <p class="font-semibold text-white">Limitation of Liability</p>
                        <p class="text-sm text-text-muted mt-1">In no event shall {{ $information['name'] }} be liable for any indirect, incidental, special, consequential, or punitive damages arising out of your use of the Service.</p>
                    </div>
                </div>

                {{-- Section 5: Termination --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">5.</span> Termination
                    </h2>
                    <p class="text-text-muted leading-relaxed">We may terminate or suspend your access to the Service immediately, without prior notice or liability, for any reason, including without limitation if you breach the Terms.</p>
                </div>

                {{-- Section 6: Changes to Terms --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">6.</span> Changes to Terms
                    </h2>
                    <p class="text-text-muted leading-relaxed">We reserve the right, at our sole discretion, to modify or replace these Terms at any time. We will notify you of any changes by posting the new Terms on this page.</p>
                </div>

                {{-- Contact Box --}}
                <div class="bg-neon-blue/10 border border-neon-blue/50 p-6 rounded-xl mt-12 text-center">
                    <h3 class="text-2xl font-bold text-neon-blue mb-3">Governing Law</h3>
                    <p class="text-text-muted mb-4">These Terms shall be governed by and construed in accordance with the laws of your jurisdiction.</p>
                    <a href="{{ $links['support'] }}" target="_blank" class="px-8 py-3 rounded-full font-semibold text-md bg-neon-blue text-bg-darker hover:shadow-xl hover:shadow-neon-blue/30 transition-all duration-300">
                        Ask a Question
                    </a>
                </div>

            </div>
        </div>
    </main>

    {{-- Footer --}}
    <x-footer :information="$information" :links="$links" />

</x-layout>
