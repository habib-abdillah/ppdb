<!-- Header -->
<header class="bg-white shadow py-4 px-4 flex items-center justify-between sticky top-0 z-30">
    <div class="flex items-center space-x-4">
        <!-- Desktop Toggle -->
        <button @click="toggleSidebarCollapse"
            class="hidden md:inline-flex text-gray-600 hover:text-gray-900 transition duration-200">
            <i class="fas fa-angle-double-left" x-show="!isSidebarCollapsed"></i>
            <i class="fas fa-angle-double-right" x-show="isSidebarCollapsed"></i>
        </button>

        <!-- Mobile Toggle -->
        <button @click="openSidebar = true"
            class="inline-flex md:hidden text-gray-600 hover:text-gray-900 text-xl transition duration-200">
            <i class="fas fa-bars"></i>
        </button>

        <h1 class="text-xl font-bold">Dashboard</h1>
    </div>

    <!-- Right Section: User Name + Icon + Dropdown -->
    <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none group">
            <span class="hidden md:inline text-sm font-medium text-gray-700 group-hover:text-black transition">
                {{ Auth::user()->name }}
            </span>
            <i
                class="fas fa-user text-gray-600 text-xl group-hover:text-black transition duration-300 ease-in-out me-3 ms-3"></i>
        </button>

        <!-- Dropdown -->
        <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg ring-1 ring-gray-200 overflow-hidden z-50"
            style="display: none;">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Logout</button>
            </form>
        </div>
    </div>
</header>
