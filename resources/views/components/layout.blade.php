<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? $information['name'] }} - {{ $information['tagline'] }}</title>

    {{-- Tailwind CSS & Custom Styles (Replace with @vite if using Laravel Mix/Vite) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        /* Base styles for the dark theme */
        @layer base {
            body {
                @apply bg-bg-darker text-white font-sans overflow-x-hidden;
                /* Applying the gradient directly to the body for a clean look */
                background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            }
        }
        /* Custom Components */
        @layer components {
            .neon-gradient-text {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-[#00ff87] to-[#60efff];
            }
            .neon-bg-gradient {
                @apply bg-gradient-to-br from-[#00ff87] to-[#60efff];
            }
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bg-dark': '#1a1a2e',
                        'bg-darker': '#16213e',
                        'neon-green': '#00ff87',
                        'neon-blue': '#60efff',
                        'text-muted': '#b4b4b4',
                    },
                }
            }
        }
    </script>

    {{-- Custom Keyframes for a smooth entrance --}}
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

{{ $slot }}

</body>
</html>
