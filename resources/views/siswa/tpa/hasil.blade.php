@extends('layouts.app')

@section('title', 'Hasil TPA')

@section('content')
    <div class="w-full overflow-x-hidden">
        <main class="mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-6 space-y-2 sm:space-y-0">
                <h2 class="text-2xl font-bold text-gray-800">Hasil Tes Rekomendasi Jurusan</h2>
                <p class="text-gray-500 mb-4">Tes ini menentukan kesesuaian antara PPLG (Programming) dan DKV (Design)</p>
                <button class="bg-tpa-primary text-white px-4 py-2 rounded-md hover:bg-tpa-dark transition-colors">
                    <i class="fas fa-download mr-2"></i> Unduh Laporan
                </button>
            </div>

            <!-- Info Tes Terakhir -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6 border-l-4 border-tpa-primary">
                <h3 class="text-xl font-semibold mb-4">Tes Terakhir</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Tanggal Tes</p>
                        <p class="font-medium">{{ \Carbon\Carbon::parse($hasil->tanggal_tes)->translatedFormat('d F Y') }}
                        </p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <span
                            class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">{{ ucfirst($hasil->status) }}</span>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Total Skor</p>
                        <p class="font-medium text-tpa-primary text-xl">{{ $hasil->nilai }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Persentil</p>
                        <p class="font-medium">{{ $hasil->persentil }}%</p>
                    </div>
                </div>
            </div>

            <!-- Detail Hasil Per Subtes -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-xl font-semibold mb-4">Detail Kemampuan Jurusan</h3>

                {{-- TABEL DESKTOP --}}
                <div class="overflow-x-auto hidden md:block">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aspek</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Skor</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($hasil->subtes as $item)
                                <tr>
                                    <td class="px-6 py-4">{{ $item->master->nama }}</td>
                                    <td class="px-6 py-4">{{ $item->nilai }}</td>
                                    <td class="px-6 py-4">
                                        @php
                                            $warna = match ($item->kategori) {
                                                'Sangat Baik' => 'bg-green-100 text-green-800',
                                                'Baik' => 'bg-blue-100 text-blue-800',
                                                'Cukup' => 'bg-yellow-100 text-yellow-800',
                                                default => 'bg-gray-100 text-gray-600',
                                            };
                                        @endphp
                                        <span
                                            class="px-2 py-1 {{ $warna }} text-xs rounded-full">{{ $item->kategori }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">{{ $item->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- MOBILE RESPONSIVE CARD --}}
                <div class="block md:hidden space-y-4">
                    @foreach ($hasil->subtes as $item)
                        <div class="border p-4 rounded-lg shadow-sm bg-gray-50">
                            <p class="text-sm text-gray-500">Aspek</p>
                            <p class="font-semibold">{{ $item->master->nama }}</p>

                            <p class="text-sm text-gray-500 mt-2">Skor</p>
                            <p class="font-semibold">{{ $item->nilai }}</p>

                            <p class="text-sm text-gray-500 mt-2">Kategori</p>
                            @php
                                $warna = match ($item->kategori) {
                                    'Sangat Baik' => 'bg-green-100 text-green-800',
                                    'Baik' => 'bg-blue-100 text-blue-800',
                                    'Cukup' => 'bg-yellow-100 text-yellow-800',
                                    default => 'bg-gray-100 text-gray-600',
                                };
                            @endphp
                            <span
                                class="px-2 py-1 {{ $warna }} text-xs rounded-full inline-block mt-1">{{ $item->kategori }}</span>

                            <p class="text-sm text-gray-500 mt-2">Keterangan</p>
                            <p class="text-gray-600">{{ $item->keterangan }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Grafik Perkembangan -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-xl font-semibold mb-4">Perbandingan Jurusan</h3>
                <div class="h-64 bg-gray-100 rounded-md flex items-center justify-center text-gray-400">
                    <img src=""
                        alt="Diagram radar perbandingan potensi jurusan antara PPLG dan DKV menunjukkan kekuatan di bidang logika programming"
                        class="w-full" />
                </div>
                <div class="mt-4 text-sm text-gray-500">
                    <p>Diagram di atas membandingkan potensi Anda di kedua jurusan. PPLG unggul di aspek logika dan
                        pemecahan masalah, sedangkan DKV cukup di kreativitas visual.</p>
                </div>
            </div>

            <!-- Rekomendasi Jurusan -->
            <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-tpa-primary">
                <h3 class="text-xl font-semibold mb-4">Rekomendasi Jurusan</h3>

                <div class="mb-6 p-4 bg-blue-50 rounded-lg">
                    <h4 class="text-lg font-medium text-tpa-primary flex flex-wrap items-center gap-2">
                        <i class="fas fa-graduation-cap text-lg"></i>
                        Hasil Rekomendasi:
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                            {{ $hasil->rekomendasi_jurusan }}
                            ({{ $hasil->rekomendasi_jurusan == 'PPLG' ? 'Programming' : 'Desain' }})
                        </span>
                    </h4>
                    <p class="mt-2 text-gray-600 text-sm leading-relaxed">
                        Berdasarkan hasil tes, Anda memiliki kemampuan yang sangat baik dalam logika dan pemecahan masalah
                        yang sesuai untuk jurusan Programming.
                    </p>
                </div>

                <div class="flex flex-col md:flex-row gap-6">
                    {{-- PPLG --}}
                    <div class="border rounded-lg p-4 w-full">
                        <h4 class="font-medium flex items-center">
                            <i class="fas fa-laptop-code mr-2 text-blue-500"></i>
                            PPLG (Programming)
                        </h4>
                        <div class="mt-2">
                            <div class="h-2 bg-gray-200 rounded-full mb-2">
                                <div class="h-2 bg-green-500 rounded-full" style="width: {{ $hasil->kesesuaian_pplg }}%">
                                </div>
                            </div>
                            <p class="text-sm text-gray-600">
                                Kesesuaian: {{ $hasil->kesesuaian_pplg }}% -
                                {{ $hasil->kesesuaian_pplg >= 80 ? 'Sangat Cocok' : ($hasil->kesesuaian_pplg >= 60 ? 'Cukup' : 'Kurang') }}
                            </p>
                        </div>
                        <ul class="mt-4 text-sm space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                                <span>Kemampuan logika programming sangat baik</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                                <span>Pemecahan masalah sistematis</span>
                            </li>
                        </ul>
                    </div>

                    {{-- DKV --}}
                    <div class="border rounded-lg p-4 w-full">
                        <h4 class="font-medium flex items-center">
                            <i class="fas fa-paint-brush mr-2 text-purple-500"></i>
                            DKV (Design)
                        </h4>
                        <div class="mt-2">
                            <div class="h-2 bg-gray-200 rounded-full mb-2">
                                <div class="h-2 bg-purple-400 rounded-full" style="width: {{ $hasil->kesesuaian_dkv }}%">
                                </div>
                            </div>
                            <p class="text-sm text-gray-600">
                                Kesesuaian: {{ $hasil->kesesuaian_dkv }}% -
                                {{ $hasil->kesesuaian_dkv >= 80 ? 'Sangat Cocok' : ($hasil->kesesuaian_dkv >= 60 ? 'Cukup' : 'Kurang') }}
                            </p>
                        </div>
                        <ul class="mt-4 text-sm space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                                <span>Kreativitas visual cukup baik</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-exclamation-circle text-yellow-500 mr-2 mt-1"></i>
                                <span>Perlu pengembangan estetika desain</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-tpa-primary">
                <h3 class="text-xl font-semibold mb-4">Rekomendasi Jurusan</h3>
                <div class="mb-6 p-4 bg-blue-50 rounded-lg">
                    <h4 class="text-lg font-medium text-tpa-primary flex items-center">
                        <i class="fas fa-graduation-cap mr-2"></i>
                        Hasil Rekomendasi: <span class="ml-2 bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                            {{ $hasil->rekomendasi_jurusan }}
                            ({{ $hasil->rekomendasi_jurusan == 'PPLG' ? 'Programming' : 'Desain' }})
                        </span>
                    </h4>
                    <p class="mt-2 text-gray-600">Berdasarkan hasil tes, Anda memiliki kemampuan yang sangat baik dalam
                        logika dan pemecahan masalah yang sesuai untuk jurusan Programming.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border rounded-lg p-4">
                        <h4 class="font-medium flex items-center">
                            <i class="fas fa-laptop-code mr-2 text-blue-500"></i>
                            PPLG (Programming)
                        </h4>
                        <div class="mt-2">
                            <div class="h-2 bg-gray-200 rounded-full mb-2">
                                <div class="h-2 bg-green-500 rounded-full" style="width: {{ $hasil->kesesuaian_pplg }}%">
                                </div>
                            </div>
                            <p class="text-sm text-gray-600">Kesesuaian: {{ $hasil->kesesuaian_pplg }}% -
                                {{ $hasil->kesesuaian_pplg >= 80 ? 'Sangat Cocok' : ($hasil->kesesuaian_pplg >= 60 ? 'Cukup' : 'Kurang') }}
                            </p>
                        </div>
                        <ul class="mt-4 text-sm space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                                <span>Kemampuan logika programming sangat baik</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                                <span>Pemecahan masalah sistematis</span>
                            </li>
                        </ul>
                    </div>

                    <div class="border rounded-lg p-4">
                        <h4 class="font-medium flex items-center">
                            <i class="fas fa-paint-brush mr-2 text-purple-500"></i>
                            DKV (Design)
                        </h4>
                        <div class="mt-2">
                            <div class="h-2 bg-gray-200 rounded-full mb-2">
                                <div class="h-2 bg-purple-400 rounded-full" style="width: {{ $hasil->kesesuaian_dkv }}%">
                                </div>
                            </div>
                            <p class="text-sm text-gray-600">Kesesuaian: {{ $hasil->kesesuaian_dkv }}% -
                                {{ $hasil->kesesuaian_dkv >= 80 ? 'Sangat Cocok' : ($hasil->kesesuaian_dkv >= 60 ? 'Cukup' : 'Kurang') }}
                            </p>
                        </div>
                        <ul class="mt-4 text-sm space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                                <span>Kreativitas visual cukup baik</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-exclamation-circle text-yellow-500 mr-2 mt-1"></i>
                                <span>Perlu pengembangan estetika desain</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </main>
    </div>

@endsection
