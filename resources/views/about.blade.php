@extends('layouts.app')

@section('title', 'Tentang Kami - Vourista')

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
            
            <!-- Floating Food Icons -->
            <div class="food-icons">
                <div class="food-icon food-icon-1">🍪</div>
                <div class="food-icon food-icon-2">🍰</div>
                <div class="food-icon food-icon-3">🧁</div>
                <div class="food-icon food-icon-4">🍩</div>
                <div class="food-icon food-icon-5">🥯</div>
                <div class="food-icon food-icon-6">🍿</div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 hero-title">
                    Tentang <span class="text-blue-300 highlight-text">Vourista</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 hero-subtitle">
                    Mengenal lebih dalam tentang platform rating jajanan terbaik di Indonesia
                </p>
            </div>
        </div>
    </section>

    <!-- Latar Belakang Perusahaan Section -->
    <section class="py-16 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <!-- Subtle Background Animation -->
        <div class="absolute inset-0">
            <div class="stats-bg-waves">
                <div class="wave wave-1"></div>
                <div class="wave wave-2"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-6 section-title">
                        Latar Belakang Vourista
                    </h2>
                    <div class="space-y-6 text-gray-700 leading-relaxed">
                        <p class="text-lg">
                            Vourista lahir dari kebutuhan akan platform yang dapat membantu para pecinta kuliner menemukan jajanan dan camilan terbaik di Indonesia. Didirikan pada tahun 2025, kami percaya bahwa setiap jajanan memiliki cerita dan keunikan tersendiri yang layak untuk dibagikan.
                        </p>
                        <p class="text-lg">
                            Platform kami dikembangkan dengan teknologi terdepan untuk memberikan pengalaman terbaik bagi pengguna dalam mencari, menilai, dan berbagi pengalaman tentang berbagai jajanan favorit mereka.
                        </p>
                        <p class="text-lg">
                            Dengan dukungan komunitas yang terus berkembang, Vourista telah menjadi destinasi utama untuk menemukan rekomendasi jajanan terpercaya dari seluruh Indonesia.
                        </p>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl transform hover:scale-105 transition-all duration-300">
                        <img 
                            src="{{ asset('images/bersama.JPG') }}" 
                            alt="Vourista Company Background" 
                            class="w-full h-80 object-cover"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <!-- Floating decorative elements -->
                    <div class="absolute -top-6 -left-6 w-12 h-12 bg-blue-400 rounded-full opacity-20 animate-bounce"></div>
                    <div class="absolute -bottom-6 -right-6 w-8 h-8 bg-purple-400 rounded-full opacity-30 animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Makna & Tujuan Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <!-- Card Background Animation -->
        <div class="absolute inset-0">
            <div class="card-bg-animation">
                <div class="bg-circle bg-circle-1"></div>
                <div class="bg-circle bg-circle-2"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-4 section-title">
                    Makna & Tujuan Vourista
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Setiap elemen dari Vourista memiliki makna mendalam yang mencerminkan visi dan misi kami
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Vision Card -->
                <div class="meaning-card bg-gradient-to-br from-blue-50 to-indigo-100 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center justify-center w-16 h-16 bg-blue-600 rounded-full mb-6 mx-auto">
                        <i class="fas fa-eye text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4 text-center">Visi Kami</h3>
                    <p class="text-gray-700 text-center leading-relaxed">
                        Menjadi platform terdepan dalam memberikan rekomendasi jajanan dan camilan terbaik yang dapat dipercaya oleh seluruh masyarakat Indonesia.
                    </p>
                </div>

                <!-- Mission Card -->
                <div class="meaning-card bg-gradient-to-br from-purple-50 to-pink-100 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-600 rounded-full mb-6 mx-auto">
                        <i class="fas fa-bullseye text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4 text-center">Misi Kami</h3>
                    <p class="text-gray-700 text-center leading-relaxed">
                        Menghubungkan pecinta kuliner dengan jajanan berkualitas melalui sistem rating dan ulasan yang transparan dan terpercaya.
                    </p>
                </div>

                <!-- Values Card -->
                <div class="meaning-card bg-gradient-to-br from-green-50 to-emerald-100 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center justify-center w-16 h-16 bg-green-600 rounded-full mb-6 mx-auto">
                        <i class="fas fa-heart text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4 text-center">Nilai Kami</h3>
                    <p class="text-gray-700 text-center leading-relaxed">
                        Transparansi, kepercayaan, dan kualitas adalah fondasi utama dalam setiap layanan yang kami berikan kepada komunitas.
                    </p>
                </div>
            </div>

            <!-- Brand Meaning Timeline -->
            <div class="mt-16">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-2xl font-bold text-navy-800 mb-8 text-center" data-aos="fade-up">
                        Filosofi Nama "Vourista"
                    </h3>
                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-400 to-purple-600 rounded-full"></div>
                        
                        <!-- Timeline Items -->
                        <div class="space-y-12">
                            <div class="flex items-center justify-between" data-aos="fade-right">
                                <div class="w-5/12 text-right pr-8">
                                    <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-blue-500">
                                        <h4 class="font-bold text-navy-800 mb-2">"Vour"</h4>
                                        <p class="text-gray-600">Berasal dari kata "Flavor" yang melambangkan cita rasa dan kelezatan</p>
                                    </div>
                                </div>
                                <div class="w-2/12 flex justify-center">
                                    <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                                </div>
                                <div class="w-5/12"></div>
                            </div>
                            
                            <div class="flex items-center justify-between" data-aos="fade-left">
                                <div class="w-5/12"></div>
                                <div class="w-2/12 flex justify-center">
                                    <div class="w-4 h-4 bg-purple-500 rounded-full border-4 border-white shadow-lg"></div>
                                </div>
                                <div class="w-5/12 text-left pl-8">
                                    <div class="bg-white p-6 rounded-lg shadow-lg border-r-4 border-purple-500">
                                        <h4 class="font-bold text-navy-800 mb-2">"ista"</h4>
                                        <p class="text-gray-600">Suffix yang menunjukkan "ahli" atau "penggemar", seperti dalam "barista"</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between" data-aos="fade-up">
                                <div class="w-5/12 text-right pr-8">
                                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-6 rounded-lg shadow-lg">
                                        <h4 class="font-bold mb-2">Vourista</h4>
                                        <p>Ahli dalam menemukan dan menilai cita rasa jajanan terbaik</p>
                                    </div>
                                </div>
                                <div class="w-2/12 flex justify-center">
                                    <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full border-4 border-white shadow-lg"></div>
                                </div>
                                <div class="w-5/12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
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
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-4 section-title">
                    Tim Petinggi Vourista
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Berkenalan dengan para visioner yang memimpin Vourista menuju masa depan yang lebih baik
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8">
                <!-- CEO -->
                <div class="team-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative">
                        <img 
                            src="{{ asset('images/5.png') }}" 
                            alt="CEO Vourista" 
                            class="w-full h-64 object-cover"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="flex items-center space-x-2">
                                {{-- <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div> --}}
                                {{-- <span class="text-sm font-medium">Available</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-navy-800 mb-2">Farkhansyah Ibrahimovic</h3>
                        <p class="text-blue-600 font-medium mb-3">Chief Executive Officer</p>
                        {{-- <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Visioner utama yang memimpin Vourista dengan pengalaman 10+ tahun di industri teknologi kuliner.
                        </p> --}}
                        {{-- <div class="flex justify-center space-x-3">
                            <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                <i class="fab fa-linkedin text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>

                <!-- CTO -->
                <div class="team-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative">
                        <img 
                            src="{{ asset('images/2.png') }}" 
                            alt="CTO Vourista" 
                            class="w-full h-64 object-cover"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="flex items-center space-x-2">
                                {{-- <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div> --}}
                                {{-- <span class="text-sm font-medium">Available</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-navy-800 mb-2">Hacky Zalman Alivsta</h3>
                        <p class="text-purple-600 font-medium mb-3">Software Engineering</p>
                        {{-- <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Arsitek teknologi handal yang membangun infrastruktur platform Vourista dengan standar enterprise.
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                <i class="fab fa-linkedin text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-white hover:bg-gray-900 transition-colors">
                                <i class="fab fa-github text-sm"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>

                <!-- CMO -->
                <div class="team-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative">
                        <img 
                            src="{{ asset('images/4.png') }}" 
                            alt="CMO Vourista" 
                            class="w-full h-64 object-cover"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="flex items-center space-x-2">
                                {{-- <div class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></div> --}}
                                {{-- <span class="text-sm font-medium">In Meeting</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-navy-800 mb-2">Muhammad Nur Syafii</h3>
                        <p class="text-pink-600 font-medium mb-3">Design Graphic</p>
                        {{-- <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Strategis pemasaran kreatif yang membangun brand awareness Vourista di seluruh Indonesia.
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="w-8 h-8 bg-pink-600 rounded-full flex items-center justify-center text-white hover:bg-pink-700 transition-colors">
                                <i class="fab fa-instagram text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                <i class="fab fa-linkedin text-sm"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>

                <!-- CFO -->
                <div class="team-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative">
                        <img 
                            src="{{ asset('images/3.png') }}" 
                            alt="CFO Vourista" 
                            class="w-full h-64 object-cover"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="flex items-center space-x-2">
                                {{-- <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div> --}}
                                {{-- <span class="text-sm font-medium">Available</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-navy-800 mb-2">Maudy Ari Khofifah</h3>
                        <p class="text-green-600 font-medium mb-3">Design Graphic</p>
                        {{-- <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Ahli keuangan berpengalaman yang mengelola aspek finansial dan investasi strategis perusahaan.
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                <i class="fab fa-linkedin text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>

                <!-- COO -->
                <div class="team-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="500">
                    <div class="relative">
                        <img 
                            src="{{ asset('images/1.png') }}" 
                            alt="COO Vourista" 
                            class="w-full h-64 object-cover"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="flex items-center space-x-2">
                                {{-- <div class="w-3 h-3 bg-red-400 rounded-full animate-pulse"></div> --}}
                                {{-- <span class="text-sm font-medium">Busy</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-navy-800 mb-2">Ismey Mukarromah</h3>
                        <p class="text-orange-600 font-medium mb-3">Marketing</p>
                        {{-- <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Pemimpin operasional yang memastikan seluruh proses bisnis Vourista berjalan dengan efisien dan optimal.
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                <i class="fab fa-linkedin text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-orange-600 rounded-full flex items-center justify-center text-white hover:bg-orange-700 transition-colors">
                                <i class="fab fa-twitter text-sm"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 gradient-bg text-white relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div data-aos="fade-up">
                {{-- <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Bergabunglah dengan Komunitas Vourista
                </h2> --}}
                <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Mari bersama-sama membangun ekosistem kuliner yang lebih baik dan menemukan jajanan terbaik di seluruh Indonesia
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('home') }}" class="btn-primary px-8 py-4 rounded-lg font-semibold transition-all duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-search mr-2"></i>
                        Jelajahi Jajanan
                    </a>
                    {{-- <a href="#" class="bg-white text-navy-700 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-users mr-2"></i>
                        Gabung Komunitas
                    </a> --}}
                </div>
            </div>
        </div>
    </section>
</div>

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

    /* Meaning Cards */
    .meaning-card {
        position: relative;
        overflow: hidden;
    }

    .meaning-card::before {
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

    .meaning-card:hover::before {
        opacity: 1;
    }

    /* Team Cards */
    .team-card {
        position: relative;
        overflow: hidden;
    }

    .team-card::before {
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

    .team-card:hover::before {
        opacity: 1;
    }

    /* Performance Optimizations */
    .floating-shapes,
    .stats-bg-waves,
    .card-bg-animation {
        will-change: transform;
    }

    .shape,
    .wave,
    .bg-circle {
        will-change: transform, opacity;
    }

    /* Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        .floating-shapes,
        .stats-bg-waves,
        .card-bg-animation,
        .grid-pattern,
        .food-icons {
            animation: none;
        }
        
        .shape,
        .wave,
        .bg-circle,
        .food-icon {
            animation: none;
        }
        
        .team-card:hover,
        .meaning-card:hover {
            transform: translateY(-2px) scale(1.01);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .team-card:hover,
        .meaning-card:hover {
            transform: translateY(-3px) scale(1.01);
        }
        
        .hero-title {
            font-size: 2.5rem;
        }
        
        .floating-shapes .shape {
            display: none;
        }
        
        .food-icons .food-icon {
            font-size: 1.5rem;
        }

        .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3.xl\\:grid-cols-5 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
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

    @media (min-width: 768px) {
        .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3.xl\\:grid-cols-5 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (min-width: 1024px) {
        .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3.xl\\:grid-cols-5 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    @media (min-width: 1280px) {
        .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3.xl\\:grid-cols-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr));
        }
    }

    /* Enhanced accessibility */
    .team-card:focus,
    .meaning-card:focus,
    .btn-primary:focus {
        outline: 2px solid var(--navy-400);
        outline-offset: 2px;
    }

    /* High contrast mode support */
    @media (prefers-contrast: high) {
        .gradient-bg {
            background: var(--navy-900);
        }
        
        .team-card,
        .meaning-card {
            border: 2px solid var(--navy-300);
        }
    }
</style>

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
    });

    // Add smooth reveal animation for team cards
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe team cards
    document.querySelectorAll('.team-card, .meaning-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
</script>
@endpush
@endsection