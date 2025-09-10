{{-- @extends('layouts.app')

@section('title', 'Menu - Platform Rating Jajanan Terbaik')

@section('content')
<div class="pt-16">
    <!-- Hero Section with Animated Background -->
    <section class="gradient-bg text-white py-16 relative overflow-hidden">
        <!-- Animated Background Elements (same as home) -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
                <div class="shape shape-5"></div>
            </div>
            
            <!-- Animated Grid Pattern -->
            <div class="grid-pattern"></div>
            
            <!-- Floating Food Icons -->
            <div class="food-icons">
                <div class="food-icon food-icon-1">🍩</div>
                <div class="food-icon food-icon-2">🍘</div>
                <div class="food-icon food-icon-3">🧁</div>
                <div class="food-icon food-icon-4">🥧</div>
                <div class="food-icon food-icon-5">🍡</div>
            </div>
        </div>

        <!-- Hero Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 hero-title">
                    Menu <span class="text-blue-300 highlight-text">Jajanan</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 hero-subtitle">
                    Jelajahi berbagai pilihan jajanan tradisional dan modern terbaik
                </p>
            </div>
        </div>
    </section>

    <!-- Menu Cards Section -->
    <section class="py-16 bg-gradient-to-b from-white to-slate-50 relative overflow-hidden">
        <!-- Subtle Background Animation -->
        <div class="absolute inset-0">
            <div class="card-bg-animation">
                <div class="bg-circle bg-circle-1"></div>
                <div class="bg-circle bg-circle-2"></div>
                <div class="bg-circle bg-circle-3"></div>
                <div class="bg-line bg-line-1"></div>
                <div class="bg-line bg-line-2"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-4 section-title">
                    Pilihan Jajanan Terbaik
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Koleksi jajanan pilihan dengan cita rasa autentik dan kualitas terbaik
                </p>
            </div>

            <!-- Menu Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 lg:gap-8">
                
                <!-- Menu Item 1: Donat -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative card-image-container">
                        <img
                            src="{{ asset('images/donat.jpg') }}"
                            alt="Donat"
                            class="w-full h-48 object-cover card-image"
                            onerror="this.src='https://via.placeholder.com/400x300/FF6B6B/FFFFFF?text=Donat'"
                        >
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-navy-800 mb-2 card-title">Donat</h3>
                        <p class="text-gray-600 text-sm card-description">
                            Donat lembut dengan berbagai topping menarik. Tekstur fluffy dengan rasa manis yang pas, cocok untuk camilan sehari-hari.
                        </p>
                    </div>
                </div>

                <!-- Menu Item 2: Lontong -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative card-image-container">
                        <img
                            src="{{ asset('images/lontong.jpg') }}"
                            alt="Lontong"
                            class="w-full h-48 object-cover card-image"
                            onerror="this.src='https://via.placeholder.com/400x300/4ECDC4/FFFFFF?text=Lontong'"
                        >
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-navy-800 mb-2 card-title">Lontong</h3>
                        <p class="text-gray-600 text-sm card-description">
                            Lontong tradisional dengan kuah santan gurih dan sayuran segar. Cita rasa Indonesia yang autentik dan mengenyangkan.
                        </p>
                    </div>
                </div>

                <!-- Menu Item 3: Kue Sus -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative card-image-container">
                        <img
                            src="{{ asset('images/kuesus.jpg') }}"
                            alt="Kue Sus"
                            class="w-full h-48 object-cover card-image"
                            onerror="this.src='https://via.placeholder.com/400x300/FFE66D/FFFFFF?text=Kue+Sus'"
                        >
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-navy-800 mb-2 card-title">Kue Sus</h3>
                        <p class="text-gray-600 text-sm card-description">
                            Kue sus dengan kulit renyah dan isi krim lembut. Perpaduan tekstur yang sempurna dengan rasa vanila yang creamy.
                        </p>
                    </div>
                </div>

                <!-- Menu Item 4: Pie Buah -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative card-image-container">
                        <img
                            src="{{ asset('images/piebuah.jpg') }}"
                            alt="Pie Buah"
                            class="w-full h-48 object-cover card-image"
                            onerror="this.src='https://via.placeholder.com/400x300/FF6B9D/FFFFFF?text=Pie+Buah'"
                        >
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-navy-800 mb-2 card-title">Pie Buah</h3>
                        <p class="text-gray-600 text-sm card-description">
                            Pie dengan isian buah segar dan kulit pastry yang crispy. Kombinasi rasa manis asam yang menyegarkan dan bergizi.
                        </p>
                    </div>
                </div>

                <!-- Menu Item 5: Sate Telur Puyuh -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative card-image-container">
                        <img
                            src="{{ asset('images/ndug.webp') }}"
                            alt="Sate Telur Puyuh"
                            class="w-full h-48 object-cover card-image"
                            onerror="this.src='https://via.placeholder.com/400x300/A8E6CF/FFFFFF?text=Sate+Telur+Puyuh'"
                        >
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-navy-800 mb-2 card-title">Sate Telur Puyuh</h3>
                        <p class="text-gray-600 text-sm card-description">
                            Sate telur puyuh dengan bumbu kacang yang khas. Camilan protein tinggi dengan cita rasa pedas manis yang menggugah selera.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Navigation Tools -->
            <div class="text-center mt-16">
                <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md mx-auto border border-gray-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-navy-600 to-navy-700 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-home text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-navy-800 mb-2">Kembali ke Beranda</h3>
                        <p class="text-gray-600 text-sm">
                            Jelajahi lebih banyak fitur dan temukan jajanan favorit Anda di halaman utama
                        </p>
                    </div>
                    <a href="{{ route('home') }}" class="btn-home block w-full text-white text-center py-3 px-6 rounded-lg font-semibold transition-all duration-300">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali ke Home
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Enhanced parallax effect for floating shapes
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallax = scrolled * 0.5;
        
        const shapes = document.querySelectorAll('.shape');
        shapes.forEach((shape, index) => {
            const speed = (index + 1) * 0.1;
            shape.style.transform = `translateY(${parallax * speed}px) rotate(${scrolled * 0.1}deg)`;
        });

        const foodIcons = document.querySelectorAll('.food-icon');
        foodIcons.forEach((icon, index) => {
            const speed = (index + 1) * 0.05;
            icon.style.transform = `translateY(${parallax * speed}px)`;
        });
    });
