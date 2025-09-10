<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard - Vourista')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .sidebar-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .sidebar-hidden {
            transform: translateX(-100%);
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 50;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="sidebar bg-gray-900 text-white w-64 sidebar-transition">
            <div class="p-6">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Vourista Logo"
                            class="w-10 h-10 object-contain rounded-full">
                        <span class="text-2xl font-bold text-white-900">Admin</span>
                    </a>
                    <br>
                </div>
                 <br>

                <!-- Navigation -->
                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800' : '' }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>

                    <div class="py-2">
                        <div class="text-gray-400 text-sm font-semibold uppercase tracking-wider mb-2">Manajemen</div>

                        <a href="{{ route('admin.jajan.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200 {{ request()->routeIs('admin.jajan.*') ? 'bg-gray-800' : '' }}">
                            <i class="fas fa-cookie-bite"></i>
                            <span>Jajanan</span>
                        </a>

                        <a href="{{ route('admin.ratings.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200 {{ request()->routeIs('admin.ratings.*') ? 'bg-gray-800' : '' }}">
                            <i class="fas fa-star"></i>
                            <span>Rating & Ulasan</span>
                        </a>
                        <a href="{{ route('admin.pesanan.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200 {{ request()->routeIs('admin.pesanan.*') ? 'bg-gray-800' : '' }}">
                            <i class="fas fa-chart-line"></i>
                            <span>Laporan</span>
                        </a>
                    </div>

                    <div class="py-2">
                        <div class="text-gray-400 text-sm font-semibold uppercase tracking-wider mb-2">Lainnya</div>

                        <a href="{{ route('home') }}" target="_blank" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Lihat Website</span>
                        </a>

                        <form method="POST" action="{{ route('admin.logout') }}" class="mt-2">
                            @csrf
                            <button type="submit" class="w-full flex items-center space-x-3 p-3 rounded-lg hover:bg-red-700 transition-colors duration-200 text-left">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Keluar</span>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-6 py-4">
                    <!-- Mobile Menu Button -->
                    <button onclick="toggleSidebar()" class="md:hidden text-gray-600 hover:text-gray-900">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <!-- Page Title -->
                    <h1 class="text-2xl font-bold text-gray-900">@yield('page-title', 'Dashboard')</h1>

                    <!-- User Info -->
                    <div class="flex items-center space-x-4">
                        <div class="hidden md:block text-right">
                            <p class="text-sm font-medium text-gray-900">Administrator</p>
                            <p class="text-xs text-gray-500">{{ date('d M Y, H:i') }}</p>
                        </div>
                        <div class="w-8 h-8 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                            A
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 alert-auto-hide">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 alert-auto-hide">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-circle mr-2"></i>
                            <span>{{ session('error') }}</span>
                        </div>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div id="sidebar-overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" onclick="closeSidebar()"></div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            if (sidebar.classList.contains('sidebar-hidden')) {
                sidebar.classList.remove('sidebar-hidden');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('sidebar-hidden');
                overlay.classList.add('hidden');
            }
        }

        function closeSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            sidebar.classList.add('sidebar-hidden');
            overlay.classList.add('hidden');
        }

        // Auto-hide alerts
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-auto-hide');
            alerts.forEach(alert => {
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-20px)';
                setTimeout(() => alert.remove(), 300);
            });
        }, 5000);

        // Initialize sidebar state on mobile
        if (window.innerWidth < 768) {
            document.getElementById('sidebar').classList.add('sidebar-hidden');
        }
    </script>

    @stack('scripts')
</body>
</html>
