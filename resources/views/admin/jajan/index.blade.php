@extends('layouts.admin')

@section('title', 'Kelola Jajanan - Admin Vourista')
@section('page-title', 'Kelola Jajanan')

@section('content')
<div class="space-y-6">
    <!-- Header with Add Button -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Daftar Jajanan</h2>
            <p class="text-gray-600">Kelola semua jajanan yang tersedia di platform</p>
        </div>
        <a href="{{ route('admin.jajan.create') }}" class="bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-200 transform hover:scale-105">
            <i class="fas fa-plus mr-2"></i>Tambah Jajanan
        </a>
    </div>
    
    <!-- Jajan Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Gambar</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Judul</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Deskripsi</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Rating</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Total Ulasan</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($jajans as $jajan)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img 
                                    src="{{ $jajan->gambar_url }}" 
                                    alt="{{ $jajan->judul }}"
                                    class="w-16 h-16 object-cover rounded-lg shadow-sm"
                                    onerror="this.src='https://via.placeholder.com/64x64/f59e0b/ffffff?text=J'"
                                >
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-semibold text-gray-900">{{ $jajan->judul }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-600 max-w-xs">
                                    {{ Str::limit($jajan->deskripsi_singkat, 60) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ number_format($jajan->ratings_avg_nilai ?? 0, 1) }}/10
                                    </div>
                                    <div class="ml-2 flex">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star text-xs {{ $i <= (($jajan->ratings_avg_nilai ?? 0) / 2) ? 'text-yellow-400' : 'text-gray-300' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ $jajan->ratings_count ?? 0 }} ulasan
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $jajan->created_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('jajan.show', $jajan) }}" target="_blank" class="text-blue-600 hover:text-blue-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.jajan.edit', $jajan) }}" class="text-yellow-600 hover:text-yellow-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button onclick="resetRating({{ $jajan->id }})" class="text-orange-600 hover:text-orange-900" title="Reset Rating">
                                        <i class="fas fa-undo"></i>
                                    </button>
                                    <button onclick="deleteJajan({{ $jajan->id }})" class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-cookie-bite text-4xl mb-4"></i>
                                    <p class="text-lg font-medium">Belum ada jajanan</p>
                                    <p>Mulai tambahkan jajanan pertama Anda!</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($jajans->hasPages())
            <div class="bg-white px-6 py-4 border-t border-gray-200">
                {{ $jajans->links() }}
            </div>
        @endif
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-xl p-6 max-w-md mx-4">
        <div class="text-center">
            <i class="fas fa-exclamation-triangle text-red-500 text-4xl mb-4"></i>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Konfirmasi Hapus</h3>
            <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus jajanan ini? Tindakan ini tidak dapat dibatalkan.</p>
            
            <div class="flex space-x-4">
                <button onclick="closeDeleteModal()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-lg transition-colors duration-200">
                    Batal
                </button>
                <form id="deleteForm" method="POST" class="flex-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition-colors duration-200">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Reset Rating Modal -->
<div id="resetModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-xl p-6 max-w-md mx-4">
        <div class="text-center">
            <i class="fas fa-undo text-orange-500 text-4xl mb-4"></i>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Reset Rating</h3>
            <p class="text-gray-600 mb-6">Apakah Anda yakin ingin mereset semua rating untuk jajanan ini?</p>
            
            <div class="flex space-x-4">
                <button onclick="closeResetModal()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-lg transition-colors duration-200">
                    Batal
                </button>
                <form id="resetForm" method="POST" class="flex-1">
                    @csrf
                    <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded-lg transition-colors duration-200">
                        Reset
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteJajan(id) {
        document.getElementById('deleteForm').action = `/admin/jajan/${id}`;
        document.getElementById('deleteModal').classList.remove('hidden');
    }
    
    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }
    
    function resetRating(id) {
        document.getElementById('resetForm').action = `/admin/jajan/${id}/reset-rating`;
        document.getElementById('resetModal').classList.remove('hidden');
    }
    
    function closeResetModal() {
        document.getElementById('resetModal').classList.add('hidden');
    }
</script>
@endsection