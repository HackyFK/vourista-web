@extends('layouts.app')

@section('title', 'Hubungi Kami - Vourista')

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
            </div>
            
            <!-- Animated Grid Pattern -->
            <div class="grid-pattern"></div>
            
            <!-- Floating Contact Icons -->
            <div class="contact-icons">
                <div class="contact-icon contact-icon-1">📧</div>
                <div class="contact-icon contact-icon-2">📱</div>
                <div class="contact-icon contact-icon-3">🏢</div>
                <div class="contact-icon contact-icon-4">⏰</div>
            </div>
            
            <!-- Particle System -->
            <div class="particles">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
                <div class="particle particle-4"></div>
                <div class="particle particle-5"></div>
                <div class="particle particle-6"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 hero-title">
                    Hubungi <span class="text-blue-300 highlight-text">Kami</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 hero-subtitle">
                    Punya pertanyaan, kritik, atau saran? Kami siap membantu Anda! <br>
                    Tim Vourista selalu siap melayani untuk pengalaman jajanan terbaik.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
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
            <!-- Contact Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-4 section-title">
                    Informasi Kontak
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kami sangat menghargai feedback dari Anda. Jangan ragu untuk menghubungi kami untuk pembelian, kritik, saran, atau pertanyaan apapun.
                </p>
            </div>

            <!-- Contact Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Alamat -->
                <div class="contact-card bg-white p-8 rounded-xl shadow-lg text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-icon-wrapper mb-6">
                        <i class="fas fa-map-marker-alt text-4xl text-white contact-icon-bg"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4">Alamat Kami</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Jl. Raya Pucang No. 132, Blater<br>
                        Pucang, Bawang<br>
                        Kota Banjarnegara, Jawa Tengah<br>
                        53471
                    </p>
                </div>

                <!-- Email -->
                <div class="contact-card bg-white p-8 rounded-xl shadow-lg text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-icon-wrapper mb-6">
                        <i class="fas fa-envelope text-4xl text-white contact-icon-bg"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4">Email</h3>
                    <p class="text-gray-600 mb-2">
                        <strong>Umum:</strong><br>
                        <a href="mailto:vourista@gmail.com" class="text-navy-600 hover:text-navy-800 transition-colors">
                            vourista@gmail.com
                        </a>
                    </p>
                    
                </div>

                <!-- Telepon -->
                <div class="contact-card bg-white p-8 rounded-xl shadow-lg text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-icon-wrapper mb-6">
                        <i class="fas fa-phone-alt text-4xl text-white contact-icon-bg"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4">Telepon</h3>
                    <p class="text-gray-600">
                        <strong>WhatsApp:</strong><br>
                        <a href="https://wa.me/6281234567890" class="text-navy-600 hover:text-navy-800 transition-colors" target="_blank">
                            +62 895-3296-68423
                        </a>
                    </p>
                </div>

                <!-- Jam Operasional -->
                <div class="contact-card bg-white p-8 rounded-xl shadow-lg text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-icon-wrapper mb-6">
                        <i class="fas fa-clock text-4xl text-white contact-icon-bg"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4">Jam Operasional</h3>
                    <div class="text-gray-600 leading-relaxed">
                        <p class="mb-2"><strong>Senin - Jumat</strong><br>08:00 - 17:00 WIB</p>
                        <p class="mb-2"><strong>Sabtu</strong><br>08:00 - 14:00 WIB</p>
                        <p><strong>Minggu</strong><br>Tutup</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Info Section -->
    <section class="py-16 bg-gradient-to-b from-white to-slate-50 relative overflow-hidden">
        <!-- Card Section Background Animation -->
        <div class="absolute inset-0">
            <div class="card-bg-animation">
                <div class="bg-circle bg-circle-1"></div>
                <div class="bg-circle bg-circle-2"></div>
                <div class="bg-line bg-line-1"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Ilustrasi -->
                <div class="order-2 lg:order-1" data-aos="fade-right">
                    <div class="illustration-container relative">
                       <img src="images/bersama.jpg" alt="Customer Support Team"
 
                            alt="Tim Customer Support Vourista"
                            class="w-full h-auto rounded-xl shadow-lg illustration-image"
                        >
                        <!-- Floating badges -->
                        <div class="floating-badge floating-badge-1">
                            <i class="fas fa-headset text-white"></i>
                        </div>
                        <div class="floating-badge floating-badge-2">
                            <i class="fas fa-comments text-white"></i>
                        </div>
                        <div class="floating-badge floating-badge-3">
                            <i class="fas fa-heart text-white"></i>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-6">
                        Kenapa Memilih <span class="text-navy-600">Vourista?</span>
                    </h2>
                    
                    <div class="space-y-6">
                        <div class="feature-item">
                            <div class="flex items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-shipping-fast text-navy-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-navy-800 mb-2">Respon Cepat</h4>
                                    <p class="text-gray-600">Tim customer service kami siap merespon pertanyaan Anda dalam waktu maksimal 24 jam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="flex items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt text-navy-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-navy-800 mb-2">Pelayanan Terpercaya</h4>
                                    <p class="text-gray-600">Dengan pengalaman bertahun-tahun, kami berkomitmen memberikan pelayanan terbaik untuk Anda.</p>
                                </div>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="flex items-start">
                                <div class="feature-icon">
                                    <i class="fas fa-users text-navy-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-navy-800 mb-2">Tim Profesional</h4>
                                    <p class="text-gray-600">Tim ahli kami selalu siap membantu dengan solusi terbaik untuk kebutuhan jajanan Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a 
                            href="https://wa.me/+62895329668423" 
                            target="_blank"
                            class="btn-primary inline-flex items-center justify-center px-6 py-3 rounded-lg font-semibold transition-all duration-300"
                        >
                            <i class="fab fa-whatsapp mr-2"></i>
                            Chat WhatsApp
                        </a>
                        <a 
                            href="mailto:info@vourista.com"
                            class="btn-secondary inline-flex items-center justify-center px-6 py-3 rounded-lg font-semibold transition-all duration-300"
                        >
                            <i class="fas fa-envelope mr-2"></i>
                            Kirim Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section (Optional) -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-4">
                    Lokasi Kami
                </h2>
                <p class="text-lg text-gray-600">
                    Kunjungi kantor kami di pusat kota Semarang untuk konsultasi langsung
                </p>
            </div>

            <div class="map-container rounded-xl overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <!-- Placeholder untuk Google Maps -->
                <div class="map-placeholder bg-gradient-to-br from-navy-100 to-navy-50 h-96 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-map-marked-alt text-6xl text-navy-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-navy-800 mb-2">Google Maps Integration</h3>
                        <a 
                            href="https://maps.app.goo.gl/XPj1tZMeXzGKT92s6" 
                            target="_blank"
                            class="inline-block mt-4 btn-primary px-6 py-2 rounded-lg font-semibold transition-all duration-300"
                        >
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Buka di Google Maps
                        </a>
                    </div>
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

        const particles = document.querySelectorAll('.particle');
        particles.forEach((particle, index) => {
            const speed = (index + 1) * 0.05;
            particle.style.transform = `translateY(${parallax * speed}px)`;
        });
    });

    // Add hover effects for contact cards
    document.addEventListener('DOMContentLoaded', function() {
        const contactCards = document.querySelectorAll('.contact-card');
        
        contactCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
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
    .text-navy-600 { color: var(--navy-600); }
    .text-navy-700 { color: var(--navy-700); }
    .text-navy-800 { color: var(--navy-800); }
    .text-navy-900 { color: var(--navy-900); }
    .border-navy-300 { border-color: var(--navy-300); }
    .bg-navy-600 { background-color: var(--navy-600); }
    .bg-navy-100 { background-color: var(--navy-100); }
    .bg-navy-50 { background-color: var(--navy-50); }
    .from-navy-100 { --tw-gradient-from: var(--navy-100); }
    .to-navy-50 { --tw-gradient-to: var(--navy-50); }

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

    /* Floating Shapes Animation - Same as home.blade.php */
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

    /* Floating Contact Icons */
    .contact-icons {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .contact-icon {
        position: absolute;
        font-size: 2rem;
        opacity: 0.1;
        animation: floatContact 20s ease-in-out infinite;
    }

    .contact-icon-1 {
        top: 15%;
        left: 15%;
        animation-delay: 0s;
        animation-duration: 25s;
    }

    .contact-icon-2 {
        top: 25%;
        left: 75%;
        animation-delay: -5s;
        animation-duration: 30s;
    }

    .contact-icon-3 {
        top: 65%;
        left: 85%;
        animation-delay: -10s;
        animation-duration: 22s;
    }

    .contact-icon-4 {
        top: 75%;
        left: 25%;
        animation-delay: -15s;
        animation-duration: 28s;
    }

    @keyframes floatContact {
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

    /* Background Animations for other sections */
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
        top: 50%;
        left: 0;
        width: 100%;
        animation-delay: 0s;
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

    /* Base Animations */
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

    /* Contact Cards */
    .contact-card {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        transform: translateY(0);
        position: relative;
        overflow: hidden;
        border: 2px solid transparent;
    }

    .contact-card::before {
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

    .contact-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15);
        border-color: var(--navy-300);
    }

    .contact-card:hover::before {
        opacity: 1;
    }

    /* Contact Icon Styling */
    .contact-icon-wrapper {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .contact-icon-bg {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--navy-700), var(--navy-600));
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(30, 27, 75, 0.3);
        animation: iconPulse 3s ease-in-out infinite;
        position: relative;
    }

    .contact-icon-bg::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, rgba(147, 197, 253, 0.5), rgba(79, 70, 229, 0.5));
        border-radius: 50%;
        z-index: -1;
        animation: iconGlow 2s ease-in-out infinite alternate;
    }

    @keyframes iconPulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    @keyframes iconGlow {
        0% {
            opacity: 0.5;
        }
        100% {
            opacity: 1;
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

    .btn-secondary {
        background: transparent;
        color: var(--navy-700);
        border: 2px solid var(--navy-600);
        position: relative;
        overflow: hidden;
    }

    .btn-secondary::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--navy-600);
        transition: width 0.3s ease;
        z-index: -1;
    }

    .btn-secondary:hover::before {
        width: 100%;
    }

    .btn-secondary:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(30, 27, 75, 0.2);
    }

    /* Feature Items */
    .feature-item {
        margin-bottom: 2rem;
        opacity: 0;
        transform: translateX(-20px);
        animation: slideInFromLeft 1s ease-out forwards;
    }

    .feature-item:nth-child(1) { animation-delay: 0.2s; }
    .feature-item:nth-child(2) { animation-delay: 0.4s; }
    .feature-item:nth-child(3) { animation-delay: 0.6s; }

    @keyframes slideInFromLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--navy-100), var(--navy-50));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        flex-shrink: 0;
        font-size: 1.25rem;
        box-shadow: 0 5px 15px rgba(79, 70, 229, 0.1);
        transition: all 0.3s ease;
    }

    .feature-item:hover .feature-icon {
        background: linear-gradient(135deg, var(--navy-600), var(--navy-700));
        color: white;
        transform: scale(1.1);
        box-shadow: 0 10px 25px rgba(79, 70, 229, 0.3);
    }

    /* Illustration Styling */
    .illustration-container {
        position: relative;
    }

    .illustration-image {
        transition: transform 0.4s ease;
    }

    .illustration-container:hover .illustration-image {
        transform: scale(1.02);
    }

    /* Floating Badges */
    .floating-badge {
        position: absolute;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--navy-600), var(--navy-700));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        box-shadow: 0 10px 25px rgba(30, 27, 75, 0.3);
        animation: floatBadge 3s ease-in-out infinite;
    }

    .floating-badge-1 {
        top: 15%;
        right: -15px;
        animation-delay: 0s;
    }

    .floating-badge-2 {
        bottom: 30%;
        left: -15px;
        animation-delay: 1s;
    }

    .floating-badge-3 {
        top: 50%;
        right: -20px;
        animation-delay: 2s;
    }

    @keyframes floatBadge {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-15px);
        }
    }

    /* Map Placeholder */
    .map-placeholder {
        transition: all 0.3s ease;
    }

    .map-placeholder:hover {
        transform: scale(1.02);
    }

    .map-container {
        transition: all 0.4s ease;
    }

    .map-container:hover {
        box-shadow: 0 25px 50px rgba(15, 23, 42, 0.2);
    }

    /* Performance Optimizations */
    .floating-shapes,
    .particles,
    .stats-bg-waves,
    .card-bg-animation,
    .contact-icons {
        will-change: transform;
    }

    .shape,
    .particle,
    .wave,
    .bg-circle,
    .contact-icon {
        will-change: transform, opacity;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .contact-card:hover {
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
        
        .contact-icons .contact-icon {
            font-size: 1.5rem;
        }

        .floating-badge {
            display: none;
        }

        .feature-item {
            animation: none;
            opacity: 1;
            transform: none;
        }
    }

    @media (max-width: 640px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .contact-icons .contact-icon {
            font-size: 1.2rem;
        }
        
        .grid-pattern {
            background-size: 30px 30px;
        }

        .contact-card {
            padding: 1.5rem;
        }

        .contact-icon-wrapper {
            width: 60px;
            height: 60px;
        }

        .contact-icon-bg {
            width: 60px;
            height: 60px;
            font-size: 1.25rem;
        }

        .btn-primary,
        .btn-secondary {
            padding: 0.75rem 1.5rem;
            font-size: 0.875rem;
        }
    }

    /* Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        .floating-shapes,
        .particles,
        .stats-bg-waves,
        .card-bg-animation,
        .grid-pattern,
        .contact-icons {
            animation: none;
        }
        
        .shape,
        .particle,
        .wave,
        .bg-circle,
        .contact-icon,
        .floating-badge {
            animation: none;
        }
        
        .contact-card:hover {
            transform: translateY(-2px) scale(1.01);
        }
        
        .contact-icon-bg {
            animation: none;
        }
        
        .feature-item {
            animation: none;
            opacity: 1;
            transform: none;
        }
    }

    /* High contrast mode support */
    @media (prefers-contrast: high) {
        .gradient-bg {
            background: var(--navy-900);
        }
        
        .contact-card {
            border: 2px solid var(--navy-600);
        }
        
        .contact-icon-bg {
            background: var(--navy-800);
            border: 2px solid white;
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
        
        .contact-card {
            background-color: #374151;
            color: white;
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
    .contact-card:focus,
    .btn-primary:focus,
    .btn-secondary:focus {
        outline: 2px solid var(--navy-400);
        outline-offset: 2px;
    }

    /* Link hover effects */
    a[href^="tel:"]:hover,
    a[href^="mailto:"]:hover,
    a[href^="https://wa.me/"]:hover {
        text-decoration: underline;
        transform: translateX(2px);
        transition: all 0.2s ease;
    }

    /* Enhanced visual feedback */
    .btn-primary:active,
    .btn-secondary:active {
        transform: translateY(0);
        box-shadow: 0 5px 15px rgba(30, 27, 75, 0.2);
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Custom scrollbar for webkit browsers */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: var(--navy-600);
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--navy-700);
    }
</style>
@endpush
@endsection