@extends('layouts.app')

@section('title', 'Vourista - Bergabung Sebagai Mitra')

@section('content')
<div class="pt-16">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-navy-800 to-navy-700 text-white py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-8">
           <br>
                <span class="text-blue-500">Mitra Vourista</span>
            </h1>
            <p class="text-xl md:text-2xl mb-12 text-blue-500 leading-relaxed">
                Kembangkan bisnis jajanan Anda bersama platform rating terpercaya.<br>
                Dapatkan akses ke ribuan pelanggan potensial secara gratis!
            </p>
            
            <a 
                href="{{ route('contact') }}" 
                class="bg-blue-500 hover:bg-blue-600 text-white px-12 py-4 rounded-lg font-semibold text-xl transition-colors duration-200 inline-flex items-center shadow-lg"
            >
                <i class="fas fa-handshake mr-3"></i>
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>

    <!-- Simple Benefits -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-6">
                    Mengapa Bergabung dengan Kami?
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4">Jangkauan Luas</h3>
                    <p class="text-gray-600">Ribuan pengguna aktif siap menemukan dan mencoba produk jajanan Anda</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4">Tingkatkan Penjualan</h3>
                    <p class="text-gray-600">Platform kami terbukti membantu mitra meningkatkan visibilitas dan penjualan</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-star text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-800 mb-4">Reputasi Terpercaya</h3>
                    <p class="text-gray-600">Bangun kredibilitas bisnis melalui sistem rating dan review yang fair</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-navy-800 mb-6">
                Siap Mengembangkan Bisnis Anda?
            </h2>
            <p class="text-xl text-gray-600 mb-12 leading-relaxed">
                Jangan lewatkan kesempatan untuk bergabung dengan komunitas UMKV sukses lainnya.<br>
                Hubungi tim kami untuk informasi lebih lanjut dan mulai perjalanan bisnis yang lebih baik!
            </p>

            <a 
                href="{{ route('contact') }}" 
                class="bg-navy-800 hover:bg-navy-700 text-white px-12 py-4 rounded-lg font-semibold text-xl transition-colors duration-200 inline-flex items-center shadow-lg"
            >
                <i class="fas fa-envelope mr-3"></i>
                Kontak Kami
            </a>

            <div class="mt-8 text-sm text-gray-500">
                <i class="fas fa-shield-alt mr-2"></i>
               Dukungan Penuh
            </div>
        </div>
    </section>
</div>

@push('styles')
<style>
    /* Color Variables */
    :root {
        --navy-700: #3730a3;
        --navy-800: #1e1b4b;
    }

    .text-navy-800 { color: var(--navy-800); }
    .bg-navy-800 { background-color: var(--navy-800); }
    .bg-navy-700 { background-color: var(--navy-700); }
    .hover\:bg-navy-700:hover { background-color: var(--navy-700); }
    
    .transition-colors {
        transition-property: color, background-color, border-color;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 200ms;
    }

    .shadow-lg {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
</style>
@endpush
@endsection