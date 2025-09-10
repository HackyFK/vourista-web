@extends('layouts.app')

@section('title', 'Checkout - Vourista')

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
            
            <!-- Floating Food Icons -->
            <div class="food-icons">
                <div class="food-icon food-icon-1">🛒</div>
                <div class="food-icon food-icon-2">📦</div>
                <div class="food-icon food-icon-3">💳</div>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4 hero-title">
                    <i class="fas fa-shopping-cart mr-3 text-blue-300"></i>
                    Checkout <span class="text-blue-300 highlight-text">Pesanan</span>
                </h1>
                <p class="text-lg md:text-xl text-blue-100 hero-subtitle">
                    Lengkapi data diri dan alamat pengiriman untuk menyelesaikan pesanan Anda
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

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Seller Location Info -->
            <div class="mb-8">
                <div class="bg-white rounded-xl shadow-lg p-6 card-hover border border-gray-100" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-store text-2xl text-green-500 mr-3"></i>
                        <h2 class="text-xl font-semibold text-navy-800">Lokasi Penjual</h2>
                    </div>
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-green-500 mr-3 mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-navy-800 mb-1">PT. Vourista Snack Kreasi</h3>
                                <p class="text-gray-700 text-sm"> Jl. Raya Pucang No.132, Blater, Pucang, Kec. Bawang, Kab. Banjarnegara, Jawa Tengah 53471</p>
                                <p class="text-xs text-gray-500 mt-1">Pusat jajanan tradisional dan modern.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 sticky top-8 card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="text-xl font-semibold text-navy-800 mb-4 section-title">
                            <i class="fas fa-receipt mr-2 text-blue-500"></i>Ringkasan Pesanan
                        </h2>
                        
                        <!-- Cart Items -->
                        <div class="space-y-4 mb-6">
                            @foreach($keranjang as $jajanId => $jumlah)
                                @php
                                    $jajan = $jajans->find($jajanId);
                                @endphp
                                @if($jajan)
                                    <div class="flex items-center space-x-3 cart-item p-3 bg-gray-50 rounded-lg border border-gray-100">
                                        <img src="{{ $jajan->gambar_url }}" alt="{{ $jajan->judul }}" 
                                             class="w-14 h-14 object-cover rounded-lg card-image">
                                        <div class="flex-1">
                                            <h4 class="text-sm font-semibold text-navy-800">{{ $jajan->judul }}</h4>
                                            <p class="text-xs text-gray-600">{{ $jumlah }}x {{ $jajan->formatted_harga }}</p>
                                        </div>
                                        <div class="text-sm font-semibold text-green-600">
                                            Rp {{ number_format($jajan->harga * $jumlah, 0, ',', '.') }}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        
                        <!-- Subtotal -->
                        <div class="border-t pt-4 space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Subtotal Produk:</span>
                                <span class="font-semibold text-navy-800">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex justify-between text-sm" id="ongkir-row" style="display: none;">
                                <span class="text-gray-600">Ongkos Kirim:</span>
                                <span class="font-semibold text-green-600" id="ongkir-amount">Rp 0</span>
                            </div>
                            <div class="flex justify-between text-lg font-bold mt-4 pt-4 border-t border-gray-200">
                                <span class="text-navy-800">Total:</span>
                                <span class="text-green-600" id="total-amount">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-lg p-6 card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-xl font-semibold text-navy-800 mb-6 section-title">
                            <i class="fas fa-user mr-2 text-green-500"></i>Data Pemesan
                        </h2>
                        
                        <form method="POST" action="{{ route('pesanan.store') }}" class="space-y-6" id="checkout-form">
                            @csrf
                            
                            <!-- Nama Pemesan -->
                            <div class="form-group">
                                <label for="nama_pemesan" class="block text-sm font-semibold text-navy-700 mb-2">
                                    <i class="fas fa-user mr-2 text-green-500"></i>Nama Lengkap
                                </label>
                                <input 
                                    type="text" 
                                    id="nama_pemesan" 
                                    name="nama_pemesan" 
                                    value="{{ old('nama_pemesan') }}"
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition-all duration-300 @error('nama_pemesan') border-red-500 @enderror"
                                    placeholder="Masukkan nama lengkap Anda"
                                    required
                                >
                                @error('nama_pemesan')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Nomor HP -->
                            <div class="form-group">
                                <label for="no_hp" class="block text-sm font-semibold text-navy-700 mb-2">
                                    <i class="fas fa-phone mr-2 text-green-500"></i>Nomor HP/WhatsApp
                                </label>
                                <input 
                                    type="tel" 
                                    id="no_hp" 
                                    name="no_hp" 
                                    value="{{ old('no_hp') }}"
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition-all duration-300 @error('no_hp') border-red-500 @enderror"
                                    placeholder="Contoh: 08123456789"
                                    required
                                >
                                @error('no_hp')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Alamat -->
                            <div class="form-group">
                                <label for="alamat" class="block text-sm font-semibold text-navy-700 mb-2">
                                    <i class="fas fa-map-marker-alt mr-2 text-green-500"></i>Alamat Lengkap Pengiriman
                                </label>
                                <textarea 
                                    id="alamat" 
                                    name="alamat" 
                                    rows="4"
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition-all duration-300 @error('alamat') border-red-500 @enderror"
                                    placeholder="Masukkan alamat lengkap termasuk nama jalan, nomor rumah, RT/RW, kelurahan, kecamatan, kota"
                                    required
                                >{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Jarak dengan Dropdown Options -->
                            <div class="form-group">
                                <label for="jarak_km" class="block text-sm font-semibold text-navy-700 mb-2">
                                    <i class="fas fa-route mr-2 text-green-500"></i>Perkiraan Jarak dari Toko
                                </label>
                                <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 mb-3">
                                    <p class="text-sm text-blue-700">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        Pilih perkiraan jarak dari lokasi toko ke alamat pengiriman Anda
                                    </p>
                                </div>
                                <select 
                                    id="jarak_km" 
                                    name="jarak_km" 
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition-all duration-300 @error('jarak_km') border-red-500 @enderror"
                                    onchange="hitungOngkir()"
                                    required
                                >
                                    <option value="">Pilih jarak pengiriman</option>
                                    <option value="1" {{ old('jarak_km') == '1' ? 'selected' : '' }}>1 KM - Sekitar toko (Rp 5.000)</option>
                                    <option value="2" {{ old('jarak_km') == '2' ? 'selected' : '' }}>2 KM - Dalam kota dekat (Rp 10.000)</option>
                                    <option value="3" {{ old('jarak_km') == '3' ? 'selected' : '' }}>3 KM - Dalam kota (Rp 15.000)</option>
                                    <option value="5" {{ old('jarak_km') == '5' ? 'selected' : '' }}>5 KM - Pinggiran kota (Rp 25.000)</option>
                                    <option value="7" {{ old('jarak_km') == '7' ? 'selected' : '' }}>7 KM - Luar kota dekat (Rp 35.000)</option>
                                    <option value="10" {{ old('jarak_km') == '10' ? 'selected' : '' }}>10 KM - Luar kota jauh (Rp 50.000)</option>
                                    <option value="15" {{ old('jarak_km') == '15' ? 'selected' : '' }}>15+ KM - Antar kota (Rp 75.000)</option>
                                </select>
                                @error('jarak_km')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                                <p class="text-xs text-gray-500 mt-2">
                                    <i class="fas fa-truck mr-1"></i>
                                    Tarif pengiriman: Rp 5.000/km
                                </p>
                            </div>
                            
                            <!-- Metode Pembayaran -->
                            <div class="form-group">
                                <label class="block text-sm font-semibold text-navy-700 mb-3">
                                    <i class="fas fa-credit-card mr-2 text-green-500"></i>Metode Pembayaran
                                </label>
                                <div class="bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 rounded-xl p-4">
                                    <div class="flex items-center">
                                        <input type="radio" id="cod" name="metode_pembayaran" value="COD" checked disabled class="text-green-600 focus:ring-green-500">
                                        <label for="cod" class="ml-3 text-sm font-semibold text-navy-800">
                                            <i class="fas fa-money-bill-wave mr-2 text-green-500"></i>
                                            COD (Cash on Delivery)
                                        </label>
                                    </div>
                                    <div class="mt-2 ml-8">
                                        <p class="text-xs text-gray-700">
                                            Bayar tunai saat barang diterima di alamat pengiriman
                                        </p>
                                        <div class="flex items-center mt-2 text-xs text-green-700">
                                            <i class="fas fa-shield-alt mr-1"></i>
                                            <span>Aman dan terpercaya</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                                <a href="{{ route('pesanan.index') }}" 
                                   class="flex-1 bg-gradient-to-r from-gray-400 to-gray-500 hover:from-gray-500 hover:to-gray-600 text-white font-semibold py-4 px-6 rounded-lg text-center transition-all duration-300 btn-back">
                                    <i class="fas fa-arrow-left mr-2"></i>Kembali ke Keranjang
                                </a>
                                <button 
                                    type="button" 
                                    onclick="showConfirmationModal()"
                                    class="flex-1 bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white font-semibold py-4 px-6 rounded-lg transition-all duration-300 btn-primary">
                                    <i class="fas fa-shopping-cart mr-2"></i>Buat Pesanan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Confirmation Modal -->
<div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl max-w-md mx-4 p-6 card-hover transform scale-95 transition-all duration-300" id="modalContent">
        <div class="text-center">
            <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-exclamation text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-navy-800 mb-4">Konfirmasi Pesanan</h3>
            <div class="text-left bg-gray-50 rounded-lg p-4 mb-4">
                <h4 class="font-semibold text-navy-700 mb-2">Perhatian:</h4>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Pastikan alamat pengiriman sudah benar</li>
                    <li><i class="fas fa-clock text-orange-500 mr-2"></i>Waktu pengiriman 1-2 hari kerja</li>
                    <li><i class="fas fa-box text-blue-500 mr-2"></i>Ketersediaan stok akan dikonfirmasi via WhatsApp</li>
                    <li><i class="fas fa-phone text-green-500 mr-2"></i>Kami akan menghubungi Anda untuk konfirmasi</li>
                    <li><i class="fas fa-money-bill-wave text-purple-500 mr-2"></i>Pembayaran saat barang sampai (COD)</li>
                </ul>
            </div>
            <p class="text-gray-600 text-sm mb-6">
                Dengan melanjutkan, Anda menyetujui untuk dihubungi melalui WhatsApp untuk konfirmasi pesanan dan ketersediaan stok.
            </p>
            <div class="flex gap-3">
                <button 
                    onclick="hideConfirmationModal()"
                    class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-3 px-4 rounded-lg transition-colors duration-200">
                    Batal
                </button>
                <button 
                    onclick="submitOrder()"
                    class="flex-1 bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                    Ya, Buat Pesanan
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function hitungOngkir() {
    const jarakSelect = document.getElementById('jarak_km');
    const jarak = jarakSelect.value;
    
    if (jarak && jarak > 0) {
        fetch('{{ route('pesanan.hitung-ongkir') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                jarak: parseFloat(jarak)
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const ongkirRow = document.getElementById('ongkir-row');
                const ongkirAmount = document.getElementById('ongkir-amount');
                const totalAmount = document.getElementById('total-amount');
                
                ongkirRow.style.display = 'flex';
                ongkirAmount.textContent = data.formatted_ongkir;
                
                const subtotal = {{ $subtotal }};
                const total = subtotal + data.ongkir;
                totalAmount.textContent = 'Rp ' + total.toLocaleString('id-ID');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    } else {
        document.getElementById('ongkir-row').style.display = 'none';
        document.getElementById('total-amount').textContent = 'Rp {{ number_format($subtotal, 0, ',', '.') }}';
    }
}

function showConfirmationModal() {
    const modal = document.getElementById('confirmationModal');
    const modalContent = document.getElementById('modalContent');
    
    modal.classList.remove('hidden');
    setTimeout(() => {
        modalContent.classList.add('scale-100');
        modalContent.classList.remove('scale-95');
    }, 10);
}

function hideConfirmationModal() {
    const modal = document.getElementById('confirmationModal');
    const modalContent = document.getElementById('modalContent');
    
    modalContent.classList.add('scale-95');
    modalContent.classList.remove('scale-100');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

function submitOrder() {
    hideConfirmationModal();
    document.getElementById('checkout-form').submit();
}

// Close modal when clicking outside
document.getElementById('confirmationModal').addEventListener('click', function(e) {
    if (e.target === this) {
        hideConfirmationModal();
    }
});

// Initialize animations when page loads
window.addEventListener('load', () => {
    // Add any additional initialization if needed
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

    .btn-back {
        position: relative;
        overflow: hidden;
    }

    .btn-back::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .btn-back:hover::before {
        left: 100%;
    }

    .btn-back:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(107, 114, 128, 0.3);
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
        transform: translateY(-5px) scale(1.01);
        box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15);
    }

    .card-hover:hover::before {
        opacity: 1;
    }

    .card-image {
        transition: transform 0.4s ease;
    }

    .card-hover:hover .card-image {
        transform: scale(1.05);
    }

    /* Form Styles */
    .form-input {
        background: white;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .form-input:focus {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79, 70, 229, 0.1);
        border-color: #10b981;
    }

    .form-group {
        animation: fadeInUp 0.6s ease-out;
    }

    .form-group:nth-child(1) { animation-delay: 0.1s; }
    .form-group:nth-child(2) { animation-delay: 0.2s; }
    .form-group:nth-child(3) { animation-delay: 0.3s; }
    .form-group:nth-child(4) { animation-delay: 0.4s; }
    .form-group:nth-child(5) { animation-delay: 0.5s; }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
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

    /* Modal Styles */
    #confirmationModal {
        backdrop-filter: blur(8px);
    }

    #modalContent {
        animation: modalSlideIn 0.3s ease-out;
    }

    @keyframes modalSlideIn {
        from {
            opacity: 0;
            transform: translateY(-20px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .card-hover:hover {
            transform: translateY(-3px) scale(1.005);
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
            font-size: 1.2rem;
        }
    }

    @media (max-width: 640px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .grid-pattern {
            background-size: 30px 30px;
        }
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

    /* Enhanced accessibility */
    .form-input:focus,
    .btn-primary:focus,
    .btn-back:focus {
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
