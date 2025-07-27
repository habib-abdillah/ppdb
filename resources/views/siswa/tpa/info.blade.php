@extends('layouts.app')

@section('title', 'Infromasi TPA')

@section('content')
    <main class="container mx-auto px-4 py-6 flex-1">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Tes Potensi Akademik</h2>
            <p class="text-gray-600">Selamat datang di Pusat Informasi Tes Potensi Akademik</p>
        </div>

        <div class="bg-white rounded-lg shadow-xl p-6 mb-8 border-l-4 border-blue-500">
            <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-info-circle text-blue-500 mr-2"></i> Informasi Penting
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-gray-600 mb-2"><strong>Durasi Tes:</strong> 120 menit</p>
                    <p class="text-gray-600 mb-2"><strong>Jumlah Soal:</strong> 90 soal</p>
                    <p class="text-gray-600 mb-2"><strong>Materi Tes:</strong> Verbal, Numerik, Logika</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-2"><strong>Tipe Soal:</strong> Pilihan Ganda</p>
                    <p class="text-gray-600 mb-2"><strong>Rekomendasi Jurusan:</strong> PPLG atau DKV</p>
                </div>
            </div>
        </div>

        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-blue-600 px-6 py-4 text-white">
                    <h3 class="text-xl font-semibold flex items-center">
                        <i class="fas fa-link mr-2"></i> Detail Akses Tes
                    </h3>
                </div>
                <div class="p-6">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Link Tes:</label>
                        <div class="flex items-center border rounded-lg overflow-hidden">
                            <input type="text" readonly value="https://tpaonline.com/ujian/12345"
                                class="flex-grow w-full px-4 py-2 text-gray-700 focus:outline-none">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                            <input type="text" readonly value="{{ $tpaAkses->username ?? '-' }}"
                                class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none">
                        </div>
                        <div x-data="{ show: false }" class="relative">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                            <input :type="show ? 'text' : 'password'" readonly value="{{ $tpaAkses->password ?? '-' }}"
                                class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none pr-10">
                            <button type="button" @click="show = !show"
                                class="absolute right-2 top-9 text-gray-600 hover:text-gray-800">
                                <span x-text="show ? '🙈' : '👁️'"></span>
                            </button>
                        </div>
                        {{-- <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                            <input type="password" readonly value="{{ $tpaAkses->password ?? '-' }}"
                                class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none">
                        </div> --}}
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Gelombang:</label>
                            <input type="text" readonly value="{{ $pendaftar->gelombang->nama ?? '-' }}"
                                class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Jadwal Tes:</label>
                            <input type="text" readonly
                                value="{{ \Carbon\Carbon::parse($pendaftar->gelombang->tanggal_tpa)->format('d M Y') }}"
                                class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none">
                        </div>
                    </div>

                    <div class="mt-4">
                        <button
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg flex items-center justify-center">
                            <i class="fas fa-external-link-alt mr-2"></i> Mulai Tes Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-indigo-600 px-6 py-4 text-white">
                    <h3 class="text-xl font-semibold flex items-center">
                        <i class="fas fa-book-open mr-2"></i> Panduan Tes
                    </h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 text-indigo-500 mt-1 mr-2">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Persiapan Sebelum Tes</h4>
                                <p class="text-gray-600 text-sm">Pastikan koneksi internet stabil dan browser dalam
                                    keadaan baru (clear cache)</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 text-indigo-500 mt-1 mr-2">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Saat Tes Berlangsung</h4>
                                <p class="text-gray-600 text-sm">Kerjakan soal dengan tenang, tidak boleh menutup
                                    browser selama tes berlangsung</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 text-indigo-500 mt-1 mr-2">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Setelah Tes Selesai</h4>
                                <p class="text-gray-600 text-sm">Hasil akan muncul setelah semua peserta menyelesaikan
                                    tes</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <button
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg flex items-center justify-center">
                            <i class="fas fa-download mr-2"></i> Unduh Panduan Lengkap
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">
                <i class="fas fa-calendar-alt mr-2 text-blue-500"></i> Timeline Pelaksanaan Tes
            </h3>
            <div class="relative">
                <div class="border-l-2 border-blue-200 absolute h-full left-4"></div>

                @foreach ($semuaGelombang as $gelombang)
                    <div class="relative pl-10 pb-8">
                        <div class="flex items-center mb-1">
                            <div class="absolute -left-1 w-3 h-3 bg-blue-500 rounded-full"></div>
                            <h4 class="font-bold text-lg text-gray-800">{{ $gelombang->nama }}</h4>
                        </div>
                        <div class="pl-4">
                            <div class="bg-gray-100 rounded-lg p-4 shadow-md">
                                <p class="text-gray-600 mb-1">
                                    {{ \Carbon\Carbon::parse($gelombang->tanggal_mulai)->format('d M Y') . ' - ' . \Carbon\Carbon::parse($gelombang->tanggal_selesai)->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-8 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg shadow-lg p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-xl font-bold mb-2">Butuh Bantuan?</h3>
                    <p class="text-blue-100">Tim support kami siap membantu 24 jam</p>
                </div>
                <div>
                    <button class="bg-white text-blue-600 font-bold py-2 px-6 rounded-full hover:bg-blue-50 transition">
                        <i class="fas fa-headset mr-2"></i> Hubungi Support
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        function copyText(element) {
            const text = element.previousElementSibling.value;
            navigator.clipboard.writeText(text).then(() => {
                alert('Text copied to clipboard');
            });
        }

        document.querySelectorAll('button').forEach(button => {
            if (button.innerHTML.includes('fa-copy')) {
                button.addEventListener('click', function() {
                    copyText(this);
                });
            }
        });
    </script>
@endsection
