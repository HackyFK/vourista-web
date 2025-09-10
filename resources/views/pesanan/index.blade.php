@extends('layouts.app')

@section('title', 'Pesan Jajanan - Vourista')

@section('content')
<div class="pt-16">
    <!-- Hero Section with Animated Background -->
    <section class="gradient-bg text-white py-16 relative overflow-hidden">
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
                <h1 class="text-4xl md:text-5xl font-bold mb-6 hero-title">
                    Pesan <span class="text-blue-300 highlight-text">Jajanan</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 hero-subtitle">
                    Pilih jajanan favorit Anda dan tambahkan ke keranjang untuk melakukan pemesanan tanpa ribet!
                </p>
            </div>
        </div>
    </section>

    <div class="min-h-screen bg-gradient-to-b from-slate-50 to-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Cart Summary -->
            <div class="mb-8">
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover border border-gray-100" data-aos="fade-up">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-navy-800">
                                <i class="fas fa-shopping-cart mr-2 text-green-500 icon-float"></i>Keranjang Belanja
                            </h3>
                            <p class="text-gray-600" id="cart-count">0 item dipilih</p>
                        </div>
                        <div class="flex space-x-4">
                            <button onclick="window.location.href='/pesanan/reset-cart'" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-all duration-300 hover:transform hover:-translate-y-1">
                                <i class="fas fa-trash mr-2"></i>Kosongkan
                            </button>
                            <a href="{{ route('pesanan.create') }}" class="btn-primary px-4 py-2 rounded-lg transition-all duration-300" id="checkout-btn">
                                <i class="fas fa-arrow-right mr-2"></i>Lanjut Pesan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Grid Section with Animated Background -->
            <section class="relative overflow-hidden">
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

                <div class="relative z-10">
                    <!-- Section Title -->
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-navy-800 section-title" data-aos="fade-up">Pilih Jajanan Favorit</h2>
                        <p class="text-gray-600 mt-4" data-aos="fade-up" data-aos-delay="100">Tambahkan ke keranjang dan nikmati pengalaman berbelanja yang mudah</p>
                    </div>

                    <!-- Products Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                        @forelse($jajans as $jajan)
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="relative card-image-container">
                                    <img src="{{ $jajan->gambar_url }}" alt="{{ $jajan->judul }}" 
                                         class="w-full h-48 object-cover card-image"
                                         onerror="this.src='https://via.placeholder.com/300x200/f59e0b/ffffff?text=Jajan'">
                                    
                                    <div class="absolute top-4 right-4">
                                        <div class="rating-badge px-2 py-1 rounded-full text-sm font-semibold">
                                            <i class="fas fa-star mr-1 text-yellow-400"></i>
                                            {{ number_format($jajan->average_rating, 1) }}
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold text-navy-800 mb-2 card-title">{{ $jajan->judul }}</h3>
                                    <p class="text-gray-600 text-sm mb-3 card-description">{{ Str::limit($jajan->deskripsi_singkat, 60) }}</p>
                                    <div class="mb-4">
                                        <div class="text-2xl font-bold text-green-600">{{ $jajan->formatted_harga }}</div>
                                    </div>
                                    
                                    <!-- Star Rating Display -->
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="star-rating">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star star {{ $i <= ($jajan->average_rating / 2) ? 'filled' : '' }}"></i>
                                            @endfor
                                        </div>
                                        <span class="text-sm text-gray-500">({{ $jajan->total_ratings }} ulasan)</span>
                                    </div>
                                    
                                    <!-- Add to Cart Form -->
                                    <div class="flex items-center space-x-2">
                                        <input type="number" 
                                               id="qty-{{ $jajan->id }}" 
                                               value="1" 
                                               min="1" 
                                               max="100" 
                                               class="w-16 px-2 py-1 border border-navy-300 rounded-lg text-center focus:outline-none focus:ring-2 focus:ring-green-400 transition-all duration-200">
                                        <button onclick="addToCart({{ $jajan->id }})" 
                                                class="flex-1 btn-detail text-white px-4 py-2 rounded-lg font-medium transition-all duration-200">
                                            <i class="fas fa-plus mr-2"></i>Tambah
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full empty-state" data-aos="fade-up">
                                <div class="text-center py-16">
                                    <i class="fas fa-cookie-bite text-6xl text-navy-300 mb-4 empty-icon"></i>
                                    <h3 class="text-2xl font-bold text-navy-700 mb-2">Belum ada jajanan tersedia</h3>
                                    <p class="text-gray-500">Maaf, saat ini belum ada jajanan yang tersedia untuk dipesan.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
let cart = JSON.parse(sessionStorage.getItem('cart')) || {};

// Update cart display on page load
updateCartDisplay();

function addToCart(jajanId) {
    const qty = parseInt(document.getElementById(`qty-${jajanId}`).value);
    
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
            document.getElementById('cart-count').textContent = data.total_items + ' item dipilih';
            showToast(data.message, 'success');
        } else {
            showToast('Gagal menambahkan ke keranjang', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('Terjadi kesalahan', 'error');
    });
}

function showToast(message, type) {
    const toast = document.createElement('div');
    toast.className = `fixed top-4 right-4 px-6 py-3 rounded-lg text-white z-50 ${type === 'success' ? 'bg-green-500' : 'bg-red-500'}`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
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

    /* Existing Animations */
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

    /* Performance Optimizations */
    .floating-shapes,
    .particles,
    .card-bg-animation {
        will-change: transform;
    }

    .shape,
    .particle,
    .bg-circle {
        will-change: transform, opacity;
    }

    /* Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        .floating-shapes,
        .particles,
        .card-bg-animation,
        .grid-pattern,
        .food-icons {
            animation: none;
        }
        
        .shape,
        .particle,
        .bg-circle,
        .food-icon {
            animation: none;
        }
        
        .card-hover:hover {
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

    /* Enhanced accessibility */
    .card-hover:focus,
    .btn-primary:focus,
    .btn-detail:focus {
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
@endsection