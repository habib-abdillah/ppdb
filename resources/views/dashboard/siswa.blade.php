@extends('layouts.app')

@section('title', 'Dashboard Siswa')

@section('content')
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
    </form>
    <div class="flex">
        <main class="flex-1 p-4">
            <!-- Status Pendaftaran -->
            <section id="status" class="mb-6 bg-white p-6 rounded-lg shadow-md section-card">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Status Pendaftaran</h2>
                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-800">
                        <i class="fas fa-info-circle mr-1"></i>Last Updated
                        <span class="font-normal">: 01/10/2023</span>
                    </span>
                </div>
                <div class="flex items-center bg-yellow-50 px-4 py-3 rounded-md">
                    <span class="status-indicator bg-yellow-500"></span>
                    <p class="font-medium text-gray-700">Menunggu verifikasi</p>
                </div>
            </section>

            <!-- Data Diri Pendaftar -->
            <section id="data-diri" class="mb-6 bg-white p-6 rounded-lg shadow-md section-card">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Data Diri Pendaftar</h2>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                        <i class="fas fa-edit mr-2"></i>Edit Data
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <label class="text-sm text-gray-500">Nama Lengkap</label>
                        <p class="font-medium">John Doe</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <label class="text-sm text-gray-500">Tempat & Tgl. Lahir</label>
                        <p class="font-medium">Jakarta, 1 Januari 2005</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <label class="text-sm text-gray-500">NISN</label>
                        <p class="font-medium">1234567890</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <label class="text-sm text-gray-500">Asal Sekolah</label>
                        <p class="font-medium">SMA Negeri 1 Jakarta</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <label class="text-sm text-gray-500">No. HP Siswa</label>
                        <p class="font-medium">08123456789</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <label class="text-sm text-gray-500">No. HP Orang Tua</label>
                        <p class="font-medium">08198765432</p>
                    </div>
                </div>
            </section>

            <!-- Bukti Pendaftaran -->
            <section id="bukti-pendaftaran" class="mb-6 bg-white p-6 rounded-lg shadow-md section-card">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Bukti Pendaftaran</h2>
                    <button
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition flex items-center">
                        <i class="fas fa-print mr-2"></i>Cetak Kartu
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                    <div class="col-span-2">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="mb-3">
                                <label class="text-sm text-gray-500">No. Peserta</label>
                                <p class="font-bold text-lg">00123456789</p>
                            </div>
                            <div class="flex space-x-4">
                                <div>
                                    <label class="text-sm text-gray-500">Tanggal Daftar</label>
                                    <p>01/10/2023</p>
                                </div>
                                <div>
                                    <label class="text-sm text-gray-500">Status</label>
                                    <p class="text-green-600">Aktif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="#" alt="Kode QR Pendaftaran" class="border p-1">
                    </div>
                </div>
                <div class="mt-4 text-sm text-gray-500">
                    <i class="fas fa-info-circle mr-1"></i>Simpan bukti ini untuk keperluan seleksi
                </div>
            </section>

            <!-- Jadwal Seleksi -->
            <section id="jadwal-seleksi" class="mb-6 bg-white p-6 rounded-lg shadow-md section-card">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Jadwal Seleksi / Tahapan PPDB</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="bg-blue-500 text-white p-2 rounded-full mr-3">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Penutupan Pendaftaran</h3>
                                <p class="text-gray-700">10 Oktober 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-orange-50 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="bg-orange-500 text-white p-2 rounded-full mr-3">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Jadwal Seleksi</h3>
                                <p class="text-gray-700">15 Oktober 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="bg-green-500 text-white p-2 rounded-full mr-3">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Pengumuman Hasil</h3>
                                <p class="text-gray-700">20 Oktober 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="bg-purple-500 text-white p-2 rounded-full mr-3">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Daftar Ulang</h3>
                                <p class="text-gray-700">25 Oktober 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Upload Berkas -->
            <section id="upload-berkas" class="mb-6 bg-white p-6 rounded-lg shadow-md section-card">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Upload Berkas</h2>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                        <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah Berkas Baru
                    </button>
                </div>

                <div class="space-y-4">
                    <!-- Kartu Keluarga -->
                    <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-2 rounded-full mr-3">
                                <i class="fas fa-id-card text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="font-medium">Kartu Keluarga</h3>
                                <p class="text-sm text-gray-500">Format: PDF/JPG (max 2MB)</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-green-600 font-medium mr-3">✓ Terunggah</span>
                            <button class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-redo-alt"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Akta Kelahiran -->
                    <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-center">
                            <div class="bg-red-100 p-2 rounded-full mr-3">
                                <i class="fas fa-certificate text-red-600"></i>
                            </div>
                            <div>
                                <h3 class="font-medium">Akta Kelahiran</h3>
                                <p class="text-sm text-gray-500">Format: PDF/JPG (max 2MB)</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-red-600 font-medium mr-3">Belum Diunggah</span>
                            <button class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-upload"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Raport -->
                    <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-2 rounded-full mr-3">
                                <i class="fas fa-file-alt text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="font-medium">Raport</h3>
                                <p class="text-sm text-gray-500">Format: PDF (max 5MB)</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-green-600 font-medium mr-3">✓ Terunggah</span>
                            <button class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-redo-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-sm text-gray-500">
                    <i class="fas fa-info-circle mr-1"></i>Pastikan semua dokumen terunggah sebelum batas akhir pendaftaran
                </div>
            </section>

            <!-- Pengumuman / Notifikasi -->
            <section id="pengumuman" class="mb-6 bg-white p-6 rounded-lg shadow-md section-card">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Pengumuman & Notifikasi</h2>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">
                        <i class="fas fa-bell mr-1"></i>Terbaru
                    </span>
                </div>

                <div class="space-y-4">
                    <!-- Pengumuman 1 -->
                    <div class="border-l-4 border-blue-500 pl-4 py-2">
                        <div class="flex justify-between items-start">
                            <h3 class="font-semibold text-gray-800">Judul Pengumuman 1</h3>
                            <span class="text-sm text-gray-500">01/10/2023</span>
                        </div>
                        <p class="text-gray-600 mt-1">Ringkasan pengumuman 1 yang lebih detail dengan informasi penting
                            untuk diketahui oleh calon siswa...</p>
                        <a href="#" class="text-blue-600 text-sm inline-flex items-center mt-2 hover:underline">
                            Baca selengkapnya <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>

                    <!-- Pengumuman 2 -->
                    <div class="border-l-4 border-blue-500 pl-4 py-2">
                        <div class="flex justify-between items-start">
                            <h3 class="font-semibold text-gray-800">Judul Pengumuman 2</h3>
                            <span class="text-sm text-gray-500">02/10/2023</span>
                        </div>
                        <p class="text-gray-600 mt-1">Ringkasan pengumuman 2 dengan informasi tambahan terkait proses
                            seleksi penerimaan siswa baru...</p>
                        <a href="#" class="text-blue-600 text-sm inline-flex items-center mt-2 hover:underline">
                            Baca selengkapnya <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>

                <div class="mt-4">
                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium inline-flex items-center">
                        Lihat semua pengumuman <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                </div>
            </section>

            <!-- Kontak Panitia -->
            <section id="kontak" class="mb-6 bg-white p-6 rounded-lg shadow-md section-card">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Kontak Panitia</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Panitia 1 -->
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex items-center mb-2">
                            <div class="bg-blue-500 text-white p-2 rounded-full mr-3">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="font-semibold">Budi Santoso</h3>
                        </div>
                        <p class="text-sm mb-1"><i class="fas fa-phone-alt mr-2"></i>08123456789</p>
                        <p class="text-sm"><i class="fas fa-envelope mr-2"></i>budi@sekolah.com</p>
                        <button class="mt-2 bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">
                            <i class="fab fa-whatsapp mr-1"></i>Chat via WA
                        </button>
                    </div>

                    <!-- Panitia 2 -->
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex items-center mb-2">
                            <div class="bg-blue-500 text-white p-2 rounded-full mr-3">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="font-semibold">Ani Wijaya</h3>
                        </div>
                        <p class="text-sm mb-1"><i class="fas fa-phone-alt mr-2"></i>08234567890</p>
                        <p class="text-sm"><i class="fas fa-envelope mr-2"></i>ani@sekolah.com</p>
                        <button class="mt-2 bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">
                            <i class="fab fa-whatsapp mr-1"></i>Chat via WA
                        </button>
                    </div>

                    <!-- Info Layanan -->
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex items-center mb-2">
                            <div class="bg-blue-500 text-white p-2 rounded-full mr-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <h3 class="font-semibold">Info Layanan</h3>
                        </div>
                        <p class="text-sm mb-1"><i class="fas fa-clock mr-2"></i>Senin-Jumat: 08:00-16:00</p>
                        <p class="text-sm"><i class="fas fa-calendar-alt mr-2"></i>Sabtu: 09:00-12:00</p>
                    </div>
                </div>
            </section>
            <!-- Pengingat / Countdown -->
            <section id="pengingat" class="mb-6 bg-white p-6 rounded-lg shadow-md section-card">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Countdown Menuju Seleksi</h2>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="text-4xl font-bold text-yellow-600 mb-2">3 Hari Lagi</div>
                    <p class="text-lg">Selesaikan semua berkas sebelum:</p>
                    <div class="text-xl font-semibold mt-2">15 Oktober 2023</div>
                </div>
            </section>
        </main>
    </div>
@endsection
