<!-- Header/Navbar -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e4b3fed8-e60f-49b4-981f-df0f75f87376.png"
                alt="Logo SMKS Al-Falah Nagreg dengan tulisan Arab dan grafis masjid" class="h-12">
        </div>
        <div class="flex items-center">
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-blue-800 font-medium hover:text-yellow-600">Beranda</a>
                <a href="#about" class="text-gray-700 hover:text-blue-800">Profil</a>
                <a href="#program" class="text-gray-700 hover:text-blue-800">Program</a>
                <a href="#jurusan" class="text-gray-700 hover:text-blue-800">Jurusan</a>
                <a href="#fasilitas" class="text-gray-700 hover:text-blue-800">Fasilitas</a>
                <a href="#ppdb" class="text-gray-700 hover:text-blue-800">PPDB</a>
            </div>
            <a href="{{ route('login') }}"
                class="hidden md:inline-block bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-full ml-4 transition duration-300">Login</a>
            <div class="md:hidden ml-2">
                <button class="mobile-menu-button outline-none">
                    <i class="fas fa-bars text-gray-700 text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="mobile-menu hidden md:hidden bg-white w-full px-6 py-3 border-t">
        <a href="#home" class="block py-2 text-blue-800 font-medium">Beranda</a>
        <a href="#about" class="block py-2 text-gray-700">Profil</a>
        <a href="#program" class="block py-2 text-gray-700">Program</a>
        <a href="#jurusan" class="block py-2 text-gray-700">Jurusan</a>
        <a href="#fasilitas" class="block py-2 text-gray-700">Fasilitas</a>
        <a href="#ppdb" class="block py-2 text-gray-700">PPDB</a>
        <a href="{{ route('login') }}"
            class="block mt-4 bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-full text-center transition duration-300">Login</a>
    </div>
</nav>
