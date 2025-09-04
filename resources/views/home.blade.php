@extends('layouts.app')

@section('title', 'Vourista - Platform Rating Jajanan Terbaik')

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
                    #CeritaManisDi<span class="text-blue-300 highlight-text">Lidah</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 hero-subtitle">
                    Belanja jajanan dan camilan favorit kini lebih gampang dengan Vourista! <br>
                    Beragam pilihan makanan ringan tersedia untuk temani setiap momenmu.
                </p>

                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto">
                    <form method="GET" action="{{ route('home') }}" class="flex">
                        <input
                            type="text"
                            name="cari"
                            value="{{ request('cari') }}"
                            placeholder="Cari jajanan favoritmu..."
                            class="flex-1 px-6 py-4 text-navy-900 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-400 search-animation bg-white/90 backdrop-blur-sm"
                        >
                        <button
                            type="submit"
                            class="btn-primary px-8 py-4 rounded-r-lg font-semibold transition-all duration-300"
                        >
                            <i class="fas fa-search mr-2"></i>Cari Jajanan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section with Animated Background -->
    <section class="py-16 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <!-- Subtle Background Animation -->
        <div class="absolute inset-0">
            <div class="stats-bg-waves">
                <div class="wave wave-1"></div>
                <div class="wave wave-2"></div>
                <div class="wave wave-3"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="stats-card text-white p-8 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-cookie-bite text-4xl mb-4 text-blue-300 icon-float"></i>
                    <div class="text-3xl font-bold counter-animation" data-target="{{ $totalJajans }}">0</div>
                    <p class="text-lg text-blue-100">Total Jajanan</p>
                </div>
                <div class="stats-card text-white p-8 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-star text-4xl mb-4 text-blue-300 icon-float"></i>
                    <div class="text-3xl font-bold counter-animation" data-target="{{ $totalRatings }}">0</div>
                    <p class="text-lg text-blue-100">Total Rating</p>
                </div>
                <div class="stats-card text-white p-8 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-trophy text-4xl mb-4 text-blue-300 icon-float"></i>
                    <div class="text-3xl font-bold counter-animation" data-target="{{ number_format($ratingTertinggi, 1) * 10 }}">0</div>
                    <p class="text-lg text-blue-100">Rating Tertinggi (/10)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <h2 class="text-2xl font-bold text-navy-800 mb-4 md:mb-0 section-title">Jajanan Populer</h2>

                <div class="flex space-x-4">
                    <select
                        name="filter"
                        onchange="applyFilter(this.value)"
                        class="px-4 py-2 border border-navy-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 filter-select bg-white text-navy-800"
                    >
                        <option value="">Urutkan Berdasarkan</option>
                        <option value="rating_tertinggi" {{ request('filter') == 'rating_tertinggi' ? 'selected' : '' }}>Rating Tertinggi</option>
                        <option value="terbaru" {{ request('filter') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Jajan Cards Section with Animated Background -->
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
            @if($jajans->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach($jajans as $jajan)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="relative card-image-container">
                                <img
                                    src="{{ $jajan->gambar_url }}"
                                    alt="{{ $jajan->judul }}"
                                    class="w-full h-48 object-cover card-image"
                                    onerror="this.src='https:/placehold.co/300x200?text=No+Image'"
                                >
                                <div class="absolute top-4 right-4">
                                    <div class="rating-badge px-2 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-star mr-1 text-yellow-400"></i>
                                        {{ number_format($jajan->average_rating, 1) }}
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-bold text-navy-800 mb-2 card-title">{{ $jajan->judul }}</h3>
                                <p class="text-gray-600 mb-4 text-sm card-description">{{ Str::limit($jajan->deskripsi_singkat, 80) }}</p>

                                <!-- Star Rating Display -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="star-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star star {{ $i <= ($jajan->average_rating / 2) ? 'filled' : '' }}"></i>
                                        @endfor
                                    </div>
                                    <span class="text-sm text-gray-500">{{ $jajan->total_ratings }} ulasan</span>
                                </div>

                                <a
                                    href="{{ route('jajan.show', $jajan) }}"
                                    class="btn-detail block w-full text-white text-center py-3 rounded-lg font-semibold transition-all duration-200"
                                >
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    {{ $jajans->appends(request()->query())->links() }}
                </div>
            @else
                <div class="text-center py-16 empty-state" data-aos="fade-up">
                    <i class="fas fa-search text-6xl text-navy-300 mb-4 empty-icon"></i>
                    <h3 class="text-2xl font-bold text-navy-700 mb-2">Jajanan Tidak Ditemukan</h3>
                    <p class="text-gray-500">Coba kata kunci lain atau hapus filter untuk melihat semua jajanan.</p>
                    <a href="{{ route('home') }}" class="inline-block mt-4 btn-back px-6 py-3 rounded-lg font-semibold transition-colors duration-200">
                        Lihat Semua Jajanan
                    </a>
                </div>
            @endif
        </div>
    </section>
</div>

<script>
    function applyFilter(value) {
        const url = new URL(window.location);
        if (value) {
            url.searchParams.set('filter', value);
        } else {
            url.searchParams.delete('filter');
        }
        window.location.href = url.toString();
    }

    // Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll('.counter-animation');
        
        counters.forEach(counter => {
            const target = parseInt(counter.dataset.target);
            const increment = target / 100;
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.innerText = target;
                    clearInterval(timer);
                } else {
                    counter.innerText = Math.floor(current);
                }
            }, 20);
        });
    }

    // Initialize animations when page loads
    window.addEventListener('load', () => {
        setTimeout(animateCounters, 500);
    });

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
        top: 25%;
        left: 75%;
        animation-delay: -5s;
        animation-duration: 30s;
    }

    .food-icon-3 {
        top: 65%;
        left: 85%;
        animation-delay: -10s;
        animation-duration: 22s;
    }

    .food-icon-4 {
        top: 75%;
        left: 25%;
        animation-delay: -15s;
        animation-duration: 28s;
    }

    .food-icon-5 {
        top: 45%;
        left: 5%;
        animation-delay: -8s;
        animation-duration: 24s;
    }

    .food-icon-6 {
        top: 35%;
        left: 90%;
        animation-delay: -12s;
        animation-duration: 26s;
    }

    @keyframes floatFood {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-40px) rotate(180deg);
        }
    }

    /* Particle System */
    .particles {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: radial-gradient(circle, rgba(147, 197, 253, 0.8), rgba(147, 197, 253, 0.2));
        border-radius: 50%;
        animation: particleFloat 15s ease-in-out infinite;
    }

    .particle-1 { top: 20%; left: 10%; animation-delay: 0s; }
    .particle-2 { top: 40%; left: 20%; animation-delay: -2s; }
    .particle-3 { top: 60%; left: 30%; animation-delay: -4s; }
    .particle-4 { top: 80%; left: 40%; animation-delay: -6s; }
    .particle-5 { top: 30%; left: 60%; animation-delay: -8s; }
    .particle-6 { top: 50%; left: 70%; animation-delay: -10s; }
    .particle-7 { top: 70%; left: 80%; animation-delay: -12s; }
    .particle-8 { top: 90%; left: 90%; animation-delay: -14s; }
    .particle-9 { top: 15%; left: 85%; animation-delay: -3s; }
    .particle-10 { top: 85%; left: 15%; animation-delay: -7s; }

    @keyframes particleFloat {
        0%, 100% {
            transform: translateY(0px) translateX(0px);
            opacity: 0.8;
        }
        50% {
            transform: translateY(-100px) translateX(50px);
            opacity: 0.3;
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
        height: 100px;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(79, 70, 229, 0.05), 
            transparent, 
            rgba(147, 197, 253, 0.05), 
            transparent);
        animation: waveMove 20s ease-in-out infinite;
    }

    .wave-1 {
        top: 20%;
        animation-delay: 0s;
    }

    .wave-2 {
        top: 50%;
        animation-delay: -7s;
        animation-duration: 25s;
    }

    .wave-3 {
        top: 80%;
        animation-delay: -14s;
        animation-duration: 30s;
    }

    @keyframes waveMove {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(0%);
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
        background: radial-gradient(circle, rgba(79, 70, 229, 0.03), transparent);
        animation: expandShrink 15s ease-in-out infinite;
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
        animation-delay: -5s;
    }

    .bg-circle-3 {
        width: 150px;
        height: 150px;
        top: 30%;
        left: 30%;
        animation-delay: -10s;
    }

    .bg-line {
        position: absolute;
        height: 2px;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(79, 70, 229, 0.1), 
            transparent);
        animation: lineStretch 12s ease-in-out infinite;
    }

    .bg-line-1 {
        top: 25%;
        left: 0;
        width: 100%;
        animation-delay: 0s;
    }

    .bg-line-2 {
        top: 75%;
        left: 0;
        width: 100%;
        animation-delay: -6s;
    }

    @keyframes expandShrink {
        0%, 100% {
            transform: scale(1);
            opacity: 0.3;
        }
        50% {
            transform: scale(1.2);
            opacity: 0.1;
        }
    }

    @keyframes lineStretch {
        0%, 100% {
            transform: scaleX(0);
        }
        50% {
            transform: scaleX(1);
        }
    }

    /* Existing Animations (kept unchanged) */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
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
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            width: 0;
        }
        to {
            width: 100%;
        }
    }

    /* Search Animation */
    .search-animation {
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        transform: translateY(0);
    }

    .search-animation:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79, 70, 229, 0.2);
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

    .btn-detail {
        background: linear-gradient(135deg, var(--navy-700), var(--navy-600));
        position: relative;
        overflow: hidden;
    }

    .btn-detail::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .btn-detail:hover::before {
        left: 100%;
    }

    .btn-detail:hover {
        background: linear-gradient(135deg, var(--navy-600), var(--navy-500));
        transform: translateY(-2px);
    }

    .btn-back {
        background: linear-gradient(135deg, var(--navy-700), var(--navy-600));
        color: white;
    }

    .btn-back:hover {
        background: linear-gradient(135deg, var(--navy-600), var(--navy-500));
        transform: translateY(-2px);
    }

    /* Stats Cards */
    .stats-card {
        background: linear-gradient(135deg, var(--navy-800) 0%, var(--navy-700) 100%);
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        overflow: hidden;
    }

    .stats-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, transparent, rgba(147, 197, 253, 0.3), transparent);
        z-index: -1;
        border-radius: inherit;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .stats-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 25px 50px rgba(15, 23, 42, 0.3);
    }

    .stats-card:hover::before {
        opacity: 1;
    }

    /* Icon Animations */
    .icon-float {
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
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

    /* Rating Badge */
    .rating-badge {
        background: linear-gradient(135deg, var(--navy-600), var(--navy-700));
        color: white;
        backdrop-filter: blur(10px);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.9; transform: scale(1.05); }
    }

    /* Star Rating */
    .star-rating {
        display: flex;
        gap: 2px;
    }

    .star {
        color: #e5e7eb;
        transition: all 0.2s ease;
        font-size: 14px;
    }

    .star.filled {
        color: #fbbf24;
        animation: starGlow 1s ease-in-out;
    }

    @keyframes starGlow {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); color: #f59e0b; }
        100% { transform: scale(1); }
    }

    /* Counter Animation */
    .counter-animation {
        opacity: 0;
        transform: translateY(20px);
        animation: countUp 2s ease-out forwards;
    }

    @keyframes countUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
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

    /* Filter Select */
    .filter-select {
        transition: all 0.3s ease;
    }

    .filter-select:focus {
        transform: translateY(-1px);
        box-shadow: 0 5px 15px rgba(79, 70, 229, 0.2);
    }

    /* Empty State */
    .empty-state {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease-out forwards;
    }

    .empty-icon {
        animation: bounce 2s infinite;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Pagination Styles */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
    }

    .pagination .page-link {
        padding: 0.5rem 1rem;
        margin: 0 0.25rem;
        text-decoration: none;
        color: var(--navy-700);
        background-color: #ffffff;
        border: 2px solid #e2e8f0;
        border-radius: 0.5rem;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        font-weight: 500;
    }

    .pagination .page-link:hover {
        background: linear-gradient(135deg, var(--navy-700), var(--navy-600));
        color: white;
        border-color: var(--navy-700);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(30, 27, 75, 0.2);
    }

    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, var(--navy-700), var(--navy-600));
        color: white;
        border-color: var(--navy-700);
        box-shadow: 0 5px 15px rgba(30, 27, 75, 0.3);
    }

    /* Performance Optimizations */
    .floating-shapes,
    .particles,
    .stats-bg-waves,
    .card-bg-animation {
        will-change: transform;
    }

    .shape,
    .particle,
    .wave,
    .bg-circle {
        will-change: transform, opacity;
    }

    /* Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        .floating-shapes,
        .particles,
        .stats-bg-waves,
        .card-bg-animation,
        .grid-pattern,
        .food-icons {
            animation: none;
        }
        
        .shape,
        .particle,
        .wave,
        .bg-circle,
        .food-icon {
            animation: none;
        }
        
        .card-hover:hover {
            transform: translateY(-2px) scale(1.01);
        }
        
        .stats-card:hover {
            transform: translateY(-2px) scale(1.01);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .card-hover:hover {
            transform: translateY(-5px) scale(1.01);
        }
        
        .hero-title {
            font-size: 2.5rem;
        }
        
        .stats-card:hover {
            transform: translateY(-3px) scale(1.01);
        }
        
        .floating-shapes .shape {
            display: none;
        }
        
        .particles .particle {
            display: none;
        }
        
        .food-icons .food-icon {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 640px) {
        .pagination .page-link {
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
        }
        
        .hero-title {
            font-size: 2rem;
        }
        
        .food-icons .food-icon {
            font-size: 1.2rem;
        }
        
        .grid-pattern {
            background-size: 30px 30px;
        }
    }

    /* Dark mode support (if needed in future) */
    @media (prefers-color-scheme: dark) {
        .bg-white {
            background-color: #1f2937;
        }
        
        .text-gray-600 {
            color: #9ca3af;
        }
        
        .border-gray-100 {
            border-color: #374151;
        }
    }

    /* Loading state for better UX */
    .loading-shimmer {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
    }

    @keyframes shimmer {
        0% {
            background-position: -200% 0;
        }
        100% {
            background-position: 200% 0;
        }
    }

    /* Enhanced accessibility */
    .card-hover:focus,
    .btn-primary:focus,
    .btn-detail:focus,
    .search-animation:focus {
        outline: 2px solid var(--navy-400);
        outline-offset: 2px;
    }

    /* High contrast mode support */
    @media (prefers-contrast: high) {
        .gradient-bg {
            background: var(--navy-900);
        }
        
        .stats-card {
            background: var(--navy-800);
            border: 2px solid white;
        }
        
        .card-hover {
            border: 2px solid var(--navy-300);
        }
    }
</style>
@endpush
@endsection