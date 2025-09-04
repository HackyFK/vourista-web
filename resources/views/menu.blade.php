@extends('layouts.app')

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
@endpush