<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Vourista - Platform Rating Jajanan Terbaik')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
    <!-- Lottie Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
    
    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #f59e0b;
            --secondary-color: #ef4444;
            --accent-color: #10b981;
            --navy-blue: #001f3f;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        /* Navbar hover effect */
        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            background-color: var(--navy-blue);
            color: white !important;
            transform: translateY(-2px);
        }
        
        /* Optional: Add a subtle animation effect */
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--navy-blue);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 80%;
            background-color: white;
        }
        
        .mascot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            width: 120px;
            height: 120px;
        }
        
        .mascot-float {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .star-rating {
            display: inline-flex;
            gap: 2px;
        }
        
        .star {
            font-size: 1.2rem;
            color: #d1d5db;
            transition: color 0.2s;
        }
        
        .star.filled {
            color: #001f3f;
        }
        
        .rating-input {
            display: none;
        }
        
        .rating-label {
            cursor: pointer;
            font-size: 2rem;
            color: #d1d5db;
            transition: color 0.2s;
        }
        
        .rating-label:hover,
        .rating-input:checked ~ .rating-label {
            color: #001f3f;
        }
        
        .counter-animation {
            font-weight: bold;
        }
        
        
        .search-animation {
            transition: all 0.3s ease;
        }
        
        .search-animation:focus {
            transform: scale(1.02);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
        }
    </style>
    
    @stack('styles')
</head>
<body class="min-h-screen bg-gray-50 transition-all duration-300">
    <!-- Navbar -->
    @include('components.navbar')
    
    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('components.footer')
    
    <!-- Mascot -->
    @include('components.mascot')
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });
        
        // Counter animation
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 20);
        }
        
        // Animate counters on page load
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter-animation');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                animateCounter(counter, target);
            });
        });
        
        // Star rating functionality
        function setRating(rating) {
            document.getElementById('rating-input').value = rating;
            const stars = document.querySelectorAll('.rating-star');
            stars.forEach((star, index) => {
                star.classList.toggle('text-yellow-400', index < rating);
                star.classList.toggle('text-gray-300', index >= rating);
            });
        }
        
        // Success message auto-hide
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-auto-hide');
            alerts.forEach(alert => {
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-20px)';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
    </script>
    
    @stack('scripts')
</body>
</html>