<!-- Header (gabungan mobile & desktop) -->
<header class="bg-white shadow py-4 px-4 flex items-center justify-between sticky top-0 z-30">
    <div class="flex items-center space-x-4">
        <!-- Desktop Toggle -->
        <button @click="toggleSidebarCollapse" class="hidden md:inline-flex text-gray-600 hover:text-gray-900">
            <i class="fas fa-angle-double-left" x-show="!isSidebarCollapsed"></i>
            <i class="fas fa-angle-double-right" x-show="isSidebarCollapsed"></i>
        </button>

        <!-- Mobile Toggle -->
        <button @click="openSidebar = true" class="inline-flex md:hidden text-gray-600 hover:text-gray-900 text-xl">
            <i class="fas fa-bars"></i>
        </button>

        <h1 class="text-xl font-bold">PPDB Dashboard</h1>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-red-500 hover:underline">Logout</button>
    </form>
</header>