</script>

@push('styles')
<style>
    /* Import font and use existing styles from home.blade.php */
    @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap');

    body {
        font-family: 'Fredoka', sans-serif;
    }

    /* Color Variables */
    :root {
        --navy-50: #f0f4ff;
        --navy-100: #e0e8ff;
        --navy-200: #c7d4ff;
        --navy-300: #a4b6fc;
        --navy-400: #8190f7;
        --navy-500: #6366f1;
        --navy-600: #4338ca;
        --navy-700: #3730a3;
        --navy-800: #1e1b4b;
        --navy-900: #0f172a;
    }

    .text-navy-300 { color: var(--navy-300); }
    .text-navy-700 { color: var(--navy-700); }
    .text-navy-800 { color: var(--navy-800); }
    .text-navy-900 { color: var(--navy-900); }
    .border-navy-300 { border-color: var(--navy-300); }

    /* Enhanced Navy Gradient Background */
    .gradient-bg {
        background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 50%, var(--navy-700) 100%);
        position: relative;
        overflow: hidden;
    }

    .gradient-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        animation: float 20s ease-in-out infinite;
    }

    /* Floating Shapes Animation */
    .floating-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .shape {
        position: absolute;
        opacity: 0.1;
        border-radius: 50%;
        background: linear-gradient(45deg, rgba(147, 197, 253, 0.3), rgba(59, 130, 246, 0.3));
        animation: floatShapes 20s ease-in-out infinite;
    }

    .shape-1 { width: 100px; height: 100px; top: 10%; left: 10%; animation-delay: 0s; }
    .shape-2 { width: 150px; height: 150px; top: 60%; left: 80%; animation-delay: -5s; }
    .shape-3 { width: 80px; height: 80px; top: 30%; left: 70%; animation-delay: -10s; }
    .shape-4 { width: 120px; height: 120px; top: 70%; left: 20%; animation-delay: -15s; }
    .shape-5 { width: 60px; height: 60px; top: 20%; left: 50%; animation-delay: -20s; }

    @keyframes floatShapes {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-30px) translateX(20px) rotate(90deg); }
        50% { transform: translateY(-60px) translateX(-10px) rotate(180deg); }
        75% { transform: translateY(-30px) translateX(-30px) rotate(270deg); }
    }

    /* Grid Pattern Animation */
    .grid-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            linear-gradient(rgba(147, 197, 253, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(147, 197, 253, 0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 30s linear infinite;
    }

    @keyframes gridMove {
        0% { transform: translate(0, 0); }
        100% { transform: translate(50px, 50px); }
    }

    /* Floating Food Icons */
    .food-icons {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .food-icon {
        position: absolute;
        font-size: 2rem;
        opacity: 0.1;
        animation: floatFood 20s ease-in-out infinite;
    }

    .food-icon-1 { top: 15%; left: 15%; animation-delay: 0s; }
    .food-icon-2 { top: 25%; left: 75%; animation-delay: -5s; }
    .food-icon-3 { top: 65%; left: 85%; animation-delay: -10s; }
    .food-icon-4 { top: 75%; left: 25%; animation-delay: -15s; }
    .food-icon-5 { top: 45%; left: 5%; animation-delay: -8s; }

    @keyframes floatFood {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-40px) rotate(180deg); }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    /* Card Section Background Animation */
    .card-bg-animation {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .bg-circle {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(79, 70, 229, 0.03), transparent);
        animation: expandShrink 15s ease-in-out infinite;
    }

    .bg-circle-1 { width: 300px; height: 300px; top: 10%; left: 80%; animation-delay: 0s; }
    .bg-circle-2 { width: 200px; height: 200px; top: 60%; left: 10%; animation-delay: -5s; }
    .bg-circle-3 { width: 150px; height: 150px; top: 30%; left: 30%; animation-delay: -10s; }

    .bg-line {
        position: absolute;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(79, 70, 229, 0.1), transparent);
        animation: lineStretch 12s ease-in-out infinite;
    }

    .bg-line-1 { top: 25%; left: 0; width: 100%; animation-delay: 0s; }
    .bg-line-2 { top: 75%; left: 0; width: 100%; animation-delay: -6s; }

    @keyframes expandShrink {
        0%, 100% { transform: scale(1); opacity: 0.3; }
        50% { transform: scale(1.2); opacity: 0.1; }
    }

    @keyframes lineStretch {
        0%, 100% { transform: scaleX(0); }
        50% { transform: scaleX(1); }
    }

    /* Hero Animations */
    .hero-title {
        animation: slideInUp 1s ease-out;
    }

    .hero-subtitle {
        animation: slideInUp 1s ease-out 0.2s both;
    }

    .highlight-text {
        position: relative;
        display: inline-block;
    }

    .highlight-text::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, #60a5fa, #3b82f6);
        border-radius: 2px;
        animation: slideInLeft 1s ease-out 0.8s both;
    }

    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideInLeft {
        from { width: 0; }
        to { width: 100%; }
    }

    /* Button Styles */
    .btn-primary {
        background: linear-gradient(135deg, var(--navy-700), var(--navy-600));
        color: white;
        position: relative;
        overflow: hidden;
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .btn-primary:hover::before {
        left: 100%;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--navy-600), var(--navy-500));
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(30, 27, 75, 0.3);
    }

    .btn-home {
        background: linear-gradient(135deg, var(--navy-700), var(--navy-600));
        position: relative;
        overflow: hidden;
    }

    .btn-home::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .btn-home:hover::before {
        left: 100%;
    }

    .btn-home:hover {
        background: linear-gradient(135deg, var(--navy-600), var(--navy-500));
        transform: translateY(-2px);
        box-shadow: 0 15px 35px rgba(30, 27, 75, 0.4);
    }

    /* Card Hover Effects */
    .card-hover {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        transform: translateY(0);
        position: relative;
        overflow: hidden;
    }

    .card-hover::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, transparent, rgba(79, 70, 229, 0.1), transparent);
        z-index: -1;
        border-radius: inherit;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .card-hover:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15);
    }

    .card-hover:hover::before {
        opacity: 1;
    }

    .card-image-container {
        overflow: hidden;
    }

    .card-image {
        transition: transform 0.4s ease;
    }

    .card-hover:hover .card-image {
        transform: scale(1.1);
    }

    .card-title {
        transition: color 0.3s ease;
    }

    .card-hover:hover .card-title {
        color: var(--navy-600);
    }

    .card-description {
        transition: color 0.3s ease;
    }

    /* Section Titles */
    .section-title {
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, var(--navy-600), var(--navy-500));
        border-radius: 2px;
    }

    /* Performance Optimizations */
    .floating-shapes,
    .card-bg-animation {
        will-change: transform;
    }

    .shape,
    .bg-circle {
        will-change: transform, opacity;
    }

    /* Responsive Design */
    @media (max-width: 1280px) {
        .grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 1024px) {
        .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .card-hover:hover {
            transform: translateY(-5px) scale(1.01);
        }
        
        .hero-title {
            font-size: 2.5rem;
        }
        
        .floating-shapes .shape {
            display: none;
        }
        
        .food-icons .food-icon {
            font-size: 1.2rem;
        }
        
        .grid-pattern {
            background-size: 30px 30px;
        }

        .card-image {
            height: 200px;
        }
    }

    @media (max-width: 640px) {
        .py-16 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        
        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .card-image {
            height: 180px;
        }
        
        .text-lg {
            font-size: 1rem;
        }
    }

    /* Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        .floating-shapes,
        .card-bg-animation,
        .grid-pattern,
        .food-icons {
            animation: none;
        }
        
        .shape,
        .bg-circle,
        .food-icon {
            animation: none;
        }
        
        .card-hover:hover {
            transform: translateY(-2px) scale(1.01);
        }
    }

    /* Enhanced accessibility */
    .card-hover:focus,
    .btn-primary:focus,
    .btn-home:focus {
        outline: 2px solid var(--navy-400);
        outline-offset: 2px;
    }

    /* High contrast mode support */
    @media (prefers-contrast: high) {
        .gradient-bg {
            background: var(--navy-900);
        }
        
        .card-hover {
            border: 2px solid var(--navy-300);
        }
    }
