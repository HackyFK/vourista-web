@extends('layouts.app')

@section('title', 'Pesanan Berhasil - Vourista')

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
            </div>
            
            <!-- Animated Grid Pattern -->
            <div class="grid-pattern"></div>
            
            <!-- Floating Success Icons -->
            <div class="food-icons">
                <div class="food-icon food-icon-1">✅</div>
                <div class="food-icon food-icon-2">🎉</div>
                <div class="food-icon food-icon-3">📞</div>
                <div class="food-icon food-icon-4">🚚</div>
            </div>
            
            <!-- Particle System -->
            <div class="particles">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
                <div class="particle particle-4"></div>
                <div class="particle particle-5"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center" data-aos="fade-up">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-green-500 rounded-full mb-6 animate-pulse">
                    <i class="fas fa-check text-white text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4 hero-title">
                    Pesanan <span class="text-green-300 highlight-text">Berhasil</span>!
                </h1>
                <p class="text-lg md:text-xl text-blue-100 hero-subtitle">
                    Terima kasih! Pesanan Anda telah berhasil dibuat dan sedang diproses
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-12 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden min-h-screen">
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

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Success Card -->
            <div class="bg-white rounded-xl shadow-lg p-8 card-hover border border-gray-100 mb-8" data-aos="fade-up">
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-400 to-green-500 rounded-full mb-4">
                        <i class="fas fa-shopping-cart text-white text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-navy-800 mb-2">Pesanan Anda Telah Diterima</h2>
                    <p class="text-gray-600">
                        Pesanan dengan ID <span class="font-semibold text-green-600">#{{ $pesanan->id ?? 'VRS-' . time() }}</span> telah berhasil dibuat
                    </p>
                </div>

                <!-- Order Status Timeline -->
                <div class="bg-gray-50 rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold text-navy-800 mb-4">Status Pesanan</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-semibold text-gray-900">Pesanan Diterima</p>
                                <p class="text-xs text-gray-500">{{ now()->format('d M Y, H:i') }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-orange-400 rounded-full flex items-center justify-center">
                                <i class="fas fa-clock text-white text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-semibold text-gray-700">Menunggu Konfirmasi Penjual</p>
                                <p class="text-xs text-gray-500">Sedang diproses</p>
                            </div>
                        </div>
                        <div class="flex items-center opacity-50">
                            <div class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                                <i class="fas fa-box text-white text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-semibold text-gray-500">Sedang Dikemas</p>
                                <p class="text-xs text-gray-400">Menunggu</p>
                            </div>
                        </div>
                        <div class="flex items-center opacity-50">
                            <div class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                                <i class="fas fa-truck text-white text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-semibold text-gray-500">Dalam Perjalanan</p>
                                <p class="text-xs text-gray-400">Menunggu</p>
                            </div>
                        </div>
                        <div class="flex items-center opacity-50">
                            <div class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                                <i class="fas fa-home text-white text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-semibold text-gray-500">Pesanan Sampai</p>
                                <p class="text-xs text-gray-400">Menunggu</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Notes -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                    <div class="flex items-start">
                        <i class="fas fa-info-circle text-blue-500 mr-3 mt-1"></i>
                        <div>
                            <h4 class="font-semibold text-blue-800 mb-2">Informasi Penting</h4>
                            <ul class="text-sm text-blue-700 space-y-1">
                                <li>• Penjual akan menghubungi Anda dalam 1-2 jam untuk konfirmasi ketersediaan stok</li>
                                <li>• Harap pastikan nomor WhatsApp Anda aktif dan dapat dihubungi</li>
                                <li>• Estimasi pengiriman 1-2 hari kerja setelah konfirmasi</li>
                                <li>• Pembayaran dilakukan saat barang sampai (COD)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Seller -->
                <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-6">
                    <div class="flex items-center justify-between flex-wrap gap-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                <i class="fab fa-whatsapp text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-navy-800">Butuh Konfirmasi Cepat?</h3>
                                <p class="text-sm text-gray-600">Chat langsung dengan penjual via WhatsApp</p>
                            </div>
                        </div>
                        <button onclick="contactSeller()" class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 btn-whatsapp">
                            <i class="fab fa-whatsapp mr-2"></i>Chat Penjual
                        </button>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button onclick="showBackConfirmation()" class="flex-1 bg-gradient-to-r from-gray-400 to-gray-500 hover:from-gray-500 hover:to-gray-600 text-white font-semibold py-4 px-6 rounded-lg transition-all duration-300 btn-back">
                        <i class="fas fa-arrow-left mr-2"></i>Kembali ke Beranda
                    </button>
                    <button onclick="contactSeller()" class="flex-1 bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white font-semibold py-4 px-6 rounded-lg transition-all duration-300 btn-primary">
                        <i class="fab fa-whatsapp mr-2"></i>Konfirmasi via WhatsApp
                    </button>
                </div>
            </div>

            <!-- Additional Info Card -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-clock text-2xl text-orange-500 mr-3"></i>
                        <h3 class="text-lg font-semibold text-navy-800">Estimasi Waktu</h3>
                    </div>
                    <div class="space-y-2 text-sm text-gray-700">
                        <p><span class="font-semibold">Konfirmasi:</span> 1-2 jam</p>
                        <p><span class="font-semibold">Persiapan:</span> 4-6 jam</p>
                        <p><span class="font-semibold">Pengiriman:</span> 1-2 hari kerja</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-shield-alt text-2xl text-blue-500 mr-3"></i>
                        <h3 class="text-lg font-semibold text-navy-800">Jaminan Kami</h3>
                    </div>
                    <div class="space-y-2 text-sm text-gray-700">
                        <p><i class="fas fa-check text-green-500 mr-2"></i>Barang dijamin fresh</p>
                        <p><i class="fas fa-check text-green-500 mr-2"></i>Kemasan aman dan higienis</p>
                        <p><i class="fas fa-check text-green-500 mr-2"></i>Uang kembali jika tidak sesuai</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Back Confirmation Modal -->
<div id="backConfirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl max-w-md mx-4 p-6 card-hover transform scale-95 transition-all duration-300" id="backModalContent">
        <div class="text-center">
            <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-exclamation-triangle text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-navy-800 mb-4">Konfirmasi Terlebih Dahulu</h3>
            <div class="text-left bg-orange-50 rounded-lg p-4 mb-4">
                <p class="text-sm text-orange-800 mb-3">
                    <i class="fas fa-info-circle mr-2"></i>
                    Untuk memastikan pesanan Anda diproses dengan baik:
                </p>
                <ul class="text-sm text-orange-700 space-y-1">
                    <li><i class="fab fa-whatsapp text-green-500 mr-2"></i>Konfirmasi pesanan via WhatsApp</li>
                    <li><i class="fas fa-phone text-blue-500 mr-2"></i>Pastikan nomor HP aktif</li>
                    <li><i class="fas fa-bell text-purple-500 mr-2"></i>Tunggu panggilan dari penjual</li>
                </ul>
            </div>
            <p class="text-gray-600 text-sm mb-6">
                Penjual akan menghubungi Anda dalam 1-2 jam untuk konfirmasi ketersediaan stok dan detail pengiriman.
            </p>
            <div class="flex gap-3">
                <button 
                    onclick="hideBackConfirmation()"
                    class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-3 px-4 rounded-lg transition-colors duration-200">
                    Tunggu Sebentar
                </button>
                <button 
                    onclick="confirmBack()"
                    class="flex-1 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                    Tetap Kembali
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function contactSeller() {
    // Data pesanan untuk WhatsApp message
    const pesananId = '{{ $pesanan->id ?? "VRS-" . time() }}';
    const namaPemesan = '{{ $pesanan->nama_pemesan ?? "Customer" }}';
    const totalPesanan = '{{ isset($pesanan) ? "Rp " . number_format($pesanan->total_harga, 0, ",", ".") : "Rp 0" }}';
    
    const message = encodeURIComponent(
        `Halo Vourista! 👋\n\n` +
        `Saya ingin mengkonfirmasi pesanan:\n` +
        `📦 ID Pesanan: ${pesananId}\n` +
        `👤 Nama: ${namaPemesan}\n` +
        `💰 Total: ${totalPesanan}\n\n` +
        `Mohon konfirmasi ketersediaan stok dan estimasi pengiriman. Terima kasih! 🙏`
    );
    
    // Nomor WhatsApp toko (ganti dengan nomor sebenarnya)
    const phoneNumber = '62895329668423'; // Ganti dengan nomor WhatsApp toko
    
    window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
}

function showBackConfirmation() {
    const modal = document.getElementById('backConfirmationModal');
    const modalContent = document.getElementById('backModalContent');
    
    modal.classList.remove('hidden');
    setTimeout(() => {
        modalContent.classList.add('scale-100');
        modalContent.classList.remove('scale-95');
    }, 10);
}

function hideBackConfirmation() {
    const modal = document.getElementById('backConfirmationModal');
    const modalContent = document.getElementById('backModalContent');
    
    modalContent.classList.add('scale-95');
    modalContent.classList.remove('scale-100');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

function confirmBack() {
    hideBackConfirmation();
    // Redirect ke halaman pesanan index
    window.location.href = '{{ route("pesanan.index") }}';
}

// Close modal when clicking outside
document.getElementById('backConfirmationModal').addEventListener('click', function(e) {
    if (e.target === this) {
        hideBackConfirmation();
    }
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

// Auto redirect reminder after 30 seconds
setTimeout(() => {
    if (confirm('Sudah mengkonfirmasi pesanan via WhatsApp? Klik OK untuk kembali ke beranda.')) {
        window.location.href = '{{ route("pesanan.index") }}';
    }
}, 30000);
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
        width: 80px;
        height: 80px;
        top: 15%;
        left: 15%;
        animation-delay: 0s;
        animation-duration: 25s;
    }

    .shape-2 {
        width: 120px;
        height: 120px;
        top: 70%;
        left: 80%;
        animation-delay: -5s;
        animation-duration: 30s;
    }

    .shape-3 {
        width: 60px;
        height: 60px;
        top: 40%;
        left: 75%;
        animation-delay: -10s;
        animation-duration: 22s;
    }

    .shape-4 {
        width: 90px;
        height: 90px;
        top: 80%;
        left: 25%;
        animation-delay: -15s;
        animation-duration: 28s;
    }

    .shape-5 {
        width: 70px;
        height: 70px;
        top: 25%;
        left: 50%;
        animation-delay: -20s;
        animation-duration: 20s;
    }

    @keyframes floatShapes {
        0%, 100% {
            transform: translateY(0px) translateX(0px) rotate(0deg);
        }
        25% {
            transform: translateY(-20px) translateX(15px) rotate(90deg);
        }
        50% {
            transform: translateY(-40px) translateX(-8px) rotate(180deg);
        }
        75% {
            transform: translateY(-20px) translateX(-20px) rotate(270deg);
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

    /* Floating Success Icons */
    .food-icons {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .food-icon {
        position: absolute;
        font-size: 1.5rem;
        opacity: 0.1;
        animation: floatFood 20s ease-in-out infinite;
    }

    .food-icon-1 {
        top: 20%;
        left: 20%;
        animation-delay: 0s;
        animation-duration: 25s;
    }

    .food-icon-2 {
        top: 30%;
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

    @keyframes floatFood {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-30px) rotate(180deg);
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
        width: 3px;
        height: 3px;
        background: radial-gradient(circle, rgba(147, 197, 253, 0.8), rgba(147, 197, 253, 0.2));
        border-radius: 50%;
        animation: particleFloat 15s ease-in-out infinite;
    }

    .particle-1 { top: 20%; left: 10%; animation-delay: 0s; }
    .particle-2 { top: 40%; left: 30%; animation-delay: -3s; }
    .particle-3 { top: 60%; left: 70%; animation-delay: -6s; }
    .particle-4 { top: 80%; left: 90%; animation-delay: -9s; }
    .particle-5 { top: 30%; left: 85%; animation-delay: -12s; }

    @keyframes particleFloat {
        0%, 100% {
            transform: translateY(0px) translateX(0px);
            opacity: 0.8;
        }
        50% {
            transform: translateY(-60px) translateX(30px);
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
        width: 250px;
        height: 250px;
        top: 10%;
        left: 80%;
        animation-delay: 0s;
    }

    .bg-circle-2 {
        width: 180px;
        height: 180px;
        top: 60%;
        left: 10%;
        animation-delay: -5s;
    }

    .bg-circle-3 {
        width: 120px;
        height: 120px;
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

    /* Basic Animations */
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
        background: linear-gradient(90deg, #10b981, #059669);
        border-radius: 2px;
        animation: slideInLeft 1s ease-out 
        0.5s both;
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

    /* Card Hover Effects */
    .card-hover {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.1);
        backdrop-filter: blur(10px);
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        border-color: rgba(79, 70, 229, 0.3);
    }

    /* Enhanced Button Styles */
    .btn-primary {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #10b981 0%, #059669 50%, #047857 100%);
        box-shadow: 0 4px 15px 0 rgba(16, 185, 129, 0.3);
        transition: all 0.3s ease;
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
        transform: translateY(-2px);
        box-shadow: 0 8px 25px 0 rgba(16, 185, 129, 0.4);
    }

    .btn-whatsapp {
        background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
        box-shadow: 0 4px 15px 0 rgba(37, 211, 102, 0.3);
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .btn-whatsapp:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px 0 rgba(37, 211, 102, 0.4);
    }

    .btn-back {
        background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        box-shadow: 0 4px 15px 0 rgba(107, 114, 128, 0.3);
        transition: all 0.3s ease;
    }

    .btn-back:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px 0 rgba(107, 114, 128, 0.4);
    }

    /* Modal Animations */
    .modal-enter {
        animation: modalEnter 0.3s ease-out forwards;
    }

    .modal-leave {
        animation: modalLeave 0.3s ease-in forwards;
    }

    @keyframes modalEnter {
        from {
            opacity: 0;
            transform: scale(0.8) translateY(20px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    @keyframes modalLeave {
        from {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
        to {
            opacity: 0;
            transform: scale(0.8) translateY(20px);
        }
    }

    /* Timeline Status Animation */
    .timeline-active {
        animation: pulseGlow 2s ease-in-out infinite;
    }

    @keyframes pulseGlow {
        0%, 100% {
            box-shadow: 0 0 5px rgba(34, 197, 94, 0.5);
        }
        50% {
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.8);
        }
    }

    /* Responsive Design Enhancements */
    @media (max-width: 640px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-subtitle {
            font-size: 1rem;
        }
        
        .card-hover {
            padding: 1rem;
        }
        
        .shape {
            opacity: 0.05;
        }
        
        .food-icon {
            font-size: 1rem;
            opacity: 0.08;
        }
    }

    /* Loading Animation for Buttons */
    .btn-loading::after {
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        top: 50%;
        left: 50%;
        margin-left: -8px;
        margin-top: -8px;
        border: 2px solid transparent;
        border-top: 2px solid currentColor;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Success Checkmark Animation */
    .checkmark {
        animation: checkmarkDraw 0.8s ease-in-out 0.5s both;
    }

    @keyframes checkmarkDraw {
        from {
            stroke-dasharray: 0 100;
        }
        to {
            stroke-dasharray: 100 0;
        }
    }

    /* Notification Toast */
    .toast {
        position: fixed;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #10b981, #059669);
        color: white;
        padding: 16px 24px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        transform: translateX(400px);
        transition: transform 0.3s ease-in-out;
        z-index: 1000;
    }

    .toast.show {
        transform: translateX(0);
    }

    /* Enhanced Mobile Responsiveness */
    @media (max-width: 768px) {
        .floating-shapes {
            display: none;
        }
        
        .particles {
            display: none;
        }
        
        .grid-pattern {
            opacity: 0.3;
        }
        
        .food-icons {
            opacity: 0.5;
        }
    }

    /* Print Styles */
    @media print {
        .gradient-bg,
        .floating-shapes,
        .particles,
        .food-icons,
        .grid-pattern,
        .card-bg-animation {
            display: none !important;
        }
        
        body {
            background: white !important;
        }
        
        .card-hover {
            box-shadow: none !important;
            border: 1px solid #ccc !important;
        }
    }

    /* Accessibility Improvements */
    .btn-primary:focus,
    .btn-whatsapp:focus,
    .btn-back:focus {
        outline: 2px solid #3b82f6;
        outline-offset: 2px;
    }

    /* Reduced Motion Support */
    @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
        
        .floating-shapes,
        .particles,
        .grid-pattern {
            display: none;
        }
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, #6366f1, #8b5cf6);
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, #4f46e5, #7c3aed);
    }

    /* Font Loading Optimization */
    .font-fredoka {
        font-family: 'Fredoka', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        font-display: swap;
    }
</style>
@endpush

@push('scripts')
<script>
// Initialize AOS Animation Library
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
    
    // Update current time
    updateCurrentTime();
    
    // Auto-refresh time every minute
    setInterval(updateCurrentTime, 60000);
    
    // Show welcome toast
    showToast('Pesanan berhasil dibuat! Penjual akan menghubungi Anda segera.', 'success');
    
    // Preload WhatsApp
    preloadWhatsApp();
});

// Update current time display
function updateCurrentTime() {
    const now = new Date();
    const timeString = now.toLocaleDateString('id-ID', {
        day: 'numeric',
        month: 'short',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
    
    const timeElement = document.querySelector('#currentTime');
    if (timeElement) {
        timeElement.textContent = timeString;
    }
}

// Enhanced contact seller function
function contactSeller() {
    // Show loading state
    const button = event.target.closest('button');
    const originalText = button.innerHTML;
    button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Menghubungkan...';
    button.disabled = true;
    
    setTimeout(() => {
        // Simulate order data
        const pesananId = 'VRS-' + new Date().getFullYear() + '-' + String(Math.floor(Math.random() * 1000)).padStart(3, '0');
        const namaPemesan = 'Customer Vourista';
        const totalPesanan = 'Rp ' + (Math.floor(Math.random() * 500000) + 50000).toLocaleString('id-ID');
        
        const message = encodeURIComponent(
            `Halo Vourista! \n\n` +
            `Saya ingin mengkonfirmasi pesanan:\n` +
            ` ID Pesanan: ${pesananId}\n` +
            ` Nama: ${namaPemesan}\n` +
            ` Total: ${totalPesanan}\n\n` +
            `Mohon konfirmasi ketersediaan stok dan estimasi pengiriman. Terima kasih! 🙏`
        );
        
        // Indonesian WhatsApp number format
        const phoneNumber = '62895329668423';
        
        // Open WhatsApp
        window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
        
        // Reset button
        button.innerHTML = originalText;
        button.disabled = false;
        
        // Show confirmation toast
        showToast('WhatsApp terbuka! Silakan kirim pesan konfirmasi.', 'info');
        
        // Update timeline status
        updateTimelineStatus();
        
    }, 1000);
}

// Show back confirmation modal
function showBackConfirmation() {
    const modal = document.getElementById('backConfirmationModal');
    const modalContent = document.getElementById('backModalContent');
    
    modal.classList.remove('hidden');
    modalContent.classList.add('modal-enter');
    
    // Add backdrop blur effect
    document.body.style.overflow = 'hidden';
    
    // Focus management for accessibility
    const firstButton = modalContent.querySelector('button');
    if (firstButton) {
        firstButton.focus();
    }
}

// Hide back confirmation modal
function hideBackConfirmation() {
    const modal = document.getElementById('backConfirmationModal');
    const modalContent = document.getElementById('backModalContent');
    
    modalContent.classList.remove('modal-enter');
    modalContent.classList.add('modal-leave');
    
    setTimeout(() => {
        modal.classList.add('hidden');
        modalContent.classList.remove('modal-leave');
        document.body.style.overflow = 'auto';
    }, 300);
}

// Confirm back to home
function confirmBack() {
    hideBackConfirmation();
    
    // Show loading overlay
    showLoadingOverlay('Mengarahkan ke halaman pesanan...');
    
    setTimeout(() => {
        // Simulate redirect to pesanan.index
        showToast('Dialihkan ke halaman pesanan', 'info');
        // In real app: window.location.href = route('pesanan.index');
        console.log('Redirecting to pesanan.index');
    }, 1500);
}

// Enhanced parallax scroll effect
let ticking = false;
function updateParallax() {
    const scrolled = window.pageYOffset;
    const parallax = scrolled * 0.5;
    
    // Update floating shapes
    const shapes = document.querySelectorAll('.shape');
    shapes.forEach((shape, index) => {
        const speed = (index + 1) * 0.1;
        const rotation = scrolled * 0.1;
        shape.style.transform = `translateY(${parallax * speed}px) rotate(${rotation}deg)`;
    });

    // Update particles
    const particles = document.querySelectorAll('.particle');
    particles.forEach((particle, index) => {
        const speed = (index + 1) * 0.05;
        particle.style.transform = `translateY(${parallax * speed}px)`;
    });
    
    // Update food icons
    const foodIcons = document.querySelectorAll('.food-icon');
    foodIcons.forEach((icon, index) => {
        const speed = (index + 1) * 0.03;
        icon.style.transform = `translateY(${parallax * speed}px) rotate(${scrolled * 0.05}deg)`;
    });
    
    ticking = false;
}

function requestTick() {
    if (!ticking) {
        requestAnimationFrame(updateParallax);
        ticking = true;
    }
}

// Throttled scroll event
window.addEventListener('scroll', requestTick);

// Auto redirect with enhanced UX
let redirectTimer;
function startRedirectTimer() {
    clearTimeout(redirectTimer);
    redirectTimer = setTimeout(() => {
        if (confirm('Sudah mengkonfirmasi pesanan via WhatsApp?\n\nKlik OK untuk kembali ke halaman pesanan, atau Cancel untuk tetap di halaman ini.')) {
            confirmBack();
        } else {
            // Reset timer if user cancels
            startRedirectTimer();
        }
    }, 45000); // 45 seconds instead of 30
}

// Start redirect timer
startRedirectTimer();

// Utility Functions

// Show toast notification
function showToast(message, type = 'info') {
    // Remove existing toast
    const existingToast = document.querySelector('.toast');
    if (existingToast) {
        existingToast.remove();
    }
    
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    
    const colors = {
        success: 'linear-gradient(135deg, #10b981, #059669)',
        error: 'linear-gradient(135deg, #ef4444, #dc2626)',
        warning: 'linear-gradient(135deg, #f59e0b, #d97706)',
        info: 'linear-gradient(135deg, #3b82f6, #2563eb)'
    };
    
    toast.style.background = colors[type] || colors.info;
    toast.innerHTML = `
        <div class="flex items-center">
            <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : type === 'warning' ? 'exclamation-triangle' : 'info-circle'} mr-3"></i>
            <span>${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-white/80 hover:text-white">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => toast.classList.add('show'), 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (toast.parentElement) {
            toast.classList.remove('show');
            setTimeout(() => toast.remove(), 300);
        }
    }, 5000);
}

// Show loading overlay
function showLoadingOverlay(message = 'Memuat...') {
    const overlay = document.createElement('div');
    overlay.id = 'loadingOverlay';
    overlay.className = 'fixed inset-0 bg-black/50 flex items-center justify-center z-50';
    overlay.innerHTML = `
        <div class="bg-white rounded-xl p-8 text-center max-w-sm mx-4">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500 mx-auto mb-4"></div>
            <p class="text-gray-700 font-semibold">${message}</p>
        </div>
    `;
    
    document.body.appendChild(overlay);
    document.body.style.overflow = 'hidden';
}

// Hide loading overlay
function hideLoadingOverlay() {
    const overlay = document.getElementById('loadingOverlay');
    if (overlay) {
        overlay.remove();
        document.body.style.overflow = 'auto';
    }
}

// Update timeline status
function updateTimelineStatus() {
    const firstStatus = document.querySelector('.timeline-active');
    if (firstStatus) {
        firstStatus.classList.add('animate-pulse');
        setTimeout(() => {
            firstStatus.classList.remove('animate-pulse');
        }, 2000);
    }
}

// Preload WhatsApp for faster opening
function preloadWhatsApp() {
    const link = document.createElement('link');
    link.rel = 'prefetch';
    link.href = 'https://wa.me';
    document.head.appendChild(link);
}

// Modal close on outside click
document.addEventListener('click', function(e) {
    const modal = document.getElementById('backConfirmationModal');
    if (modal && e.target === modal) {
        hideBackConfirmation();
    }
});

// Keyboard navigation for modal
document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('backConfirmationModal');
    if (modal && !modal.classList.contains('hidden')) {
        if (e.key === 'Escape') {
            hideBackConfirmation();
        }
        
        // Tab navigation within modal
        if (e.key === 'Tab') {
            const focusableElements = modal.querySelectorAll('button');
            const firstElement = focusableElements[0];
            const lastElement = focusableElements[focusableElements.length - 1];
            
            if (e.shiftKey && document.activeElement === firstElement) {
                e.preventDefault();
                lastElement.focus();
            } else if (!e.shiftKey && document.activeElement === lastElement) {
                e.preventDefault();
                firstElement.focus();
            }
        }
    }
});

// Performance optimization: Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animationPlayState = 'running';
        } else {
            entry.target.style.animationPlayState = 'paused';
        }
    });
}, observerOptions);

// Observe animated elements
document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.shape, .particle, .food-icon');
    animatedElements.forEach(el => observer.observe(el));
});

// Service Worker registration for offline support
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then((registration) => {
                console.log('SW registered: ', registration);
            })
            .catch((registrationError) => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}

// Error handling for WhatsApp
window.addEventListener('error', function(e) {
    if (e.message.includes('wa.me')) {
        showToast('Gagal membuka WhatsApp. Silakan coba lagi atau hubungi langsung ke nomor penjual.', 'error');
    }
});

// Network status handling
window.addEventListener('online', () => {
    showToast('Koneksi internet kembali normal', 'success');
});

window.addEventListener('offline', () => {
    showToast('Koneksi internet terputus. Beberapa fitur mungkin tidak berfungsi.', 'warning');
});
</script>
@endpush

@endsection