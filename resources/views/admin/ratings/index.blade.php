@extends('layouts.admin')

@section('title', 'Daftar Rating & Ulasan')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-orange-50 to-red-50 py-8">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4 animate-fade-in">
                    📊 Daftar Rating & Ulasan
                </h1>
                <p class="text-gray-600 text-lg">Kelola semua rating dan ulasan jajanan</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-transform duration-300">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Total Rating</p>
                            <p class="text-2xl font-bold text-gray-800 counter" data-target="{{ $totalRatings }}">0</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-transform duration-300">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-1.586l-4.707 4.707A1 1 0 0112 20z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Total Ulasan</p>
                            <p class="text-2xl font-bold text-gray-800 counter" data-target="{{ $totalReviews }}">0</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-transform duration-300">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Rating Rata-rata</p>
                            <p class="text-2xl font-bold text-gray-800">{{ number_format($averageRating, 1) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <form method="GET" action="{{ route('admin.ratings.index') }}" class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <label for="jajan" class="block text-sm font-medium text-gray-700 mb-2">Filter berdasarkan Jajanan</label>
                        <select name="jajan" id="jajan" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                            <option value="">Semua Jajanan</option>
                            @foreach($jajans as $jajan)
                                <option value="{{ $jajan->id }}" {{ request('jajan') == $jajan->id ? 'selected' : '' }}>
                                    {{ $jajan->judul }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Filter berdasarkan Rating</label>
                        <select name="rating" id="rating" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                            <option value="">Semua Rating</option>
                            @for($i = 10; $i >= 1; $i--)
                                <option value="{{ $i }}" {{ request('rating') == $i ? 'selected' : '' }}>
                                    Rating {{ $i }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition-colors duration-300 font-medium">
                            Filter
                        </button>
                        @if(request()->hasAny(['jajan', 'rating']))
                            <a href="{{ route('admin.ratings.index') }}" class="ml-2 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors duration-300">
                                Reset
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <!-- Ratings Table -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">📝 Daftar Rating & Ulasan</h2>
                </div>

                @if($ratings->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 border-b">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jajanan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ulasan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($ratings as $rating)
                                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                @if($rating->jajan->gambar)
                                                    <img src="{{ asset('storage/jajan/'.$rating->jajan->gambar) }}" alt="{{ $rating->jajan->judul }}" class="w-12 h-12 rounded-lg object-cover mr-3">
                                                @else
                                                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mr-3">
                                                        🍪
                                                    </div>
                                                @endif
                                                <div>
                                                    <div class="text-sm font-medium text-gray-900">{{ $rating->jajan->judul }}</div>
                                                    <div class="text-sm text-gray-500">ID: {{ $rating->jajan->id }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex text-yellow-400 mr-2">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= ($rating->nilai / 2))
                                                            ⭐
                                                        @else
                                                            ☆
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="text-sm font-medium bg-orange-100 text-orange-800 px-2 py-1 rounded-full">
                                                    {{ $rating->nilai }}/10
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            @if($rating->ulasan)
                                                <div class="text-sm text-gray-900 max-w-xs truncate" title="{{ $rating->ulasan }}">
                                                    {{ $rating->ulasan }}
                                                </div>
                                            @else
                                                <span class="text-sm text-gray-500 italic">Tidak ada ulasan</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $rating->created_at->format('d M Y') }}
                                            <br>
                                            <span class="text-xs text-gray-400">{{ $rating->created_at->format('H:i') }}</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <form action="{{ route('admin.ratings.destroy', $rating->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus rating ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-4 bg-gray-50 border-t">
                        {{ $ratings->appends(request()->query())->links() }}
                    </div>
                @else
                    <div class="p-8 text-center">
                        <div class="text-6xl mb-4">😴</div>
                        <p class="text-gray-500 text-lg">Belum ada rating yang ditemukan</p>
                        @if(request()->hasAny(['jajan', 'rating']))
                            <a href="{{ route('admin.ratings.index') }}" class="inline-block mt-4 px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition-colors duration-300">
                                Lihat Semua Rating
                            </a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Floating Mascot -->
    {{-- @include('components.mascot') --}}
</div>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
    animation: fade-in 0.6s ease-out;
}

.counter {
    transition: all 0.3s ease;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate counter numbers
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / 50; // Animation duration control
        let current = 0;

        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };

        // Start animation when element is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(counter);
    });
});
</script>
@endsection
