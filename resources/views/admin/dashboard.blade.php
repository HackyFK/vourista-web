@extends('layouts.admin')

@section('title', 'Dashboard Admin - Vourista')

@section('content')
<div class="space-y-8">
    <!-- Welcome Header -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 text-white">
        <h1 class="text-3xl font-bold mb-2">Selamat Datang, Admin!</h1>
        <p class="text-blue-100">Kelola platform Vourista dengan mudah dari dashboard ini.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <i class="fas fa-cookie-bite text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total Jajanan</p>
                    <p class="text-3xl font-bold text-gray-900 counter-animation" data-target="{{ $totalJajans ?? 0 }}">0</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <i class="fas fa-star text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total Rating</p>
                    <p class="text-3xl font-bold text-gray-900 counter-animation" data-target="{{ $totalRatings ?? 0 }}">0</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                    <i class="fas fa-chart-line text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Rata-rata Rating</p>
                    <p class="text-3xl font-bold text-gray-900">{{ number_format($averageRating ?? 0, 1) }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Jajans -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900">Jajanan Terbaru</h2>
                <a href="{{ route('admin.jajan.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                    Lihat Semua <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="space-y-4">
                @forelse($recentJajans as $jajan)
                    <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                        <img
                            src="{{ $jajan->gambar_url ?? 'https://via.placeholder.com/48x48/f59e0b/ffffff?text=J' }}"
                            alt="{{ e($jajan->judul) }}"
                            class="w-12 h-12 object-cover rounded-lg"
                        >
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900">{{ \Illuminate\Support\Str::limit($jajan->judul, 30) }}</h3>
                            <p class="text-sm text-gray-500">{{ $jajan->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="text-right">
                            <div class="text-sm font-medium text-yellow-600">
                                {{ number_format($jajan->average_rating, 1) }}/10
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">Belum ada jajanan terbaru.</p>
                @endforelse
            </div>
        </div>

        <!-- Recent Ratings -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900">Rating Terbaru</h2>
                <a href="{{ route('admin.ratings.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                    Lihat Semua <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="space-y-4">
                @forelse($recentRatings as $rating)
                    <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                            {{ $rating->nilai }}
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900">{{ \Illuminate\Support\Str::limit($rating->jajan->judul, 25) }}</h3>
                            <p class="text-sm text-gray-500">
                                {{ $rating->ulasan ? \Illuminate\Support\Str::limit($rating->ulasan, 40) : 'Tanpa ulasan' }}
                            </p>
                            <p class="text-xs text-gray-400">{{ $rating->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">Belum ada rating terbaru.</p>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Aksi Cepat</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('admin.jajan.create') }}" class="flex items-center justify-center p-4 bg-gradient-to-r from-green-500 to-teal-500 text-white rounded-lg hover:from-green-600 hover:to-teal-600 transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-plus mr-2"></i>
                Tambah Jajanan
            </a>
            <a href="{{ route('admin.jajan.index') }}" class="flex items-center justify-center p-4 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg hover:from-blue-600 hover:to-purple-600 transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-list mr-2"></i>
                Kelola Jajanan
            </a>
            <a href="{{ route('admin.ratings.index') }}" class="flex items-center justify-center p-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-white rounded-lg hover:from-yellow-600 hover:to-orange-600 transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-star mr-2"></i>
                Lihat Rating
            </a>
            <a href="{{ route('home') }}" target="_blank" class="flex items-center justify-center p-4 bg-gradient-to-r from-gray-500 to-gray-600 text-white rounded-lg hover:from-gray-600 hover:to-gray-700 transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-external-link-alt mr-2"></i>
                Lihat Website
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100 || 1;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 20);
        }

        document.querySelectorAll('.counter-animation').forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target')) || 0;
            animateCounter(counter, target);
        });
    });
</script>
@endpush
