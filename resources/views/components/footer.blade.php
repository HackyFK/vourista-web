<footer class="bg-gray-900 text-white mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo & Description -->
            <div class="col-span-2">
                <div class="flex items-center space-x-2 mb-4">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Vourista Logo" 
                         class="w-10 h-10 object-contain rounded-full">
                    <span class="text-2xl font-bold">Vourista</span>
                </div>
                <p class="text-gray-300 mb-4">
                    Platform terpercaya untuk memberikan rating dan ulasan jajanan favorit Anda.
                    Temukan jajanan terbaik berdasarkan review dari komunitas.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/vour.ista?igsh=aDl5ajJvMTZpendh" class="text-gray-300 hover:text-[#1e3a8a] transition-colors duration-300 ease-in-out">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="https://www.tiktok.com/@vourista?_t=ZS-8zR3QufJici&_r=1" class="text-gray-300 hover:text-[#1e3a8a] transition-colors duration-300 ease-in-out">
                        <i class="fab fa-tiktok text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-[#1e3a8a] transition-colors duration-300 ease-in-out">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-[#1e3a8a] transition-colors duration-300 ease-in-out">Tentang Kami</a></li>
                    <li><a href="{{ route('menu') }}" class="text-gray-300 hover:text-[#1e3a8a] transition-colors duration-300 ease-in-out">Menu</a></li>
                    <li><a href="{{ route('partner') }}" class="text-gray-300 hover:text-[#1e3a8a] transition-colors duration-300 ease-in-out">Partner</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-[#1e3a8a] transition-colors duration-300 ease-in-out">Kontak</a></li>
                  
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                <div class="space-y-2">
                    <p class="text-gray-300"><i class="fas fa-envelope mr-2"></i>vourista@gmail.com</p>
                    <p class="text-gray-300"><i class="fas fa-phone mr-2"></i>+62 895-3296-68423</p>
                    <p class="text-gray-300"><i class="fas fa-map-marker-alt mr-2"></i>Banjarnegara, Indonesia</p>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} Vourista. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>
