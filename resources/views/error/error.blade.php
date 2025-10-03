<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - Neostudios</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <script>
        // Custom Tailwind Configuration to define theme colors (based on the provided Blade template context)
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bg-dark': '#0a0a0a',
                        'text-muted': '#a0a0a0',
                        'neon-green': '#39ff14',
                        'neon-cyan': '#00ffff',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        /* Base Dark Theme & Font */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0a0a; /* Matches bg-dark */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Neon Gradient Text Style */
        .neon-gradient-text {
            /* Uses the custom neon colors defined in Tailwind config */
            background-image: linear-gradient(45deg, var(--tw-colors-neon-green), var(--tw-colors-neon-cyan), var(--tw-colors-neon-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
            /* Subtle glow effect for the text */
            text-shadow: 0 0 5px rgba(57, 255, 20, 0.5), 0 0 10px rgba(0, 255, 255, 0.3);
        }

        /* Neon Background Gradient for Buttons */
        .neon-bg-gradient {
            background: linear-gradient(45deg, #39ff14, #00ffff);
        }

        /* Neon Glow Box Shadow for the main container */
        .neon-glow-box {
            box-shadow: 0 0 25px rgba(57, 255, 20, 0.15);
            border: 1px solid rgba(57, 255, 20, 0.2);
        }
    </style>
</head>
<body class="p-4">

<!-- Error Content Container -->
<div id="error-container" class="text-center p-10 sm:p-16 lg:p-20 rounded-3xl neon-glow-box bg-white/5 max-w-lg w-full transition-all duration-500">

    <!-- Large Error Code -->
    <h1 id="error-code" class="text-[120px] sm:text-[180px] font-extrabold mb-4 leading-none neon-gradient-text">
        404
    </h1>

    <!-- Error Title -->
    <h2 id="error-title" class="text-4xl sm:text-5xl font-extrabold mb-4 text-white">
        Page Not Found
    </h2>

    <!-- Error Description -->
    <p id="error-description" class="text-xl text-text-muted mb-10 max-w-md mx-auto">
        The requested module has been lost in the void. Check the URL or return to the landing zone.
    </p>

    <!-- Call to Action Button -->
    <div class="flex gap-4 justify-center">
        <a href="/" class="px-8 py-3 rounded-full font-semibold text-lg neon-bg-gradient text-bg-dark shadow-lg shadow-neon-green/30 hover:shadow-neon-green/50 transition-all duration-300 transform hover:scale-[1.02]">
            ⟲ Return to Home
        </a>
    </div>
</div>

<script>
    const errorData = {
        '500': {
            code: '500',
            title: 'Server Overload',
            description: "It looks like our quantum processor experienced a minor temporal distortion. We're working to restore the proper timeline."
        },
        '503': {
            code: '503',
            title: 'System Maintenance',
            description: 'We are currently upgrading our flux capacitor. We apologize for the temporary disruption and will be back online shortly!'
        },
        '404': {
            code: '404',
            title: 'Page Not Found',
            description: 'The requested module has been lost in the void. Check the URL or return to the landing zone.'
        },
        '403': {
            code: '403',
            title: 'Access Denied',
            description: 'Your clearance level is insufficient for this area. Unauthorized access will trigger defensive protocols.'
        },
        'maintenance': {
            code: '🛠️',
            title: 'Scheduled Downtime',
            description: 'Our digital engineers are performing essential upgrades to enhance your experience. We appreciate your patience.'
        }
    };

    // Function to update the content based on the error key
    function updateErrorPage(key) {
        const data = errorData[key] || errorData['500']; // Default to 500 if key is invalid

        document.getElementById('error-code').textContent = data.code;
        document.getElementById('error-title').textContent = data.title;
        document.getElementById('error-description').textContent = data.description;

        // Apply slight animation for visual feedback on change
        const container = document.getElementById('error-container');
        container.classList.remove('animate-pulse');
        void container.offsetWidth; // Trigger reflow
        container.classList.add('animate-pulse');
        setTimeout(() => container.classList.remove('animate-pulse'), 500);
    }

    // --- DEMONSTRATION/CUSTOMIZATION ---
    // You would typically replace '404' with the actual error code
    // passed from your server (e.g., in a PHP variable).

    // Example of how to load a specific error (e.g., 503 Maintenance)
    // To use this, change the 'defaultErrorKey' below:
    const defaultErrorKey = '404'; // Change this to '503' to see the maintenance message!
    updateErrorPage(defaultErrorKey);

    // Simple animation placeholder (you can define better keyframes in the style block)
    const style = document.createElement('style');
    style.textContent = `@keyframes pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.01); } }
                             .animate-pulse { animation: pulse 0.3s ease-in-out; }`;
    document.head.appendChild(style);
</script>
</body>
</html>
