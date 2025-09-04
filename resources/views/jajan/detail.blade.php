@extends('layouts.app')

@section('title', $jajan->judul . ' - Vourista')

@section('content')
<div class="pt-16">
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-900 via-navy-800 to-slate-900 text-white py-20 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="floating-elements">
                <div class="float-1"></div>
                <div class="float-2"></div>
                <div class="float-3"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Image -->
                <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-400 to-indigo-400 rounded-3xl blur-lg opacity-30 group-hover:opacity-50 transition-all duration-500"></div>
                        <img 
                            src="{{ $jajan->gambar_url }}" 
                            alt="{{ $jajan->judul }}"
                            class="relative w-full h-96 object-cover rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105"
                            onerror="this.src='https://via.placeholder.com/600x400/1e3a8a/ffffff?text={{ urlencode($jajan->judul) }}'"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-2xl"></div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="order-1 lg:order-2 space-y-6" data-aos="fade-left" data-aos-duration="1000">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent animate-pulse-slow">
                        {{ $jajan->judul }}
                    </h1>
                    <p class="text-xl mb-8 text-blue-100 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                        {{ $jajan->deskripsi_singkat }}
                    </p>
                    
                    <!-- Rating Display -->
                    <div class="glass-card p-6 transform transition-all duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-4xl font-bold text-white">
                                <span class="bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">
                                    {{ number_format($jajan->average_rating, 1) }}/10
                                </span>
                            </div>
                            <div class="text-right">
                                <div class="star-rating text-2xl mb-2 flex space-x-1">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star transition-all duration-300 hover:scale-125 {{ $i <= ($jajan->average_rating / 2) ? 'text-yellow-400 animate-pulse' : 'text-gray-400' }}"></i>
                                    @endfor
                                </div>
                                <div class="text-sm text-blue-200">{{ $jajan->total_ratings }} ulasan</div>
                            </div>
                        </div>
                        <div class="rating-bar-container">
                            <div class="rating-bar bg-gray-300 h-2 rounded-full overflow-hidden">
                                <div class="rating-fill h-full bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full transition-all duration-1000" style="width: {{ ($jajan->average_rating / 10) * 100 }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gradient-to-b from-navy-50 via-blue-50 to-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                <!-- Description -->
                <div class="xl:col-span-2 space-y-8">
                    <div class="bg-white rounded-3xl shadow-xl p-8 border border-navy-100" data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-navy-900 mb-6 flex items-center">
                            <div class="w-3 h-8 bg-gradient-to-b from-navy-700 to-blue-700 rounded-full mr-4"></div>
                            Deskripsi Lengkap
                        </h2>
                        <div class="prose prose-lg text-navy-700 leading-relaxed">
                            {!! nl2br(e($jajan->deskripsi_lengkap)) !!}
                        </div>
                    </div>

                    <!-- Reviews Section -->
                    @if($latestReviews->count() > 0)
                    <div class="bg-white rounded-3xl shadow-xl p-8 border border-navy-100" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-3xl font-bold text-navy-900 mb-8 flex items-center">
                            <div class="w-3 h-8 bg-gradient-to-b from-navy-700 to-blue-700 rounded-full mr-4"></div>
                            Ulasan Terbaru
                            <span class="ml-3 bg-navy-100 text-navy-800 text-sm font-bold px-4 py-2 rounded-full border border-navy-200">
                                {{ $latestReviews->count() }} Review
                            </span>
                        </h2>
                        
                        <div class="space-y-4">
                            @foreach($latestReviews as $index => $review)
                                <div class="review-card bg-white rounded-2xl border-l-4 border-navy-600 p-6 shadow-lg hover:shadow-xl transition-all duration-300" 
                                     data-aos="fade-up" 
                                     data-aos-delay="{{ 50 + ($index * 50) }}">
                                    
                                    <!-- Header Section -->
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-gradient-to-br from-navy-600 to-blue-700 rounded-full flex items-center justify-center">
                                                <i class="fas fa-user text-white text-sm"></i>
                                            </div>
                                            <div>
                                                <div class="font-bold text-navy-900">Reviewer {{ $loop->iteration }}</div>
                                                <div class="text-sm text-gray-500">{{ $review->created_at->diffForHumans() }}</div>
                                                <div class="text-xs text-gray-400">{{ $review->created_at->format('d M Y, H:i') }}</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Rating Badge - Lebih Prominent -->
                                        <div class="text-right">
                                            <div class="bg-navy-100 text-navy-900 px-4 py-2 rounded-xl border-2 border-navy-200">
                                                <div class="text-2xl font-bold">{{ $review->nilai }}<span class="text-lg text-gray-600">/10</span></div>
                                            </div>
                                            <div class="text-xs text-navy-600 mt-1 font-medium">
                                                @if($review->nilai >= 8)
                                                    Bagus
                                                @elseif($review->nilai >= 6)
                                                    Cukup
                                                @elseif($review->nilai >= 4)
                                                    Biasa
                                                @else
                                                    Kurang
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Star Rating -->
                                    <div class="flex items-center justify-between mb-4 bg-gray-50 rounded-lg p-3">
                                        <div class="flex items-center space-x-1">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star text-lg {{ $i <= ($review->nilai / 2) ? 'text-amber-400' : 'text-gray-300' }}"></i>
                                            @endfor
                                        </div>
                                        <div class="text-navy-800 font-bold text-sm">
                                            {{ number_format($review->nilai / 2, 1) }}/5 Bintang
                                        </div>
                                    </div>
                                    
                                    <!-- Review Text -->
                                    @if($review->ulasan)
                                        <p class="text-navy-700 leading-relaxed italic mb-4">
                                            "{{ $review->ulasan }}"
                                        </p>
                                    @else
                                        <div class="flex items-center text-gray-500 italic mb-4">
                                            <i class="fas fa-comment-slash mr-2 opacity-50"></i>
                                            <span>Reviewer tidak memberikan ulasan tertulis</span>
                                        </div>
                                    @endif
                                    
                                    <!-- Bottom Info -->
                                    <div class="flex items-center justify-between text-xs text-gray-500 border-t pt-3">
                                        <span>
                                            <i class="fas fa-thumbs-up mr-1"></i>Ulasan terverifikasi
                                        </span>
                                        <span>ID: #{{ str_pad($review->id, 4, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                
                <!-- Rating Form -->
                <div class="xl:col-span-1">
                    <div class="sticky top-24">
                        <div class="bg-white rounded-3xl shadow-2xl p-8 border border-navy-100" data-aos="fade-up" data-aos-delay="400">
                            <h2 class="text-2xl font-bold text-navy-900 mb-6 flex items-center">
                                <div class="w-3 h-6 bg-gradient-to-b from-navy-700 to-blue-700 rounded-full mr-3"></div>
                                Beri Rating
                            </h2>
                            
                            @if(session('success'))
                                <div class="success-alert bg-gradient-to-r from-green-500 to-emerald-500 text-white px-4 py-3 rounded-xl mb-6 flex items-center shadow-lg animate-slide-down">
                                    <i class="fas fa-check-circle mr-2 text-xl"></i>
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif
                            
                            <form method="POST" action="{{ route('jajan.rate', $jajan) }}" class="space-y-6">
                                @csrf
                                
                                <!-- Rating Input -->
                                <div>
                                    <label class="block text-sm font-semibold text-navy-700 mb-3">Rating (1-10)</label>
                                    <div class="grid grid-cols-5 gap-2 mb-2">
                                        @for($i = 1; $i <= 10; $i++)
                                            <button 
                                                type="button" 
                                                class="rating-star w-full aspect-square text-2xl text-gray-300 hover:text-yellow-400 transition-all duration-200 hover:scale-110 rounded-lg border-2 border-transparent hover:border-yellow-300 flex items-center justify-center"
                                                onclick="setRating({{ $i }})"
                                            >
                                                <span class="font-bold text-sm">{{ $i }}</span>
                                            </button>
                                        @endfor
                                    </div>
                                    <input type="hidden" name="nilai" id="rating-input" value="">
                                    @error('nilai')
                                        <p class="text-red-500 text-sm mt-2 flex items-center">
                                            <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                
                                <!-- Review Input -->
                                <div>
                                    <label for="ulasan" class="block text-sm font-semibold text-navy-700 mb-2">Ulasan (Opsional)</label>
                                    <textarea 
                                        name="ulasan" 
                                        id="ulasan" 
                                        rows="4" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-navy-500 focus:border-navy-500 transition-all duration-200"
                                        placeholder="Tulis ulasan Anda tentang jajanan ini..."
                                    >{{ old('ulasan') }}</textarea>
                                    @error('ulasan')
                                        <p class="text-red-500 text-sm mt-2 flex items-center">
                                            <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                
                                <button 
                                    type="submit" 
                                    class="submit-btn w-full bg-gradient-to-r from-navy-700 to-blue-800 hover:from-navy-800 hover:to-blue-900 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl"
                                >
                                    <i class="fas fa-star mr-2"></i>Kirim Rating
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Simplified Contact Section -->
<section class="py-16 bg-gradient-to-br from-navy-800 to-blue-900 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="mb-8" data-aos="fade-up">

            <p class="text-blue-500 text-lg">
                Tertarik membeli? Ayo ke laman kontak sekarang!
            </p>
        </div>
        
        {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8" data-aos="fade-up" data-aos-delay="200">
            <div class="flex items-center justify-center space-x-2 text-blue-200">
                <i class="fas fa-phone text-green-400"></i>
                <span>Telepon</span>
            </div>
            <div class="flex items-center justify-center space-x-2 text-blue-200">
                <i class="fas fa-envelope text-blue-400"></i>
                <span>Email</span>
            </div>
            <div class="flex items-center justify-center space-x-2 text-blue-200">
                <i class="fab fa-whatsapp text-green-400"></i>
                <span>WhatsApp</span>
            </div>
        </div>
        
        <div data-aos="fade-up" data-aos-delay="400">
            {{-- <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-full transition-all duration-300 hover:shadow-lg"> --}}
                {{-- <i class="fas fa-paper-plane mr-2"></i>
                Hubungi Kami
            </a>
        </div> --}} 
    </div>
</section>

<style>
/* Custom Navy Colors */
.text-navy-900 { color: #0f172a; }
.text-navy-800 { color: #1e293b; }
.text-navy-700 { color: #334155; }
.text-navy-600 { color: #475569; }
.bg-navy-900 { background-color: #0f172a; }
.bg-navy-800 { background-color: #1e293b; }
.bg-navy-700 { background-color: #334155; }
.bg-navy-600 { background-color: #475569; }
.bg-navy-100 { background-color: #f1f5f9; }
.bg-navy-50 { background-color: #f8fafc; }
.border-navy-600 { border-color: #475569; }
.border-navy-200 { border-color: #e2e8f0; }
.border-navy-100 { border-color: #f1f5f9; }
.ring-navy-100 { --tw-ring-color: #f1f5f9; }
.ring-navy-500 { --tw-ring-color: #64748b; }
.focus\:ring-navy-500:focus { --tw-ring-color: #64748b; }
.focus\:border-navy-500:focus { border-color: #64748b; }

/* Glass Card Effect */
.glass-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 1rem;
}

/* Floating Elements Animation */
.floating-elements {
    position: absolute;
    width: 100%;
    height: 100%;
}

.float-1, .float-2, .float-3 {
    position: absolute;
    background: rgba(30, 58, 138, 0.4);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

.float-1 {
    width: 80px;
    height: 80px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.float-2 {
    width: 60px;
    height: 60px;
    top: 60%;
    right: 20%;
    animation-delay: 2s;
}

.float-3 {
    width: 100px;
    height: 100px;
    bottom: 20%;
    left: 70%;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Pulse Slow Animation */
.animate-pulse-slow {
    animation: pulse 3s ease-in-out infinite;
}

/* Slide Down Animation */
.animate-slide-down {
    animation: slideDown 0.5s ease-out;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Rating Stars Hover Effect */
.rating-star:hover {
    transform: scale(1.1);
}

.rating-star.selected {
    background: linear-gradient(135deg, #1e293b, #334155);
    color: white !important;
    border-color: #334155 !important;
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.3);
}

/* Review Card Hover Effect */
.review-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.15);
}

/* Submit Button Hover Effect */
.submit-btn:hover {
    box-shadow: 0 15px 35px rgba(15, 23, 42, 0.4);
}
</style>

<script>
// Rating Selection Function
function setRating(value) {
    document.getElementById('rating-input').value = value;
    
    // Update visual feedback
    const stars = document.querySelectorAll('.rating-star');
    stars.forEach((star, index) => {
        star.classList.remove('selected');
        if (index < value) {
            star.classList.add('selected');
        }
    });
}

// Auto-hide success alert
document.addEventListener('DOMContentLoaded', function() {
    const alerts = document.querySelectorAll('.alert-auto-hide');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.transition = 'opacity 0.5s ease-out';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }, 3500);
    });
    
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    }
    
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>
@endsection