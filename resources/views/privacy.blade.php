{{-- Load Config Data --}}
@php
    $config = config('neostudios');
    $information = $config['information'];
    $links = $config['links'];
@endphp

{{-- Use the existing Layout and Components for consistency --}}
<x-layout :information="$information" title="Privacy Policy">

    {{-- Header --}}
    <x-header :information="$information" :links="$links" />

    <main class="pt-40 pb-20 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Content Wrapper --}}
            <div class="bg-white/5 p-8 md:p-12 lg:p-16 rounded-2xl border border-white/10 shadow-2xl shadow-black/30">

                <h1 class="text-5xl font-extrabold mb-2 neon-gradient-text">
                    Privacy Policy
                </h1>
                <p class="text-text-muted mb-8 text-sm">Last Updated: October 2, 2025</p>

                <div class="text-text-muted text-lg leading-relaxed border-b border-white/10 pb-8 mb-8">
                    <p class="text-white">At {{ $information['name'] }}, we take your privacy seriously. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our Discord bot and related services. Please read this policy carefully.</p>
                </div>

                {{-- Section: Information We Collect --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">📋</span> Information We Collect
                    </h2>

                    <h3 class="text-2xl font-semibold mt-6 mb-3 text-neon-blue">Automatically Collected Information</h3>
                    <p class="text-text-muted mb-4 leading-relaxed">When you use {{ $information['name'] }}, we automatically collect certain information:</p>
                    <ul class="list-disc ml-6 space-y-2 text-text-muted">
                        <li><strong>Discord User ID:</strong> Your unique Discord identifier.</li>
                        <li><strong>Server Information:</strong> Server IDs, channel IDs, and custom bot configurations.</li>
                        <li><strong>Usage Data:</strong> Command usage, feature interactions, and error logs, used solely for operational stability.</li>
                    </ul>

                    <h3 class="text-2xl font-semibold mt-6 mb-3 text-neon-blue">Information You Provide</h3>
                    <p class="text-text-muted mb-4 leading-relaxed">We collect information that you voluntarily provide when setting up or using our bot:</p>
                    <ul class="list-disc ml-6 space-y-2 text-text-muted">
                        <li>Custom configuration settings (e.g., welcome message content, moderation rules).</li>
                        <li>Feedback, bug reports, and support inquiries.</li>
                    </ul>
                </div>

                {{-- Section: Data Use --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">🎯</span> How We Use Your Information
                    </h2>
                    <p class="text-text-muted mb-4 leading-relaxed">We use the collected information to:</p>
                    <ul class="list-disc ml-6 space-y-2 text-text-muted">
                        <li>Provide and maintain the bot's core functionality and features.</li>
                        <li>Monitor and analyze usage to improve the bot's quality and performance.</li>
                        <li>Detect, prevent, and address technical issues and malicious activity.</li>
                        <li>Fulfill requests for customer support and communicate with you about service changes.</li>
                    </ul>
                </div>

                {{-- Section: Storage and Retention --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">🔒</span> Data Storage and Security
                    </h2>
                    <p class="text-text-muted mb-4 leading-relaxed">We implement industry-standard security measures to protect your data. Data is stored on secure, encrypted servers.</p>

                    <div class="bg-neon-green/10 border-l-4 border-neon-green p-4 mt-6 rounded-lg text-white">
                        <p class="font-semibold text-white">Data Retention Policy</p>
                        <p class="text-sm text-text-muted mt-1">We retain your data only for as long as necessary to provide our services. Server-specific data is generally deleted within 90 days after the bot is removed from the server.</p>
                    </div>
                </div>

                {{-- Section: Data Sharing --}}
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-5 text-neon-green flex items-center gap-3">
                        <span class="text-4xl">🤝</span> Data Sharing and Disclosure
                    </h2>
                    <p class="text-text-muted leading-relaxed">We do not sell your personal data. We may share data only under the following circumstances:</p>
                    <ul class="list-disc ml-6 space-y-2 text-text-muted mt-4">
                        <li>**Service Providers:** With trusted third parties who assist us in operating the service (e.g., hosting).</li>
                        <li>**Legal Compliance:** To comply with legal obligations, such as law enforcement requests or court orders.</li>
                    </ul>
                </div>

                {{-- Section: Contact --}}
                <div class="bg-neon-blue/10 border border-neon-blue/50 p-6 rounded-xl mt-12 text-center">
                    <h3 class="text-2xl font-bold text-neon-blue mb-3">Questions & Contact</h3>
                    <p class="text-text-muted mb-4">If you have questions about this policy or wish to exercise your data rights, please contact us:</p>
                    <a href="{{ $links['support'] }}" target="_blank" class="px-8 py-3 rounded-full font-semibold text-md bg-neon-blue text-bg-darker hover:shadow-xl hover:shadow-neon-blue/30 transition-all duration-300">
                        Join Support Server
                    </a>
                </div>

            </div>
        </div>
    </main>

    {{-- Footer --}}
    <x-footer :information="$information" :links="$links" />

</x-layout>
