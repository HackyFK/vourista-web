<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Vourista</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Variabel CSS untuk konsistensi */
        :root {
            --primary-blue: #0f1c4d;
            --secondary-blue: #13225c;
            --accent-purple: #2a2466;
            --light-yellow: #FCD34D;
            --dark-yellow: #F59E0B;
            --orange: #F97316;
        }

        body {
            overflow: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 50%, var(--accent-purple) 100%);
            animation: backgroundPulse 8s ease-in-out infinite alternate;
        }
        
        @keyframes backgroundPulse {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        /* Animasi pembuka - overlay splash screen */
        .splash-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary-blue);
            z-index: 50;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: splashHide 0.8s ease-in-out forwards;
            animation-delay: 1.2s;
        }
        
        @keyframes splashHide {
            0% { opacity: 1; transform: scale(1); }
            100% { opacity: 0; transform: scale(1.2); visibility: hidden; }
        }
        
        .splash-logo {
            font-size: 3.5rem;
            font-weight: bold;
            color: white;
            opacity: 0;
            animation: splashReveal 1s ease-out forwards;
        }
        
        @keyframes splashReveal {
            0% { opacity: 0; transform: scale(0.8); }
            70% { transform: scale(1.1); }
            100% { opacity: 1; transform: scale(1); }
        }

        /* Animasi mascot */
        .mascot-container {
            opacity: 0;
            animation: mascotEntrance 1.5s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 1.8s;
        }
        
        @keyframes mascotEntrance {
            0% { 
                transform: scale(0) translateY(-100px);
                opacity: 0;
            }
            70% {
                transform: scale(1.1) translateY(10px);
            }
            100% { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        /* Animasi floating untuk mascot */
        .mascot-float {
            animation: float 4s ease-in-out infinite;
            animation-delay: 3s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        /* Animasi mata berkedip */
        .eye {
            transform-origin: center;
            animation: blink 4s infinite;
            animation-delay: 3.5s;
        }
        
        @keyframes blink {
            0%, 90%, 94%, 98%, 100% { transform: scaleY(1); }
            92%, 96% { transform: scaleY(0.1); }
        }

        /* Animasi tangan melambaikan */
        .wave {
            animation: wave 2s ease-in-out infinite;
            animation-delay: 4s;
        }
        
        .wave-left {
            transform-origin: top right;
        }
        
        .wave-right {
            transform-origin: top left;
        }
        
        @keyframes wave {
            0%, 50%, 100% { transform: rotate(0); }
            25% { transform: rotate(25deg); }
            75% { transform: rotate(-25deg); }
        }

        /* Animasi teks typing */
        .typing-text {
            overflow: hidden;
            white-space: nowrap;
            width: 0;
            animation: typing 2s steps(20, end) forwards;
            animation-delay: 2.8s;
        }
        
        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }
        
        .cursor::after {
            content: "|";
            animation: blinkCursor 1s infinite;
            animation-delay: 4.8s;
        }
        
        @keyframes blinkCursor {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }

        /* Animasi fade in */
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }
        
        @keyframes fadeIn {
            to { opacity: 1; }
        }

        /* Animasi progress bar */
        .progress-animation {
            animation: progress 2.5s ease-in-out forwards;
            animation-delay: 5s;
        }
        
        @keyframes progress {
            from { width: 0%; }
            to { width: 100%; }
        }

        /* Efek sparkle */
        .sparkle {
            animation: sparkle 3s ease-in-out infinite;
        }
        
        @keyframes sparkle {
            0%, 100% { opacity: 0; transform: scale(0); }
            50% { opacity: 1; transform: scale(1); }
        }

        /* Animasi fade out */
        .fade-out {
            animation: fadeOut 1s ease-in-out forwards;
        }
        
        @keyframes fadeOut {
            to { opacity: 0; transform: scale(0.95); }
        }

        /* Mascot styling */
        .mascot-body {
            width: 8rem;
            height: 8rem;
            background: linear-gradient(135deg, #FCD34D 0%, #F59E0B 50%, #F97316 100%);
            border-radius: 50%;
            position: relative;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Responsif */
        @media (max-width: 640px) {
            .mascot-container { transform: scale(0.85); }
            .intro-text { font-size: 1.75rem; }
            .sub-text { font-size: 1rem; }
            .splash-logo { font-size: 2.5rem; }
            .mascot-body {
                width: 6rem;
                height: 6rem;
            }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center relative">
    
    <!-- Splash Screen Pembuka -->
    <div class="splash-overlay">
        <div class="splash-logo">VOURISTA</div>
    </div>

    <!-- Sparkle Effects -->
    <div class="sparkle absolute w-2 h-2 bg-yellow-300 rounded-full" style="top: 15%; left: 8%; animation-delay: 0s;"></div>
    <div class="sparkle absolute w-2 h-2 bg-yellow-300 rounded-full" style="top: 25%; right: 12%; animation-delay: 0.5s;"></div>
    <div class="sparkle absolute w-2 h-2 bg-yellow-300 rounded-full" style="bottom: 30%; left: 15%; animation-delay: 1s;"></div>
    <div class="sparkle absolute w-2 h-2 bg-yellow-300 rounded-full" style="top: 12%; right: 25%; animation-delay: 1.5s;"></div>

    <!-- Main Content -->
    <div class="text-center z-10 relative px-4">
        
        <!-- Mascot -->
        <div class="mascot-container mb-6 md:mb-8 relative">
            <div class="mascot-body mx-auto mascot-float relative">
                <!-- Topi Chef -->
                <div class="chef-hat absolute -top-7 md:-top-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center">
                    <div class="w-8 h-5 md:w-10 md:h-6 bg-blue-500 rounded-t-full flex items-center justify-center">
                        <span class="text-xs md:text-sm font-bold text-white">V</span>
                    </div>
                    <div class="w-10 h-2 md:w-12 md:h-3 bg-blue-600 rounded-md -mt-1"></div>
                </div>

                <!-- Wajah -->
                <div class="eyes absolute top-7 md:top-8 left-1/2 transform -translate-x-1/2 flex space-x-6 md:space-x-8">
                    <div class="eye w-3 h-3 md:w-4 md:h-4 bg-black rounded-full"></div>
                    <div class="eye w-3 h-3 md:w-4 md:h-4 bg-black rounded-full"></div>
                </div>
                <div class="mouth absolute top-12 md:top-14 left-1/2 transform -translate-x-1/2 w-6 h-2 md:w-8 md:h-2 bg-black rounded-full"></div>
                
                <!-- Tangan -->
                <div class="wave wave-left absolute -left-4 top-10 w-6 h-2 md:w-7 md:h-2 bg-yellow-400 rounded-full"></div>
                <div class="wave wave-right absolute -right-4 top-10 w-6 h-2 md:w-7 md:h-2 bg-yellow-400 rounded-full"></div>

                <!-- Kaki -->
                <div class="absolute -bottom-1 left-7 md:left-9 w-2 h-4 md:w-3 md:h-5 bg-orange-500 rounded-full"></div>
                <div class="absolute -bottom-1 right-7 md:right-9 w-2 h-4 md:w-3 md:h-5 bg-orange-500 rounded-full"></div>
            </div>
        </div>

        <!-- Text Introduction -->
        <div class="text-white space-y-4 md:space-y-6 max-w-lg mx-auto">
            <div class="space-y-2">
                <h1 class="intro-text text-2xl md:text-3xl font-bold">
                    <span class="typing-text cursor">Halo! Saya Voury!</span>
                </h1>
                <div class="h-1 w-16 md:w-24 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full mx-auto fade-in" style="animation-delay: 4s;"></div>
            </div>
            
            <div class="space-y-3 md:space-y-4 text-sm md:text-base">
                <p class="fade-in" style="animation-delay: 4.5s;">
                    Selamat datang di <span class="font-bold text-yellow-300">Vourista</span> 
                </p>
                <p class="fade-in text-blue-200" style="animation-delay: 5s;">
                    Jelajahi cita rasa istimewa bersama kami
                </p>
                <p class="fade-in text-yellow-200 text-xs md:text-sm" style="animation-delay: 5.5s;">
                    #CeritaManisDiLidah
                </p>
            </div>
        </div>

        <!-- Loading Progress -->
        <div class="mt-8 md:mt-10 fade-in" style="animation-delay: 6s;">
            <div class="relative w-48 md:w-72 mx-auto">
                <div class="w-full h-2 bg-white/20 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full progress-animation"></div>
                </div>
                <div class="flex justify-between text-xs text-white/70 mt-2">
                    <span>Menyiapkan...</span>
                    <span id="progress-percent">0%</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Progress counter animation
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const progressElement = document.getElementById('progress-percent');
                let progress = 0;
                const targetProgress = 100;
                const duration = 4000; // 4 seconds
                const interval = 50;
                const steps = duration / interval;
                const increment = targetProgress / steps;
                
                const progressInterval = setInterval(() => {
                    progress += increment;
                    if (progress >= targetProgress) {
                        progress = targetProgress;
                        clearInterval(progressInterval);
                    }
                    progressElement.textContent = Math.round(progress) + '%';
                }, interval);
            }, 5000); // Start after 5 seconds

            // Auto redirect after animation completes
            setTimeout(() => {
                document.body.classList.add('fade-out');
                setTimeout(() => {
                    // Redirect to main page - sesuaikan dengan route Laravel Anda
                    window.location.href = "{{ route('home') }}"; // atau URL tujuan Anda
                }, 1000);
            }, 9000); // Total durasi 9 detik

            // Skip intro on click
            document.addEventListener('click', () => {
                document.body.classList.add('fade-out');
                setTimeout(() => {
                    window.location.href = "{{ route('home') }}";
                }, 500);
            });

            // Skip intro on keypress
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    document.body.classList.add('fade-out');
                    setTimeout(() => {
                        window.location.href = "{{ route('home') }}";
                    }, 500);
                }
            });
        });
    </script>
</body>
</html>