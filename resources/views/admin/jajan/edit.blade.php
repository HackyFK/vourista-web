@extends('layouts.admin')

@section('title', 'Edit Jajanan - Admin Vourista')
@section('page-title', 'Edit Jajanan')

@section('content')
<div class="max-w-4xl">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.jajan.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 transition-colors duration-200">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali ke Daftar Jajanan
        </a>
    </div>
    
    <!-- Form Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-purple-500 p-6">
            <h2 class="text-2xl font-bold text-white">Edit Jajanan</h2>
            <p class="text-blue-100 mt-1">Perbarui informasi jajanan: {{ $jajan->judul }}</p>
        </div>
        
        <div class="p-6">
            <form method="POST" action="{{ route('admin.jajan.update', $jajan) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')
                
                <!-- Title -->
                <div>
                    <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-heading mr-2 text-blue-500"></i>Judul Jajanan
                    </label>
                    <input 
                        type="text" 
                        id="judul" 
                        name="judul" 
                        value="{{ old('judul', $jajan->judul) }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all duration-200 @error('judul') border-red-500 @enderror"
                        placeholder="Masukkan judul jajanan"
                        required
                    >
                    @error('judul')
                        <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Short Description -->
                <div>
                    <label for="deskripsi_singkat" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-align-left mr-2 text-blue-500"></i>Deskripsi Singkat
                    </label>
                    <textarea 
                        id="deskripsi_singkat" 
                        name="deskripsi_singkat" 
                        rows="3"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all duration-200 @error('deskripsi_singkat') border-red-500 @enderror"
                        placeholder="Masukkan deskripsi singkat jajanan"
                        required
                    >{{ old('deskripsi_singkat', $jajan->deskripsi_singkat) }}</textarea>
                    @error('deskripsi_singkat')
                        <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Long Description -->
                 <!-- Long Description -->
                <div>
                    <label for="deskripsi_lengkap" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-file-alt mr-2 text-green-500"></i>Deskripsi Lengkap
                    </label>
                    <textarea 
                        id="deskripsi_lengkap" 
                        name="deskripsi_lengkap" 
                        rows="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent transition-all duration-200 @error('deskripsi_lengkap') border-red-500 @enderror"
                        placeholder="Masukkan deskripsi lengkap jajanan (akan ditampilkan di halaman detail)"
                        required
                    >{{ old('deskripsi_lengkap') }}</textarea>
                    @error('deskripsi_lengkap')
                        <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Price -->
                <div>
                    <label for="harga" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-tag mr-2 text-green-500"></i>Harga
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">Rp</span>
                        </div>
                        <input 
                            type="number" 
                            id="harga" 
                            name="harga" 
                            value="{{ old('harga') }}"
                            min="0"
                            step="100"
                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent transition-all duration-200 @error('harga') border-red-500 @enderror"
                            placeholder="0"
                            required
                        >
                    </div>
                    @error('harga')
                        <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                    @enderror
                </div>
                
                
                <!-- Current Image -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-image mr-2 text-blue-500"></i>Gambar Saat Ini
                    </label>
                    <div class="mb-4">
                        <img src="{{ $jajan->gambar_url }}" alt="{{ $jajan->judul }}" class="w-32 h-32 object-cover rounded-lg shadow-md">
                    </div>
                </div>
                
                <!-- New Image Upload -->
                <div>
                    <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-upload mr-2 text-blue-500"></i>Ganti Gambar (Opsional)
                    </label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors duration-200 @error('gambar') border-red-500 @enderror">
                        <input 
                            type="file" 
                            id="gambar" 
                            name="gambar" 
                            accept="image/*"
                            class="hidden"
                            onchange="previewImage(this)"
                        >
                        <div id="upload-area" onclick="document.getElementById('gambar').click();" class="cursor-pointer">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600 mb-1">Klik untuk memilih gambar baru</p>
                            <p class="text-sm text-gray-500">Format: JPG, PNG, GIF (Maks. 2MB)</p>
                        </div>
                        <div id="preview-area" class="hidden">
                            <img id="preview-image" class="max-w-xs mx-auto rounded-lg shadow-md">
                            <p class="text-sm text-blue-600 mt-2">Gambar baru berhasil dipilih</p>
                            <button type="button" onclick="removeImage()" class="text-red-500 hover:text-red-700 text-sm mt-1">
                                <i class="fas fa-times mr-1"></i>Hapus
                            </button>
                        </div>
                    </div>
                    @error('gambar')
                        <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Submit Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                    <button 
                        type="submit" 
                        class="flex-1 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-105"
                    >
                        <i class="fas fa-save mr-2"></i>Perbarui Jajanan
                    </button>
                    <a 
                        href="{{ route('admin.jajan.index') }}" 
                        class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-3 px-6 rounded-lg text-center transition-colors duration-200"
                    >
                        <i class="fas fa-times mr-2"></i>Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                document.getElementById('preview-image').src = e.target.result;
                document.getElementById('upload-area').classList.add('hidden');
                document.getElementById('preview-area').classList.remove('hidden');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function removeImage() {
        document.getElementById('gambar').value = '';
        document.getElementById('upload-area').classList.remove('hidden');
        document.getElementById('preview-area').classList.add('hidden');
    }
</script>
@endsection