<aside x-show="openSidebar || window.innerWidth >= 768" x-cloak
    :class="[
        openSidebar ? 'translate-x-0' : '-translate-x-full',
        isSidebarCollapsed ? 'w-20' : 'w-64'
    ]"
    class="fixed md:static top-0 left-0 h-full bg-white z-50 transition-all duration-300 shadow-lg transform md:translate-x-0 overflow-y-auto">

    <div class="p-4">
        <!-- Logo & Judul -->
        <div class="flex items-center space-x-3 mb-6">
            <img src="https://smkalfalah2nagreg.sch.id/wp-content/uploads/2025/02/logo-begroun-putih-768x674.png"
                class="h-10 w-10 object-cover rounded" alt="Logo" />
            <span x-show="!isSidebarCollapsed" class="text-xl font-semibold text-gray-800">PPDB Panel</span>
        </div>

        <!-- Navigasi -->
        <nav class="space-y-2">
            <a href="/siswa" @click="openSidebar = false"
                class="flex items-center gap-3 text-gray-700 hover:text-blue-600 px-2 py-1 rounded hover:bg-gray-100">
                <i class="fas fa-home w-5"></i>
                <span x-show="!isSidebarCollapsed">Beranda</span>
            </a>

            <!-- Pembayaran -->
            <div>
                <button onclick="toggleSubmenu('pembayaran-submenu')"
                    class="flex items-center justify-between w-full text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded px-2 py-1">
                    <div class="flex items-center">
                        <i class="fas fa-money-check w-5 ms-3"></i>
                        <span x-show="!isSidebarCollapsed" class="ms-3">Pembayaran</span>
                    </div>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="icon-pembayaran-submenu"></i>
                </button>
                <ul id="pembayaran-submenu" class="mt-2 ml-8 space-y-1 hidden">
                    <li><a href="/siswa/pembayaran/tpa" @click="openSidebar = false"
                            class="block text-gray-600 hover:text-blue-600 hover:bg-gray-100 rounded px-2 py-1">TPA</a>
                    </li>
                    <li><a href="/siswa/pembayaran/daftar-ulang"
                            class="block text-gray-600 hover:text-blue-600 hover:bg-gray-100 rounded px-2 py-1">Daftar
                            Ulang</a></li>
                </ul>
            </div>

            <!-- TPA -->
            <div>
                <button onclick="toggleSubmenu('tpa-submenu')"
                    class="flex items-center justify-between w-full text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded px-2 py-1">
                    <div class="flex items-center">
                        <i class="fas fa-file-alt w-5 ms-3"></i>
                        <span x-show="!isSidebarCollapsed" class="ms-3">TPA</span>
                    </div>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="icon-tpa-submenu"></i>
                </button>
                <ul id="tpa-submenu" class="mt-2 ml-8 space-y-1 hidden">
                    <li><a href="/siswa/tpa/informasi" @click="openSidebar = false"
                            class="block text-gray-600 hover:text-blue-600 hover:bg-gray-100 rounded px-2 py-1">Informasi
                            TPA</a>
                    </li>
                    <li><a href="/siswa/tpa/tracking" @click="openSidebar = false"
                            class="block text-gray-600 hover:text-blue-600 hover:bg-gray-100 rounded px-2 py-1">Tracking
                            TPA</a>
                    </li>
                </ul>
            </div>

            <!-- Daftar Ulang -->
            <div>
                <button onclick="toggleSubmenu('daftarulang-submenu')"
                    class="flex items-center justify-between w-full text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded px-2 py-1">
                    <div class="flex items-center">
                        <i class="fas fa-undo-alt w-5 ms-3"></i>
                        <span x-show="!isSidebarCollapsed" class="ms-3">Daftar Ulang</span>
                    </div>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="icon-daftarulang-submenu"></i>
                </button>
                <ul id="daftarulang-submenu" class="mt-2 ml-8 space-y-1 hidden">
                    <li><a href="/siswa/daftar-ulang" @click="openSidebar = false"
                            class="block text-gray-600 hover:text-blue-600 hover:bg-gray-100 rounded px-2 py-1">Kelola
                            Data</a></li>
                </ul>
            </div>
        </nav>
</aside>
