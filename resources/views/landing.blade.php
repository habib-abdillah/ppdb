<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMKS AL-Falah Nagreg | Pendidikan Berbasis Pesantren</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .arabic-text {
            font-family: 'Amiri', serif;
            font-size: 1.5rem;
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(1, 50, 32, 0.9) 0%, rgba(1, 50, 32, 0.7) 100%), url('https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d4992dba-f080-4ce4-a6c9-4f53f56e005d.png') no-repeat center center;
            background-size: cover;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -35px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #01493b;
        }
    </style>
</head>

<body class="bg-gray-50">
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

    <!-- Hero Section -->
    <section id="home" class="hero-gradient min-h-screen flex items-center text-white py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">Bergabunglah Dengan <span
                            class="text-yellow-400">Generasi Unggulan</span></h1>
                    <p class="text-xl mb-8 leading-relaxed">SMKS AL-Falah Nagreg mengintegrasikan pendidikan vokasi
                        dengan nilai-nilai Islami melalui program tahfidz, tilawah dan kajian kitab kuning.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#ppdb"
                            class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">Daftar
                            Sekarang</a>
                        <a href="#jurusan"
                            class="border-2 border-white hover:bg-white hover:text-blue-900 font-bold py-3 px-8 rounded-full transition duration-300">Explore
                            Jurusan</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/af537541-893d-406b-bd32-5ea55e5f1b89.png"
                        alt="Siswa SMK Al-Falah sedang belajar di lab komputer dan membaca Al-Qur'an di taman sekolah"
                        class="rounded-lg shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="bg-yellow-50 py-16">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <p class="arabic-text text-3xl mb-6">"طَلَبُ الْعِلْمِ فَرِيضَةٌ عَلَى كُلِّ مُسْلِمٍ"</p>
                <p class="text-xl text-gray-700">"Menuntut ilmu wajib bagi setiap muslim" (HR. Ibnu Majah)</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Profil SMKS Al-Falah Nagreg</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>

            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f07c3754-9657-4453-8588-5ed2d823d01b.png"
                        alt="Gedung sekolah SMK Al-Falah dengan taman dan fasilitas modern"
                        class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h3 class="text-2xl font-bold text-blue-800 mb-6">Visi & Misi</h3>
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-blue-700 mb-2">Visi</h4>
                        <p class="text-gray-700">"Membentuk generasi muda yang unggul dalam bidang teknologi dan desain,
                            berkarakter Islami, berakhlak mulia, dan menguasai Al-Qur'an serta kitab kuning."</p>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-blue-700 mb-2">Misi</h4>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>Menyelenggarakan pendidikan vokasi berkualitas dengan kurikulum berbasis kompetensi</li>
                            <li>Mengintegrasikan nilai-nilai Islam dalam seluruh aspek pembelajaran</li>
                            <li>Mengembangkan program tahfidz dan tilawah Al-Qur'an</li>
                            <li>Membekali siswa dengan keterampilan kitab kuning</li>
                            <li>Menyediakan lingkungan belajar yang kondusif dan islami</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div
                    class="bg-blue-800 text-white p-8 rounded-xl shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-4xl text-yellow-400 mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Program Tahfidz</h4>
                    <p>Target hafalan minimal 3 juz dengan metode yang efektif dan pembinaan intensif.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg transform transition duration-500 hover:scale-105 border border-gray-200">
                    <div class="text-4xl text-blue-800 mb-4">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Kitab Kuning</h4>
                    <p>Pemahaman dasar kitab-kitab ulama salaf dengan pendekatan modern.</p>
                </div>
                <div
                    class="bg-blue-800 text-white p-8 rounded-xl shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="text-4xl text-yellow-400 mb-4">
                        <i class="fas fa-microphone-alt"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Tilawah Indah</h4>
                    <p>Latihan tilawah dengan tartil dan lagu-lagu hijaz untuk meningkatkan kemampuan membaca Al-Qur'an.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Jurusan Section -->
    <section id="jurusan" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Program Keahlian</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Kami menyediakan dua jurusan unggulan yang
                    mengintegrasikan teknologi modern dengan nilai-nilai Islami</p>
                <div class="w-24 h-1 bg-yellow-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- PPLG -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:shadow-xl">
                    <div class="relative h-64">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9e6d784a-781c-4e86-80d0-a60c24d36c7a.png"
                            alt="Siswa PPLG sedang mengerjakan projek programming di lab komputer modern"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent p-6">
                            <h3 class="text-2xl font-bold text-white">PPLG</h3>
                            <p class="text-yellow-300">Pengembangan Perangkat Lunak dan Gim</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <h4 class="text-xl font-bold mb-4 text-blue-800">Kompetensi Keahlian</h4>
                        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                            <li>Pemrograman Web dan Mobile</li>
                            <li>Basis Data</li>
                            <li>UI/UX Design</li>
                            <li>Pengembangan Game</li>
                            <li>Algoritma dan Struktur Data</li>
                        </ul>

                        <h4 class="text-xl font-bold mb-4 text-blue-800">Nilai Plus PPLG Al-Falah</h4>
                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Integrasi pembelajaran dengan pengembangan aplikasi Islami seperti
                                sistem informasi masjid, aplikasi Al-Qur'an digital, dan game edukasi Islam.</p>
                        </div>

                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">JavaScript</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">PHP</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">MySQL</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">React</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Python</span>
                        </div>
                    </div>
                </div>

                <!-- DKV -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-500 hover:shadow-xl">
                    <div class="relative h-64">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a69ae749-3123-46d1-ad8c-d8056bb5d60f.png"
                            alt="Siswa DKV membuat karya desain di studio yang dilengkapi peralatan digital"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent p-6">
                            <h3 class="text-2xl font-bold text-white">DKV</h3>
                            <p class="text-yellow-300">Desain Komunikasi Visual</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <h4 class="text-xl font-bold mb-4 text-blue-800">Kompetensi Keahlian</h4>
                        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                            <li>Desain Grafis</li>
                            <li>Fotografi dan Videografi</li>
                            <li>Animasi 2D & 3D</li>
                            <li>Illustration</li>
                            <li>Digital Marketing</li>
                        </ul>

                        <h4 class="text-xl font-bold mb-4 text-blue-800">Nilai Plus DKV Al-Falah</h4>
                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Pendekatan kreatif dengan nilai-nilai Islam dalam karya desain
                                seperti ilustrasi Al-Qur'an, branding lembaga Islam, dan konten dakwah digital.</p>
                        </div>

                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Adobe
                                Photoshop</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Illustrator</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">InDesign</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Premiere
                                Pro</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">After
                                Effects</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Blender</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="#ppdb"
                    class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-8 rounded-full inline-block transition duration-300 transform hover:scale-105">Daftar
                    Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Program Unggulan Section -->
    <section id="program" class="py-20 bg-blue-900 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Program Unggulan</h2>
                <p class="text-xl opacity-80 max-w-3xl mx-auto">Integrasi pendidikan vokasi dengan penguatan karakter
                    Islami melalui berbagai program unggulan</p>
                <div class="w-24 h-1 bg-yellow-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-blue-800 p-8 rounded-lg text-center transform transition duration-500 hover:scale-105">
                    <div class="text-5xl text-yellow-400 mb-6">
                        <i class="fas fa-book-quran"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Tahfidz Al-Qur'an</h3>
                    <p class="opacity-80">Program hafalan Al-Qur'an dengan target minimal 3 juz selama 3 tahun dan
                        metode mutqin.</p>
                </div>

                <div class="bg-blue-800 p-8 rounded-lg text-center transform transition duration-500 hover:scale-105">
                    <div class="text-5xl text-yellow-400 mb-6">
                        <i class="fas fa-microphone-lines"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Tilawah Tartil</h3>
                    <p class="opacity-80">Latihan membaca Al-Qur'an dengan tajwid yang benar dan lagu-lagu hijaz.</p>
                </div>

                <div class="bg-blue-800 p-8 rounded-lg text-center transform transition duration-500 hover:scale-105">
                    <div class="text-5xl text-yellow-400 mb-6">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kitab Kuning</h3>
                    <p class="opacity-80">Pemahaman dasar kitab turats seperti Safinatun Najah, Riyadhus Shalihin dan
                        lainnya.</p>
                </div>

                <div class="bg-blue-800 p-8 rounded-lg text-center transform transition duration-500 hover:scale-105">
                    <div class="text-5xl text-yellow-400 mb-6">
                        <i class="fas fa-hands-praying"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Tahsin & Tahfidz</h3>
                    <p class="opacity-80">Program pembinaan khusus untuk memperbaiki bacaan dan menambah hafalan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Fasilitas Sekolah</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Dukungan fasilitas lengkap untuk proses belajar
                    mengajar yang optimal</p>
                <div class="w-24 h-1 bg-yellow-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7f889204-41d7-405e-b415-ab3f7b5e6cc3.png"
                        alt="Lab komputer SMK Al-Falah dengan perangkat terbaru untuk pembelajaran programming"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Lab Komputer Modern</h3>
                        <p class="text-gray-700">Laboratorium komputer dengan spesifikasi tinggi untuk pembelajaran
                            programming dan desain.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a8250c7d-ee65-4829-a26a-f3ec7d016273.png"
                        alt="Perpustakaan sekolah dengan koleksi buku teknologi dan agama yang lengkap"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Perpustakaan Digital</h3>
                        <p class="text-gray-700">Koleksi buku teknologi terkini dan kitab-kitab Islam dalam format
                            digital dan cetak.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0c83df69-9169-4ef2-b66d-f7a942500126.png"
                        alt="Studio multimedia untuk produksi konten digital dan broadcasting"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Studio Multimedia</h3>
                        <p class="text-gray-700">Fasilitas lengkap untuk produksi konten digital, fotografi,
                            videografi, dan broadcasting.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/24976328-69f6-4d72-8689-1a1428ab3f0e.png"
                        alt="Masjid sekolah yang luas dengan arsitektur modern Islami"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Masjid Sekolah</h3>
                        <p class="text-gray-700">Masjid megah dengan kapasitas besar untuk kegiatan ibadah dan kajian
                            Islam.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d57bee9e-e6da-4b39-88b4-7dff6041c11b.png"
                        alt="Asrama siswa dengan kamar yang nyaman dan fasilitas lengkap"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Asrama Siswa</h3>
                        <p class="text-gray-700">Asrama nyaman dengan pengawasan ustadz/ustadzah untuk pembinaan
                            karakter.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2265ad19-e85a-4967-bdec-3785824e4367.png"
                        alt="Lapangan olahraga lengkap dengan fasilitas pendukung" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Lapangan Olahraga</h3>
                        <p class="text-gray-700">Fasilitas olahraga lengkap untuk mendukung kegiatan ekstrakurikuler.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ekstrakurikuler Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Ekstrakurikuler</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Berbagai kegiatan pengembangan minat dan bakat siswa
                </p>
                <div class="w-24 h-1 bg-yellow-500 mx-auto mt-4"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:shadow-lg">
                    <div class="text-4xl text-blue-700 mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">IT Club</h3>
                    <p class="text-gray-700">Pengembangan skill programming dan IT di luar jam sekolah.</p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:shadow-lg">
                    <div class="text-4xl text-blue-700 mb-4">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Design Club</h3>
                    <p class="text-gray-700">Kembangkan kreativitas dalam desain grafis dan visual.</p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:shadow-lg">
                    <div class="text-4xl text-blue-700 mb-4">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Nasyid</h3>
                    <p class="text-gray-700">Paduan suara islami dengan lagu-lagu religi berkualitas.</p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:shadow-lg">
                    <div class="text-4xl text-blue-700 mb-4">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Fotografi</h3>
                    <p class="text-gray-700">Belajar teknik fotografi profesional dan editing.</p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:shadow-lg">
                    <div class="text-4xl text-blue-700 mb-4">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Olahraga</h3>
                    <p class="text-gray-700">Futsal, basket, bulutangkis dan olahraga lainnya.</p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:shadow-lg">
                    <div class="text-4xl text-blue-700 mb-4">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Kajian Islam</h3>
                    <p class="text-gray-700">Diskusi dan kajian mendalam tentang berbagai tema keislaman.</p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:shadow-lg">
                    <div class="text-4xl text-blue-700 mb-4">
                        <i class="fas fa-hands"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Pramuka</h3>
                    <p class="text-gray-700">Pembentukan karakter melalui kegiatan kepramukaan.</p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md text-center transform transition duration-300 hover:shadow-lg">
                    <div class="text-4xl text-blue-700 mb-4">
                        <i class="fas fa-microphone"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Public Speaking</h3>
                    <p class="text-gray-700">Latihan berbicara di depan umum dengan teknik yang benar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="py-20 bg-blue-800 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Apa Kata Mereka?</h2>
                <p class="text-xl opacity-80 max-w-3xl mx-auto">Testimoni dari alumni SMKS Al-Falah Nagreg</p>
                <div class="w-24 h-1 bg-yellow-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-blue-700 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/adaea646-becc-405c-b021-8ac49fb2a41f.png"
                            alt="Foto Ahmad Fauzi alumni PPLG bekerja sebagai fullstack developer di perusahaan IT"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Ahmad Fauzi</h4>
                            <p class="text-yellow-200 text-sm">Alumni PPLG, Fullstack Developer</p>
                        </div>
                    </div>
                    <p class="italic">"Selain mendapat skill programming yang mumpuni, saya juga mendapat bekal hafalan
                        Al-Qur'an dan pemahaman agama yang sangat membantu dalam bekerja dan bermasyarakat."</p>
                </div>

                <div class="bg-blue-700 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2ee9efe0-b288-465f-85b3-93cd998aace8.png"
                            alt="Foto Siti Aisyah alumni DKV bekerja sebagai graphic designer di perusahaan media"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Siti Aisyah</h4>
                            <p class="text-yellow-200 text-sm">Alumni DKV, Graphic Designer</p>
                        </div>
                    </div>
                    <p class="italic">"Pendidikan di Al-Falah mengajarkan saya untuk menghasilkan karya yang tidak
                        hanya estetis tetapi juga bermakna dan sesuai nilai-nilai Islam."</p>
                </div>

                <div class="bg-blue-700 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/09e86762-3d13-4751-bf5e-da2615615b91.png"
                            alt="Foto Ust. Abdul Hadi pengasuh pesantren yang mengapresiasi lulusan"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Ust. Abdul Hadi</h4>
                            <p class="text-yellow-200 text-sm">Pengasuh Pondok Pesantren</p>
                        </div>
                    </div>
                    <p class="italic">"Lulusan SMK Al-Falah memiliki keseimbangan antara ilmu dunia dan akhirat yang
                        sangat dibutuhkan umat saat ini."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PPDB Timeline Section -->
    <section id="ppdb" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Persyaratan & Jadwal PPDB</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Prosedur pendaftaran Penerimaan Peserta Didik Baru
                    Tahun 2024/2025</p>
                <div class="w-24 h-1 bg-yellow-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-blue-800 mb-6">Persyaratan</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full p-2 mr-4">
                                <i class="fas fa-check text-sm"></i>
                            </span>
                            <span class="text-gray-700">Lulus SMP/MTs/sederajat</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full p-2 mr-4">
                                <i class="fas fa-check text-sm"></i>
                            </span>
                            <span class="text-gray-700">Usia maksimal 21 tahun pada Juli 2024</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full p-2 mr-4">
                                <i class="fas fa-check text-sm"></i>
                            </span>
                            <span class="text-gray-700">Mendapat izin dari orang tua/wali</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full p-2 mr-4">
                                <i class="fas fa-check text-sm"></i>
                            </span>
                            <span class="text-gray-700">Bersedia mengikuti program tahfidz dan kitab kuning</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full p-2 mr-4">
                                <i class="fas fa-check text-sm"></i>
                            </span>
                            <span class="text-gray-700">Mengisi formulir pendaftaran online</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full p-2 mr-4">
                                <i class="fas fa-check text-sm"></i>
                            </span>
                            <span class="text-gray-700">Membayar biaya pendaftaran sebesar Rp. 250.000,-</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-blue-800 mb-6">Timeline PPDB 2024</h3>
                    <div class="relative pl-12">
                        <div class="absolute left-0 top-0 h-full w-0.5 bg-gray-200"></div>

                        <div class="timeline-item relative mb-10">
                            <h4 class="text-lg font-bold text-blue-700">Gelombang 1</h4>
                            <div class="text-gray-500 mb-1">2 Januari - 29 Februari 2024</div>
                            <p class="text-gray-700">Pendaftaran awal dengan potongan biaya 20%</p>
                        </div>

                        <div class="timeline-item relative mb-10">
                            <h4 class="text-lg font-bold text-blue-700">Gelombang 2</h4>
                            <div class="text-gray-500 mb-1">1 Maret - 30 April 2024</div>
                            <p class="text-gray-700">Pendaftaran reguler tanpa potongan biaya</p>
                        </div>

                        <div class="timeline-item relative mb-10">
                            <h4 class="text-lg font-bold text-blue-700">Tes Seleksi</h4>
                            <div class="text-gray-500 mb-1">5 Mei 2024</div>
                            <p class="text-gray-700">Tes potensi akademik dan baca Al-Qur'an</p>
                        </div>

                        <div class="timeline-item relative">
                            <h4 class="text-lg font-bold text-blue-700">Pengumuman</h4>
                            <div class="text-gray-500 mb-1">15 Mei 2024</div>
                            <p class="text-gray-700">Pengumuman hasil seleksi melalui website dan papan pengumuman</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-lg">
                <div class="flex items-start">
                    <div class="flex-shrink-0 text-yellow-500 text-2xl mr-4">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-yellow-800 mb-1">Informasi Penting!</h4>
                        <p class="text-gray-700">
                            Kuota terbatas untuk setiap jurusan: PPLG (60 siswa), DKV (40 siswa). Segera daftarkan diri
                            Anda sebelum kuota penuh!
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="#"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-12 rounded-full inline-block transition duration-300 transform hover:scale-105 shadow-lg">
                    <span class="block mb-1 text-sm">Daftar Sekarang</span>
                    <span class="block text-xl">PPDB 2024/2025</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Pertanyaan Umum</h2>
                <div class="w-24 h-1 bg-yellow-500 mx-auto"></div>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="mb-6 bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-question flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-bold text-blue-800">Apakah SMK Al-Falah termasuk sekolah berbasis
                            pesantren?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="faq-answer hidden mt-4">
                        <p class="text-gray-700">Ya, SMK Al-Falah mengintegrasikan pendidikan vokasi dengan nilai-nilai
                            pesantren. Siswa mengikuti program tahfidz, tilawah, dan kajian kitab kuning di samping
                            pembelajaran kejuruan.</p>
                    </div>
                </div>

                <div class="mb-6 bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-question flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-bold text-blue-800">Bagaimana sistem pembagian waktu antara pelajaran
                            umum dan agama?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="faq-answer hidden mt-4">
                        <p class="text-gray-700">Waktu dibagi menjadi 60% pembelajaran kejuruan (PPLG/DKV), 30%
                            pendidikan agama (tahfidz, kitab kuning, dll), dan 10% pengembangan karakter. Program
                            tahfidz dilaksanakan pagi sebelum pelajaran dan malam hari bagi yang tinggal di asrama.</p>
                    </div>
                </div>

                <div class="mb-6 bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-question flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-bold text-blue-800">Apakah wajib tinggal di asrama?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="faq-answer hidden mt-4">
                        <p class="text-gray-700">Tidak wajib, tetapi sangat dianjurkan terutama bagi siswa dari luar
                            kota. Siswa yang tidak tinggal di asrama tetap harus mengikuti program pagi dan kajian
                            khusus di akhir pekan.</p>
                    </div>
                </div>

                <div class="mb-6 bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-question flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-bold text-blue-800">Bagaimana prospek kerja lulusan SMK Al-Falah?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="faq-answer hidden mt-4">
                        <p class="text-gray-700">Lulusan kami telah bekerja di berbagai perusahaan IT, studio desain,
                            media Islam, dan ada juga yang melanjutkan ke perguruan tinggi. Beberapa alumni bahkan
                            membuka usaha mandiri di bidang teknologi dan kreatif.</p>
                    </div>
                </div>

                <div class="mb-6 bg-white p-6 rounded-lg shadow-md">
                    <button class="faq-question flex justify-between items-center w-full text-left">
                        <h3 class="text-lg font-bold text-blue-800">Apakah ada beasiswa untuk siswa berprestasi?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </button>
                    <div class="faq-answer hidden mt-4">
                        <p class="text-gray-700">Ya, tersedia beasiswa akademik, tahfidz, dan beasiswa untuk siswa
                            kurang mampu. Informasi lengkap dapat diperoleh saat tes seleksi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Bergabung Dengan SMKS AL-Falah Nagreg?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Daftarkan diri Anda sekarang dan jadilah bagian dari generasi
                unggulan yang menguasai ilmu dunia dan akhirat</p>
            <a href="#ppdb"
                class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-8 rounded-full inline-block transition duration-300 transform hover:scale-105 shadow-lg">Mulai
                Pendaftaran Online</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-950 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/59e40dc8-b87e-46aa-9639-e9697631b8cc.png"
                        alt="Logo SMKS Al-Falah Nagreg versi footer" class="mb-6">
                    <p class="mb-4">SMK berbasis pesantren yang mengintegrasikan kurikulum vokasi dengan pendidikan
                        Islam.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-facebook text-xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-youtube text-xl"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6 text-yellow-400">Kontak Kami</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-400"></i>
                            <span>Jl. Pendidikan No. 123, Nagreg, Bandung, Jawa Barat</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-blue-400"></i>
                            <span>(022) 1234567</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-blue-400"></i>
                            <span>ppdb@smkalfalah.sch.id</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6 text-yellow-400">Link Cepat</h3>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-gray-300 hover:text-yellow-400">Beranda</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-yellow-400">Profil</a></li>
                        <li><a href="#jurusan" class="text-gray-300 hover:text-yellow-400">Jurusan</a></li>
                        <li><a href="#fasilitas" class="text-gray-300 hover:text-yellow-400">Fasilitas</a></li>
                        <li><a href="#ppdb" class="text-gray-300 hover:text-yellow-400">PPDB</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6 text-yellow-400">Jam Operasional</h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between">
                            <span>Senin - Kamis</span>
                            <span>07.30 - 16.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Jumat</span>
                            <span>07.30 - 15.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sabtu</span>
                            <span>08.00 - 13.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Minggu</span>
                            <span>Libur</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>© 2024 SMKS AL-Falah Nagreg. Seluruh hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-blue-700 text-white p-3 rounded-full shadow-lg hidden">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // FAQ Accordion
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.parentElement.querySelector('.faq-answer');
                const icon = question.querySelector('i');

                answer.classList.toggle('hidden');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