</style>
@endpush --}}

@extends('layouts.app')

@section('title', 'Pesan Jajanan - Vourista')

@section('content')
<div class="pt-16">
    <!-- Hero Section with Animated Background -->
    <section class="gradient-bg text-white py-20 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
                <div class="shape shape-5"></div>
                <div class="shape shape-6"></div>
                <div class="shape shape-7"></div>
                <div class="shape shape-8"></div>
            </div>
            
            <!-- Animated Grid Pattern -->
            <div class="grid-pattern"></div>
            
            <!-- Floating Food Icons -->
            <div class="food-icons">
                <div class="food-icon food-icon-1">🍪</div>
                <div class="food-icon food-icon-2">🍰</div>
                <div class="food-icon food-icon-3">🧁</div>
                <div class="food-icon food-icon-4">🍩</div>
                <div class="food-icon food-icon-5">🥯</div>
                <div class="food-icon food-icon-6">🍿</div>
            </div>
            
            <!-- Particle System -->
            <div class="particles">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
                <div class="particle particle-4"></div>
                <div class="particle particle-5"></div>
                <div class="particle particle-6"></div>
                <div class="particle particle-7"></div>
                <div class="particle particle-8"></div>
                <div class="particle particle-9"></div>
                <div class="particle particle-10"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 hero-title">
                    Pesan <span class="text-blue-300 highlight-text">Jajanan</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 hero-subtitle">
                    Pilih jajanan favorit Anda dan tambahkan ke keranjang untuk melakukan pemesanan tanpa ribet!
                </p>
            </div>
        </div>
    </section>

    <!-- Cart Summary with Enhanced Styling -->
    <section class="py-8 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <!-- Subtle Background Animation -->
        <div class="absolute inset-0">
            <div class="stats-bg-waves">
                <div class="wave wave-1"></div>
                <div class="wave wave-2"></div>
                <div class="wave wave-3"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 cart-summary-card" data-aos="fade-up">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-xl font-bold text-navy-800 mb-2">
                            <i class="fas fa-shopping-cart mr-3 text-green-500 icon-float"></i>Keranjang Belanja
                        </h3>
                        <p class="text-gray-600" id="cart-count">0 item dipilih</p>
                    </div>
                    <div class="flex space-x-4">
                        <button onclick="clearCart()" class="btn-danger px-6 py-3 rounded-lg font-semibold transition-all duration-200">
                            <i class="fas fa-trash mr-2"></i>Kosongkan
                        </button>
                        <a href="{{ route('pesanan.create') }}" class="btn-primary px-6 py-3 rounded-lg font-semibold transition-all duration-200" id="checkout-btn">
                            <i class="fas fa-arrow-right mr-2"></i>Lanjut Pesan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid Section -->
    <section class="py-12 bg-gradient-to-b from-white to-slate-50 relative overflow-hidden">
        <!-- Subtle Card Section Animation -->
        <div class="absolute inset-0">
            <div class="card-bg-animation">
                <div class="bg-circle bg-circle-1"></div>
                <div class="bg-circle bg-circle-2"></div>
                <div class="bg-circle bg-circle-3"></div>
                <div class="bg-line bg-line-1"></div>
                <div class="bg-line bg-line-2"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-navy-800 section-title">Jajanan Tersedia</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Temukan berbagai pilihan jajanan lezat untuk dipesan</p>
            </div>

            @if($jajans->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach($jajans as $jajan)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="relative card-image-container">
                                <img src="{{ $jajan->gambar_url }}" alt="{{ $jajan->judul }}" 
                                     class="w-full h-48 object-cover card-image"
                                     onerror="this.src='https://via.placeholder.com/300x200/f59e0b/ffffff?text=Jajan'">
                                
                                <div class="absolute top-4 right-4">
                                    <div class="rating-badge px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-star mr-1 text-yellow-400"></i>
                                        {{ number_format($jajan->average_rating, 1) }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-navy-800 mb-2 card-title">{{ $jajan->judul }}</h3>
                                <p class="text-gray-600 text-sm mb-3 card-description">{{ Str::limit($jajan->deskripsi_singkat, 60) }}</p>
                                <div class="mb-4">
                                    <div class="text-2xl font-bold text-green-600">{{ $jajan->formatted_harga }}</div>
                                </div>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="star-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star star {{ $i <= ($jajan->average_rating / 2) ? 'filled' : '' }}"></i>
                                        @endfor
                                    </div>
                                    <span class="text-sm text-gray-500">stok : ?</span>
                                </div>
                                
                                <!-- Add to Cart Form -->
                                <div class="flex items-center space-x-3">
                                    <input type="number" 
                                           id="qty-{{ $jajan->id }}" 
                                           value="1" 
                                           min="1" 
                                           max="100" 
                                           class="w-16 px-3 py-2 border border-gray-300 rounded-lg text-center focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400 transition-all duration-200">
                                    <button onclick="showTermsModal({{ $jajan->id }})" 
                                            class="flex-1 btn-add-cart text-white px-4 py-2 rounded-lg font-semibold transition-all duration-200">
                                        <i class="fas fa-plus mr-2"></i>Tambah ke Keranjang
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16 empty-state" data-aos="fade-up">
                    <i class="fas fa-cookie-bite text-6xl text-navy-300 mb-6 empty-icon"></i>
                    <h3 class="text-2xl font-bold text-navy-700 mb-4">Belum Ada Jajanan Tersedia</h3>
                    <p class="text-gray-500 text-lg">Maaf, saat ini belum ada jajanan yang tersedia untuk dipesan.</p>
                </div>
            @endif
        </div>
    </section>
</div>

<!-- Terms and Conditions Modal -->
<div id="termsModal" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50 hidden modal-overlay">
    <div class="bg-white rounded-2xl shadow-2xl max-w-2xl mx-4 w-full max-h-screen overflow-y-auto modal-content">
        <div class="p-8">
            <!-- Header -->
            <div class="text-center mb-6">
                <div class="mx-auto w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-clipboard-list text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-navy-800 mb-2">Syarat & Ketentuan Pemesanan</h3>
                <p class="text-gray-600">Mohon baca dan setujui ketentuan berikut sebelum menambahkan ke keranjang</p>
            </div>
            
            <!-- Terms Content -->
            <div class="space-y-4 mb-8">
                <div class="p-4 bg-blue-50 rounded-lg border-l-4 border-blue-400">
                    <h4 class="font-semibold text-navy-800 mb-2 flex items-center">
                        <i class="fas fa-utensils mr-2 text-blue-500"></i>
                        Permintaan Khusus Rasa
                    </h4>
                    <p class="text-sm text-gray-700">Anda dapat meminta variasi rasa tertentu. Namun, ketersediaan tergantung pada stok dan kebijakan penjual.</p>
                </div>
                
                <div class="p-4 bg-green-50 rounded-lg border-l-4 border-green-400">
                    <h4 class="font-semibold text-navy-800 mb-2 flex items-center">
                        <i class="fas fa-clock mr-2 text-green-500"></i>
                        Waktu Pemrosesan
                    </h4>
                    <p class="text-sm text-gray-700">Pesanan akan diproses dalam 1-3 hari kerja. Untuk pesanan khusus atau dalam jumlah besar, waktu pemrosesan bisa lebih lama.</p>
                </div>
                
                <div class="p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-400">
                    <h4 class="font-semibold text-navy-800 mb-2 flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2 text-yellow-500"></i>
                        Ketersediaan Produk
                    </h4>
                    <p class="text-sm text-gray-700">Stok produk dapat berubah sewaktu-waktu. Jika produk tidak tersedia, kami akan menghubungi Anda untuk konfirmasi.</p>
                </div>
                
                <div class="p-4 bg-purple-50 rounded-lg border-l-4 border-purple-400">
                    <h4 class="font-semibold text-navy-800 mb-2 flex items-center">
                        <i class="fas fa-shield-alt mr-2 text-purple-500"></i>
                        Kualitas & Kemasan
                    </h4>
                    <p class="text-sm text-gray-700">Kami menjamin kualitas produk dan kemasan yang aman. Jika ada masalah dengan produk, segera hubungi customer service.</p>
                </div>
                
                <div class="p-4 bg-red-50 rounded-lg border-l-4 border-red-400">
                    <h4 class="font-semibold text-navy-800 mb-2 flex items-center">
                        <i class="fas fa-ban mr-2 text-red-500"></i>
                        Pembatalan Pesanan
                    </h4>
                    <p class="text-sm text-gray-700">Pembatalan hanya dapat dilakukan maksimal 1 jam setelah pemesanan. Setelah itu, pesanan tidak dapat dibatalkan.</p>
                </div>
            </div>
            
            <!-- Checkbox Agreement -->
            <div class="mb-6">
                <label class="flex items-start space-x-3 cursor-pointer">
                    <input type="checkbox" id="agreeTerms" class="mt-1 w-5 h-5 text-blue-600 border-2 border-gray-300 rounded focus:ring-2 focus:ring-blue-400">
                    <span class="text-sm text-gray-700 leading-relaxed">
                        Saya telah membaca dan menyetujui semua syarat dan ketentuan di atas. Saya memahami bahwa dengan mencentang kotak ini, saya setuju untuk mematuhi kebijakan yang telah ditetapkan.
                    </span>
                </label>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex space-x-4">
                <button onclick="closeTermsModal()" class="flex-1 px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-all duration-200">
                    <i class="fas fa-times mr-2"></i>Batal
                </button>
                <button onclick="confirmAddToCart()" id="confirmBtn" disabled class="flex-1 btn-primary px-6 py-3 rounded-lg font-semibold transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                    <i class="fas fa-check mr-2"></i>Setuju & Tambahkan
                </button>
            </div>
        </div>
    </div>
</div>

<script>
let cart = JSON.parse(sessionStorage.getItem('cart')) || {};
let currentJajanId = null;

// Update cart display on page load
updateCartDisplay();

// Terms modal functions
function showTermsModal(jajanId) {
    currentJajanId = jajanId;
    document.getElementById('termsModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    
    // Reset checkbox and button state
    document.getElementById('agreeTerms').checked = false;
    document.getElementById('confirmBtn').disabled = true;
    
    // Add animation classes
    setTimeout(() => {
        document.querySelector('.modal-overlay').classList.add('modal-show');
        document.querySelector('.modal-content').classList.add('modal-content-show');
    }, 10);
}

function closeTermsModal() {
    document.querySelector('.modal-overlay').classList.remove('modal-show');
    document.querySelector('.modal-content').classList.remove('modal-content-show');
    
    setTimeout(() => {
        document.getElementById('termsModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
        currentJajanId = null;
    }, 300);
}

function confirmAddToCart() {
    if (currentJajanId && document.getElementById('agreeTerms').checked) {
        addToCart(currentJajanId);
        closeTermsModal();
    }
}

// Enable/disable confirm button based on checkbox
document.getElementById('agreeTerms').addEventListener('change', function() {
    document.getElementById('confirmBtn').disabled = !this.checked;
});

// Close modal when clicking outside
document.getElementById('termsModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeTermsModal();
    }
});

function addToCart(jajanId) {
    const qty = parseInt(document.getElementById(`qty-${jajanId}`).value);
    
    // Show loading state
    const button = document.querySelector(`button[onclick="showTermsModal(${jajanId})"]`);
    const originalContent = button.innerHTML;
    button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Menambahkan...';
    button.disabled = true;
    
    fetch('{{ route('pesanan.add-to-cart') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            jajan_id: jajanId,
            jumlah: qty
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateCartDisplay();
            showToast(data.message || 'Berhasil ditambahkan ke keranjang!', 'success');
            
            // Reset quantity to 1
            document.getElementById(`qty-${jajanId}`).value = 1;
        } else {
            showToast(data.message || 'Gagal menambahkan ke keranjang', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('Terjadi kesalahan saat menambahkan ke keranjang', 'error');
    })
    .finally(() => {
        // Restore button state
        button.innerHTML = originalContent;
        button.disabled = false;
    });
}

function updateCartDisplay() {
    fetch('{{ route('pesanan.create') }}')
        .then(response => response.text())
        .then(html => {
            // Update cart count
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const cartItems = doc.querySelectorAll('.cart-item');
            const count = cartItems.length;
            
            document.getElementById('cart-count').textContent = count + ' item dipilih';
            
            // Update checkout button state
            const checkoutBtn = document.getElementById('checkout-btn');
            if (count === 0) {
                checkoutBtn.classList.add('opacity-50', 'cursor-not-allowed');
                checkoutBtn.style.pointerEvents = 'none';
            } else {
                checkoutBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                checkoutBtn.style.pointerEvents = 'auto';
            }
        })
        .catch(error => {
            console.error('Error updating cart display:', error);
        });
}

function clearCart() {
    if (confirm('Apakah Anda yakin ingin mengosongkan keranjang? Semua item yang telah dipilih akan dihapus.')) {
        sessionStorage.removeItem('cart');
        updateCartDisplay();
        showToast('Keranjang berhasil dikosongkan', 'info');
    }
}

function showToast(message, type) {
    const existingToast = document.querySelector('.toast');
    if (existingToast) {
        existingToast.remove();
    }
    
    const toast = document.createElement('div');
    toast.className = `toast fixed top-20 right-4 px-6 py-4 rounded-lg text-white z-50 shadow-lg transform transition-all duration-300 ${getToastColor(type)}`;
    
    const icon = getToastIcon(type);
    toast.innerHTML = `
        <div class="flex items-center">
            <i class="${icon} mr-3"></i>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.style.transform = 'translateX(0)';
        toast.style.opacity = '1';
    }, 100);
    
    // Animate out and remove
    setTimeout(() => {
        toast.style.transform = 'translateX(100%)';
        toast.style.opacity = '0';
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3000);
}

function getToastColor(type) {
    switch(type) {
        case 'success': return 'bg-green-500';
        case 'error': return 'bg-red-500';
        case 'info': return 'bg-blue-500';
        case 'warning': return 'bg-yellow-500';
        default: return 'bg-gray-500';
    }
}

function getToastIcon(type) {
    switch(type) {
        case 'success': return 'fas fa-check-circle';
        case 'error': return 'fas fa-exclamation-circle';
        case 'info': return 'fas fa-info-circle';
        case 'warning': return 'fas fa-exclamation-triangle';
        default: return 'fas fa-bell';
    }
}

// Initialize AOS if available
if (typeof AOS !== 'undefined') {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
}

// Enhanced parallax effect for floating shapes
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallax = scrolled * 0.5;
    
    const shapes = document.querySelectorAll('.shape');
    shapes.forEach((shape, index) => {
        const speed = (index + 1) * 0.1;
        shape.style.transform = `translateY(${parallax * speed}px) rotate(${scrolled * 0.1}deg)`;
    });

    const particles = document.querySelectorAll('.particle');
    particles.forEach((particle, index) => {
        const speed = (index + 1) * 0.05;
        particle.style.transform = `translateY(${parallax * speed}px)`;
    });
});
</script>

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap');

    body {
        font-family: 'Fredoka', sans-serif;
    }

    /* Color Variables */
    :root {
        --navy-50: #f0f4ff;
        --navy-100: #e0e8ff;
        --navy-200: #c7d4ff;
        --navy-300: #a4b6fc;
        --navy-400: #8190f7;
        --navy-500: #6366f1;
        --navy-600: #4338ca;
        --navy-700: #3730a3;
        --navy-800: #1e1b4b;
        --navy-900: #0f172a;
    }

    .text-navy-300 { color: var(--navy-300); }
    .text-navy-700 { color: var(--navy-700); }
    .text-navy-800 { color: var(--navy-800); }
    .text-navy-900 { color: var(--navy-900); }
    .border-navy-300 { border-color: var(--navy-300); }
    .bg-navy-600 { background-color: var(--navy-600); }

    /* Enhanced Navy Gradient Background with Animations */
    .gradient-bg {
        background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 50%, var(--navy-700) 100%);
        position: relative;
        overflow: hidden;
    }

    .gradient-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        animation: float 20s ease-in-out infinite;
    }

    /* Floating Shapes Animation */
    .floating-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .shape {
        position: absolute;
        opacity: 0.1;
        border-radius: 50%;
        background: linear-gradient(45deg, rgba(147, 197, 253, 0.3), rgba(59, 130, 246, 0.3));
        animation: floatShapes 20s ease-in-out infinite;
        backdrop-filter: blur(1px);
    }

    .shape-1 {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 10%;
        animation-delay: 0s;
        animation-duration: 25s;
    }

    .shape-2 {
        width: 150px;
        height: 150px;
        top: 60%;
        left: 80%;
        animation-delay: -5s;
        animation-duration: 30s;
    }

    .shape-3 {
        width: 80px;
        height: 80px;
        top: 30%;
        left: 70%;
        animation-delay: -10s;
        animation-duration: 22s;
    }

    .shape-4 {
        width: 120px;
        height: 120px;
        top: 70%;
        left: 20%;
        animation-delay: -15s;
        animation-duration: 28s;
    }

    .shape-5 {
        width: 60px;
        height: 60px;
        top: 20%;
        left: 50%;
        animation-delay: -20s;
        animation-duration: 20s;
    }

    .shape-6 {
        width: 200px;
        height: 200px;
        top: 50%;
        left: 5%;
        animation-delay: -8s;
        animation-duration: 35s;
    }

    .shape-7 {
        width: 90px;
        height: 90px;
        top: 15%;
        left: 85%;
        animation-delay: -12s;
        animation-duration: 24s;
    }

    .shape-8 {
        width: 110px;
        height: 110px;
        top: 80%;
        left: 60%;
        animation-delay: -18s;
        animation-duration: 26s;
    }

    @keyframes floatShapes {
        0%, 100% {
            transform: translateY(0px) translateX(0px) rotate(0deg);
        }
        25% {
            transform: translateY(-30px) translateX(20px) rotate(90deg);
        }
        50% {
            transform: translateY(-60px) translateX(-10px) rotate(180deg);
        }
        75% {
            transform: translateY(-30px) translateX(-30px) rotate(270deg);
        }
    }

    /* Grid Pattern Animation */
    .grid-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            linear-gradient(rgba(147, 197, 253, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(147, 197, 253, 0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 30s linear infinite;
    }

    @keyframes gridMove {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(50px, 50px);
        }
    }

    /* Floating Food Icons */
    .food-icons {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .food-icon {
        position: absolute;
        font-size: 2rem;
        opacity: 0.1;
        animation: floatFood 20s ease-in-out infinite;
    }

    .food-icon-1 {
        top: 15%;
        left: 15%;
        animation-delay: 0s;
        animation-duration: 25s;
    }

    .food-icon-2 {
        top: 80%;
        left: 85%;
        animation-delay: -5s;
        animation-duration: 22s;
    }

    .food-icon-3 {
        top: 40%;
        left: 90%;
        animation-delay: -10s;
        animation-duration: 28s;
    }

    .food-icon-4 {
        top: 70%;
        left: 10%;
        animation-delay: -15s;
        animation-duration: 24s;
    }

    .food-icon-5 {
        top: 30%;
        left: 5%;
        animation-delay: -8s;
        animation-duration: 26s;
    }

    .food-icon-6 {
        top: 60%;
        left: 50%;
        animation-delay: -12s;
        animation-duration: 20s;
    }

    @keyframes floatFood {
        0%, 100% {
            transform: translateY(0px) translateX(0px) rotate(0deg);
            opacity: 0.1;
        }
        25% {
            transform: translateY(-40px) translateX(15px) rotate(5deg);
            opacity: 0.15;
        }
        50% {
            transform: translateY(-20px) translateX(-25px) rotate(-5deg);
            opacity: 0.1;
        }
        75% {
            transform: translateY(-60px) translateX(10px) rotate(3deg);
            opacity: 0.12;
        }
    }

    /* Particle System */
    .particles {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: rgba(147, 197, 253, 0.4);
        border-radius: 50%;
        animation: floatParticles 15s linear infinite;
    }

    .particle-1 { top: 10%; left: 20%; animation-delay: 0s; }
    .particle-2 { top: 30%; left: 80%; animation-delay: -2s; }
    .particle-3 { top: 50%; left: 15%; animation-delay: -4s; }
    .particle-4 { top: 70%; left: 90%; animation-delay: -6s; }
    .particle-5 { top: 25%; left: 60%; animation-delay: -8s; }
    .particle-6 { top: 85%; left: 30%; animation-delay: -10s; }
    .particle-7 { top: 15%; left: 75%; animation-delay: -12s; }
    .particle-8 { top: 45%; left: 5%; animation-delay: -14s; }
    .particle-9 { top: 65%; left: 70%; animation-delay: -3s; }
    .particle-10 { top: 35%; left: 40%; animation-delay: -7s; }

    @keyframes floatParticles {
        0% {
            transform: translateY(100vh) translateX(0px);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateY(-100px) translateX(50px);
            opacity: 0;
        }
    }

    /* Hero Title Animations */
    .hero-title {
        animation: titleBounce 2s ease-out;
    }

    .hero-subtitle {
        animation: subtitleFade 2s ease-out 0.5s both;
    }

    .highlight-text {
        position: relative;
        background: linear-gradient(45deg, #93c5fd, #3b82f6);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: highlightGlow 3s ease-in-out infinite alternate;
    }

    @keyframes titleBounce {
        0% {
            transform: translateY(-50px);
            opacity: 0;
        }
        60% {
            transform: translateY(10px);
            opacity: 0.8;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes subtitleFade {
        0% {
            transform: translateY(30px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes highlightGlow {
        0% {
            text-shadow: 0 0 20px rgba(147, 197, 253, 0.5);
        }
        100% {
            text-shadow: 0 0 30px rgba(59, 130, 246, 0.8);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    /* Stats Section Background Waves */
    .stats-bg-waves {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .wave {
        position: absolute;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, rgba(59, 130, 246, 0.05), rgba(147, 197, 253, 0.05));
        border-radius: 45%;
        animation: waveRotate 20s linear infinite;
    }

    .wave-1 {
        top: -150%;
        left: -50%;
        animation-delay: 0s;
    }

    .wave-2 {
        top: -180%;
        left: -50%;
        animation-delay: -10s;
        animation-duration: 25s;
    }

    .wave-3 {
        top: -120%;
        left: -50%;
        animation-delay: -15s;
        animation-duration: 30s;
    }

    @keyframes waveRotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    /* Cart Summary Card */
    .cart-summary-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(249, 250, 251, 0.95));
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .cart-summary-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .icon-float {
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    /* Card Section Background Animation */
    .card-bg-animation {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .bg-circle {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, transparent 70%);
        animation: circleFloat 25s ease-in-out infinite;
    }

    .bg-circle-1 {
        width: 300px;
        height: 300px;
        top: 10%;
        left: 80%;
        animation-delay: 0s;
    }

    .bg-circle-2 {
        width: 200px;
        height: 200px;
        top: 60%;
        left: 10%;
        animation-delay: -8s;
    }

    .bg-circle-3 {
        width: 150px;
        height: 150px;
        top: 30%;
        left: 50%;
        animation-delay: -15s;
    }

    .bg-line {
        position: absolute;
        width: 2px;
        height: 100px;
        background: linear-gradient(to bottom, transparent, rgba(59, 130, 246, 0.1), transparent);
        animation: lineMove 15s ease-in-out infinite;
    }

    .bg-line-1 {
        top: 20%;
        left: 30%;
        animation-delay: 0s;
    }

    .bg-line-2 {
        top: 70%;
        left: 70%;
        animation-delay: -7s;
    }

    @keyframes circleFloat {
        0%, 100% {
            transform: translateY(0px) translateX(0px);
        }
        25% {
            transform: translateY(-30px) translateX(20px);
        }
        50% {
            transform: translateY(-60px) translateX(-10px);
        }
        75% {
            transform: translateY(-30px) translateX(-30px);
        }
    }

    @keyframes lineMove {
        0%, 100% {
            transform: translateY(0px) scaleY(1);
            opacity: 0.1;
        }
        50% {
            transform: translateY(-20px) scaleY(1.5);
            opacity: 0.3;
        }
    }

    /* Section Title Animation */
    .section-title {
        position: relative;
        animation: titleSlide 1s ease-out;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, var(--navy-600), #3b82f6);
        border-radius: 2px;
        animation: lineExpand 1.5s ease-out 0.5s both;
    }

    @keyframes titleSlide {
        0% {
            transform: translateX(-50px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes lineExpand {
        0% {
            width: 0;
        }
        100% {
            width: 60px;
        }
    }

    /* Product Card Enhancements */
    .card-hover {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateY(0);
    }

    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 
            0 25px 50px rgba(0, 0, 0, 0.15),
            0 0 0 1px rgba(59, 130, 246, 0.1);
    }

    .card-image-container {
        position: relative;
        overflow: hidden;
        background: linear-gradient(45deg, #f3f4f6, #e5e7eb);
    }

    .card-image {
        transition: all 0.4s ease;
        filter: brightness(1);
    }

    .card-hover:hover .card-image {
        transform: scale(1.05);
        filter: brightness(1.1);
    }

    .card-image-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(147, 197, 253, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .card-hover:hover .card-image-container::after {
        opacity: 1;
    }

    .rating-badge {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: var(--navy-800);
        transition: all 0.3s ease;
    }

    .card-hover:hover .rating-badge {
        transform: scale(1.05);
        background: rgba(255, 255, 255, 1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        transition: color 0.3s ease;
    }

    .card-hover:hover .card-title {
        color: var(--navy-600);
    }

    .card-description {
        transition: color 0.3s ease;
    }

    .card-hover:hover .card-description {
        color: var(--navy-700);
    }

    /* Star Rating */
    .star-rating {
        display: flex;
        align-items: center;
    }

    .star {
        color: #d1d5db;
        font-size: 0.875rem;
        transition: all 0.2s ease;
    }

    .star.filled {
        color: #fbbf24;
        text-shadow: 0 0 8px rgba(251, 191, 36, 0.4);
    }

    .card-hover:hover .star.filled {
        transform: scale(1.1);
        color: #f59e0b;
    }

    /* Button Styles */
    .btn-primary {
        background: linear-gradient(135deg, #059669 0%, #10b981 100%);
        border: none;
        box-shadow: 0 4px 15px rgba(5, 150, 105, 0.3);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(5, 150, 105, 0.4);
        background: linear-gradient(135deg, #047857 0%, #059669 100%);
    }

    .btn-primary:hover::before {
        left: 100%;
    }

    .btn-add-cart {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        border: none;
        box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .btn-add-cart::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .btn-add-cart:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
    }

    .btn-add-cart:hover::before {
        left: 100%;
    }

    .btn-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        color: white;
        box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .btn-danger::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    }

    .btn-danger:hover::before {
        left: 100%;
    }

    /* Empty State */
    .empty-state {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.8), rgba(249, 250, 251, 0.9));
        border-radius: 1rem;
        border: 1px solid rgba(229, 231, 235, 0.5);
        backdrop-filter: blur(10px);
    }

    .empty-icon {
        animation: emptyIconBounce 2s ease-in-out infinite;
    }

    @keyframes emptyIconBounce {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        25% {
            transform: translateY(-10px) rotate(-5deg);
        }
        75% {
            transform: translateY(-5px) rotate(5deg);
        }
    }

    /* Modal Enhancements */
    .modal-overlay {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .modal-overlay.modal-show {
        opacity: 1;
    }

    .modal-content {
        transform: translateY(20px) scale(0.95);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
    }

    .modal-content.modal-content-show {
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    /* Toast Animations */
    .toast {
        transform: translateX(100%);
        opacity: 0;
    }

    /* Responsive Design Enhancements */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.125rem;
        }
        
        .shape {
            display: none;
        }
        
        .food-icon {
            font-size: 1.5rem;
        }
        
        .card-hover {
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 640px) {
        .cart-summary-card {
            padding: 1rem;
        }
        
        .modal-content {
            margin: 1rem;
        }
        
        .btn-primary,
        .btn-danger {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
        }
    }

    /* Loading States */
    .loading {
        opacity: 0.7;
        pointer-events: none;
    }

    .spinner {
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    /* Focus States for Accessibility */
    .btn-primary:focus,
    .btn-add-cart:focus,
    .btn-danger:focus {
        outline: 2px solid rgba(59, 130, 246, 0.5);
        outline-offset: 2px;
    }

    input:focus {
        outline: 2px solid rgba(59, 130, 246, 0.5);
        outline-offset: 1px;
    }

    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }
</style>
@endpush
@endsection

