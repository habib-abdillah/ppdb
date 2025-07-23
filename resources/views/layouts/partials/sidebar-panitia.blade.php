<!-- Sidebar Panitia -->
<aside id="sidebar" x-show="openSidebar || window.innerWidth >= 768" x-cloak @mouseenter="mouseEnterSidebar"
    @mouseleave="mouseLeaveSidebar"
    :class="[
        openSidebar ? 'translate-x-0' : '-translate-x-full',
        isSidebarCollapsed ? 'w-20' : 'w-64'
    ]"
    class="fixed md:static top-0 left-0 h-full bg-white z-50 transition-all duration-300 ease-in-out shadow-lg transform md:translate-x-0 overflow-y-auto">

    <div class="p-4">
        <!-- Logo & Judul -->
        <div class="flex items-center space-x-3 mb-6">
            <img src="https://smkalfalah2nagreg.sch.id/wp-content/uploads/2025/02/logo-begroun-putih-768x674.png"
                class="h-10 w-10 object-cover rounded" alt="Logo" />
            <span x-show="!isSidebarCollapsed" x-transition:enter="transition-all duration-200 ease-out"
                x-transition:enter-start="opacity-0 translate-x-2" x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition-all duration-150 ease-in"
                x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-2"
                class="ms-1 block whitespace-nowrap overflow-hidden text-ellipsis text-xl font-semibold text-gray-800">
                SMKS AL-FALAH</span>
        </div>

        <!-- Navigasi -->
        <nav class="space-y-2">
            <!-- Beranda -->
            <div>
                <a href="/panitia" @click="openSidebar = false"
                    class="flex items-center px-3 py-2 rounded hover:bg-gray-100 transition-all duration-200
                    {{ request()->is('panitia') ? 'bg-gray-200 text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">

                    <i class="fas fa-home w-5 text-lg"></i>
                    <span class="ml-3 transition-all duration-300 whitespace-nowrap overflow-hidden text-ellipsis"
                        :class="isSidebarCollapsed ? 'opacity-0 invisible w-0' : 'opacity-100 visible w-auto'">
                        Beranda
                    </span>
                </a>
            </div>

            <!-- Pembayaran -->
            <div>
                <button @click="toggleSubmenu('pembayaran-submenu')"
                    class="flex items-center justify-between w-full px-3 py-2 rounded hover:bg-gray-100 transition-all duration-200
                    {{ request()->is('panitia/pembayaran*') ? 'bg-gray-200 text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">
                    <div class="flex items-center">
                        <i class="fas fa-money-check w-5 text-lg"></i>
                        <span class="ml-3 transition-all duration-300 whitespace-nowrap overflow-hidden text-ellipsis"
                            :class="isSidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">
                            Pembayaran
                        </span>
                    </div>
                    <i x-show="!isSidebarCollapsed" class="fas fa-chevron-down transition-transform duration-300"
                        id="icon-pembayaran-submenu"></i>
                </button>

                <ul id="pembayaran-submenu" class="mt-2 ml-8 space-y-1"
                    x-show="!isSidebarCollapsed && activeSubmenu === 'pembayaran-submenu'" x-transition x-cloak>
                    <li>
                        <a href="/panitia/pembayaran/tpa" @click="openSidebar = false" @click="menuClicked"
                            :class="isSidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'"
                            class="ml-3 block px-2 py-1 rounded transition-all duration-300 whitespace-nowrap overflow-hidden text-ellipsis hover:bg-gray-100
                            {{ request()->is('panitia/pembayaran/tpa') ? 'text-blue-600 font-semibold bg-gray-200' : 'text-gray-600 hover:text-blue-600' }}">
                            Verifikasi TPA
                        </a>
                    </li>
                    <li>
                        <a href="/panitia/pembayaran/daftar-ulang" @click="openSidebar = false" @click="menuClicked"
                            :class="isSidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'"
                            class="ml-3 block px-2 py-1 rounded transition-all duration-300 whitespace-nowrap overflow-hidden text-ellipsis hover:bg-gray-100
                            {{ request()->is('panitia/pembayaran/daftar-ulang') ? 'text-blue-600 font-semibold bg-gray-200' : 'text-gray-600 hover:text-blue-600' }}">
                            Verifikasi Daftar Ulang
                        </a>
                    </li>
                </ul>
            </div>

            <!-- TPA -->
            <div>
                <a href="/panitia/tpa" @click="openSidebar = false"
                    class="flex items-center px-3 py-2 rounded hover:bg-gray-100 transition-all duration-200
                    {{ request()->is('panitia/tpa') ? 'bg-gray-200 text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">
                    <i class="fas fa-file-alt w-5 text-lg"></i>
                    <span class="ml-3 transition-all duration-300 whitespace-nowrap overflow-hidden text-ellipsis"
                        :class="isSidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">
                        TPA
                    </span>
                </a>
            </div>

            <!-- Verifikasi Berkas Daftar Ulang -->
            <div>
                <a href="/panitia/verifikasi-berkas" @click="openSidebar = false"
                    class="flex items-center px-3 py-2 rounded hover:bg-gray-100 transition-all duration-200
        {{ request()->is('panitia/verifikasi-berkas') ? 'bg-gray-200 text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">
                    <i class="fas fa-check-circle w-5 text-lg"></i>
                    <span class="ml-3 transition-all duration-300 whitespace-nowrap overflow-hidden text-ellipsis"
                        :class="isSidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">
                        Daftar Ulang
                    </span>
                </a>
            </div>


            <!-- Pengumuman -->
            <div>
                <a href="/panitia/pengumuman" @click="openSidebar = false"
                    class="flex items-center px-3 py-2 rounded hover:bg-gray-100 transition-all duration-200
                    {{ request()->is('panitia/pengumuman') ? 'bg-gray-200 text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">
                    <i class="fas fa-bullhorn w-5 text-lg"></i>
                    <span class="ml-3 transition-all duration-300 whitespace-nowrap overflow-hidden text-ellipsis"
                        :class="isSidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">
                        Pengumuman
                    </span>
                </a>
            </div>

            <!-- Rekomendasi Bantuan -->
            <div>
                <a href="/panitia/rekomendasi-bantuan" @click="openSidebar = false"
                    class="flex items-center px-3 py-2 rounded hover:bg-gray-100 transition-all duration-200
                    {{ request()->is('panitia/rekomendasi-bantuan') ? 'bg-gray-200 text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">
                    <i class="fas fa-hands-helping w-5 text-lg"></i>
                    <span class="ml-3 transition-all duration-300 whitespace-nowrap overflow-hidden text-ellipsis"
                        :class="isSidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">
                        Rekomendasi Bantuan
                    </span>
                </a>
            </div>

        </nav>
    </div>
</aside>
