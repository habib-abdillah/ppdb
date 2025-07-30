@extends('layouts.app')

@section('title', 'Daftar Ulang')

@section('content')
    @php
        $filledSteps = collect([
            $daftarUlang->dataPribadi,
            $daftarUlang->alamatKontak,
            $daftarUlang->orangTua,
            $daftarUlang->sekolahAsal,
            $daftarUlang->statusSantri,
            $daftarUlang->informasiTambahan,
            $daftarUlang->dokumenDaftarUlang,
        ])
            ->filter()
            ->count();

        $progress = round(($filledSteps / 7) * 100) . '%';
    @endphp

    @php
        $isComplete = $daftarUlang->is_complete;
        $status = $daftarUlang->status_verifikasi;
    @endphp

    <div x-data="{ showForm: {{ $isComplete ? 'false' : 'true' }} }">
        @if ($isComplete)
            <div class="flex">
                <!-- Content Area -->
                <main class="flex-1 p-4">
                    @php
                        $statusConfig = match ($status) {
                            'pending', 'belum' => [
                                'text' => 'Menunggu verifikasi admin',
                                'label' => 'Pending',
                                'badgeColor' => 'bg-yellow-200 text-yellow-800',
                                'headerBg' => 'bg-yellow-100 border-yellow-200',
                                'message' =>
                                    'Data Anda sedang dalam proses verifikasi. Harap tunggu konfirmasi dari admin sekolah.',
                            ],
                            'diverifikasi', 'diterima' => [
                                'text' => 'Data telah diverifikasi',
                                'label' => 'Diterima',
                                'badgeColor' => 'bg-green-200 text-green-800',
                                'headerBg' => 'bg-green-100 border-green-200',
                                'message' =>
                                    'Selamat! Data Anda telah diverifikasi. Silakan lanjut ke tahap selanjutnya.',
                            ],
                            'ditolak' => [
                                'text' => 'Data ditolak, mohon perbaiki',
                                'label' => 'Ditolak',
                                'badgeColor' => 'bg-red-200 text-red-800',
                                'headerBg' => 'bg-red-100 border-red-200',
                                'message' => 'Mohon maaf, data Anda ditolak. Harap periksa kembali isian formulir.',
                            ],
                            default => [
                                'text' => 'Status tidak dikenali',
                                'label' => 'Tidak Diketahui',
                                'badgeColor' => 'bg-gray-200 text-gray-800',
                                'headerBg' => 'bg-gray-100 border-gray-200',
                                'message' => 'Status tidak dikenal. Silakan hubungi admin.',
                            ],
                        };
                    @endphp

                    <!-- Status Card -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                        <div class="{{ $statusConfig['headerBg'] }} p-4 border-b">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-800">Status Pendaftaran</h2>
                                    <p class="text-gray-600">{{ $statusConfig['text'] }}</p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-sm font-medium {{ $statusConfig['badgeColor'] }}">
                                    {{ $statusConfig['label'] }}
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="mb-6">
                                <p class="text-gray-600 mb-2">Progres pengisian Form:</p>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    @php
                                        $progressValue = round(($filledSteps / 7) * 100);
                                        $progressBarColor = match (true) {
                                            $progressValue >= 80 => 'bg-green-600',
                                            $progressValue >= 50 => 'bg-yellow-500',
                                            default => 'bg-red-500',
                                        };
                                        $progress = $progressValue . '%';
                                    @endphp

                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="{{ $progressBarColor }} h-2.5 rounded-full transition-all duration-300 ease-in-out"
                                            style="width: {{ $progress }}"></div>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-1">Progress: {{ $progress }}</p>

                                    <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-300 ease-in-out"
                                        style="width: {{ $progress }}"></div>
                                </div>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-info-circle text-blue-500 text-lg"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-blue-700">
                                            {{ $statusConfig['message'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-4">
                                <button @click="showForm = !showForm"
                                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    <i class="fas fa-file-alt mr-2"></i>
                                    <span x-text="showForm ? 'Sembunyikan Formulir' : 'Tampilkan Formulir'"></span>
                                </button>
                                <button
                                    class="flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Bantuan
                                </button>
                            </div>
                        </div>
                    </div>


                    <!-- Informasi Penting -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="bg-blue-50 p-4 border-b">
                            <h2 class="text-lg font-semibold text-gray-800">Informasi Penting</h2>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 h-5 w-5 text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">
                                        <span class="font-medium text-gray-900">Tahap selanjutnya:</span> Setelah
                                        verifikasi selesai, Anda akan menerima email konfirmasi dan dapat mencetak bukti
                                        pendaftaran.
                                    </p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 h-5 w-5 text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">
                                        <span class="font-medium text-gray-900">Durasi verifikasi:</span> Proses ini
                                        biasanya memakan waktu 1-3 hari kerja. Mohon bersabar.
                                    </p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 h-5 w-5 text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">
                                        <span class="font-medium text-gray-900">Jika ada masalah:</span> Hubungi panitia
                                        daftar ulang di nomor 021-1234567 setiap hari kerja jam 08.00-15.00 WIB.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </main>
            </div>
        @endif
        <div x-show="showForm" x-transition class="mt-6">
            @include('siswa.daftarulang.formulir', ['readonly' => $isComplete])
        </div>
    </div>
@endsection
