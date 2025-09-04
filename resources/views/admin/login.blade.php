<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login - Vourista</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800 min-h-screen flex items-center justify-center">
    <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl p-8 w-full max-w-md border border-white/20">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-cookie-bite text-white text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-white">Vourista Admin</h1>
            <p class="text-white/80 mt-2">Masuk ke Panel Administrator</p>
        </div>
        
        <!-- Error Messages -->
        @if($errors->any())
            <div class="bg-red-500/20 border border-red-500/30 text-red-100 px-4 py-3 rounded-lg mb-6">
                @foreach($errors->all() as $error)
                    <p><i class="fas fa-exclamation-circle mr-2"></i>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-500/20 border border-green-500/30 text-green-100 px-4 py-3 rounded-lg mb-6">
                <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
            </div>
        @endif
        
        <!-- Login Form -->
        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            
            <div class="mb-6">
                <label for="username" class="block text-white/90 text-sm font-semibold mb-2">
                    <i class="fas fa-user mr-2"></i>Nama Pengguna
                </label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    value="{{ old('username') }}"
                    class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent backdrop-blur"
                    placeholder="Masukkan nama pengguna"
                    required
                >
            </div>
            
            <div class="mb-8">
                <label for="password" class="block text-white/90 text-sm font-semibold mb-2">
                    <i class="fas fa-lock mr-2"></i>Kata Sandi
                </label>
                <div class="relative">
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent backdrop-blur"
                        placeholder="Masukkan kata sandi"
                        required
                    >
                    <button 
                        type="button" 
                        onclick="togglePassword()" 
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white/60 hover:text-white"
                    >
                        <i class="fas fa-eye" id="password-icon"></i>
                    </button>
                </div>
            </div>
            
            <button 
                type="submit" 
                class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-105"
            >
                <i class="fas fa-sign-in-alt mr-2"></i>Masuk
            </button>
        </form>
        
        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-white/80 hover:text-white transition-colors duration-200">
                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Beranda
            </a>
        </div>
    </div>
    
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>