<nav class="bg-white shadow-lg fixed w-full top-0 z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
<div class="flex items-center">
    <a href="{{ route('home') }}" class="flex items-center space-x-2">
        <img src="{{ asset('images/logo.jpg') }}" alt="Vourista Logo" 
             class="w-10 h-10 object-contain rounded-full">
        <span class="text-2xl font-bold text-gray-900">Vourista</span>
    </a>
</div>

            
          <!-- Navigation Links -->
<div class="hidden md:flex items-center space-x-8">
    <a href="{{ route('home') }}" 
       class="relative text-gray-700 font-medium px-3 py-2 transition-all duration-300 ease-in-out 
              hover:text-white hover:bg-[#1e3a8a] rounded-lg">
        <i class="fas fa-home mr-2"></i>Beranda
    </a>
    <a href="{{ route('about') }}" 
       class="relative text-gray-700 font-medium px-3 py-2 transition-all duration-300 ease-in-out 
              hover:text-white hover:bg-[#1e3a8a] rounded-lg">
        <i class="fas fa-info-circle mr-2"></i>Tentang
    </a>
    <a href="{{ route('jajan.index') }}" 
       class="relative text-gray-700 font-medium px-3 py-2 transition-all duration-300 ease-in-out 
              hover:text-white hover:bg-[#1e3a8a] rounded-lg">
        <i class="fas fa-solid fa-bars mr-2"></i>Menu
    </a>

    {{-- <a href="{{ route('partner') }}" 
       class="relative text-gray-700 font-medium px-3 py-2 transition-all duration-300 ease-in-out 
              hover:text-white hover:bg-[#1e3a8a] rounded-lg">
        <i class="fas fa-briefcase mr-2"></i>Partner
    </a> --}}
    <a href="{{ route('pesanan.index') }}" 
       class="relative text-gray-700 font-medium px-3 py-2 transition-all duration-300 ease-in-out 
              hover:text-white hover:bg-[#1e3a8a] rounded-lg">
        <i class="fas fas fa-shopping-basket mr-2"></i>Pesan
    </a>
    <a href="{{ route('contact') }}" 
       class="relative text-gray-700 font-medium px-3 py-2 transition-all duration-300 ease-in-out 
              hover:text-white hover:bg-[#1e3a8a] rounded-lg">
        <i class="fas fa-envelope mr-2"></i>Kontak
    </a>
</div>

<!-- Mobile Menu Button -->
<div class="md:hidden">
    <button onclick="toggleMobileMenu()" 
            class="text-gray-700 px-3 py-2 rounded-lg transition-all duration-300 ease-in-out 
                   hover:text-white hover:bg-[#1e3a8a]">
        <i class="fas fa-bars text-xl"></i>
    </button>
</div>
</div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden pb-4">
    <div class="flex flex-col space-y-2">
        <a href="{{ route('home') }}" 
           class="text-gray-700 px-3 py-2 rounded-lg transition-all duration-300 ease-in-out 
                  hover:text-white hover:bg-[#1e3a8a]">
            <i class="fas fa-home mr-2"></i>Beranda
        </a>
        <a href="#tentang" 
           class="text-gray-700 px-3 py-2 rounded-lg transition-all duration-300 ease-in-out 
                  hover:text-white hover:bg-[#1e3a8a]">
            <i class="fas fa-info-circle mr-2"></i>Tentang
        </a>
        <a href="#menu" 
           class="text-gray-700 px-3 py-2 rounded-lg transition-all duration-300 ease-in-out 
                  hover:text-white hover:bg-[#1e3a8a]">
            <i class="fas fa-utensils mr-2"></i>Menu
        </a>
        <a href="#karir" 
           class="text-gray-700 px-3 py-2 rounded-lg transition-all duration-300 ease-in-out 
                  hover:text-white hover:bg-[#1e3a8a]">
            <i class="fas fa-briefcase mr-2"></i>Karir
        </a>
        <a href="#kontak" 
           class="text-gray-700 px-3 py-2 rounded-lg transition-all duration-300 ease-in-out 
                  hover:text-white hover:bg-[#1e3a8a]">
            <i class="fas fa-envelope mr-2"></i>Kontak
        </a>
    </div>
</div>


    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }
</script>