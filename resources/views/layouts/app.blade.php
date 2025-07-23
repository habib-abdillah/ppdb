<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <style>
        .section-card {
            transition: all 0.3s ease;
        }

        .section-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
        }
    </style>
</head>
{{-- transition-all duration-300 relative bg-gray-100 overflow-x-hidden --}}

<body class="relative bg-gray-100" :class="isSidebarCollapsed ? 'md:pl-20' : 'md:pl-64'">
    <div x-data="sidebarHandler()" x-init="init()" @resize.window="checkScreen()"
        class="flex h-screen overflow-hidden relative">
        <!-- Overlay Mobile -->
        <div x-show="openSidebar && window.innerWidth < 768" x-cloak class="fixed inset-0 bg-black/50 z-40 md:hidden"
            @click="openSidebar = false">
        </div>
        <!-- Sidebar -->
        @if (Auth::check() && Auth::user()->role === 'admin')
            @include('layouts.partials.sidebar-admin')
        @elseif(Auth::check() && Auth::user()->role === 'panitia')
            @include('layouts.partials.sidebar-panitia')
        @elseif(Auth::check() && Auth::user()->role === 'siswa')
            @include('layouts.partials.sidebar-siswa')
        @else
            <div class="w-64 bg-red-100 p-4 text-red-700">Role tidak dikenali.</div>
        @endif

        <!-- Konten Utama -->
        <div class="flex-1 flex flex-col transition-all duration-300 z-0">
            <!-- Header mobile -->
            @include('layouts.partials.header')
            <!-- Konten -->
            <main class="flex-1 overflow-y-auto">
                <div class="p-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script>
        function toggleSubmenu(id) {
            const submenu = document.getElementById(id);
            const icon = document.getElementById("icon-" + id);
            submenu.classList.toggle("hidden");
            icon.classList.toggle("rotate-180");
        }
    </script>

</body>

</html>
