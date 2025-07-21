<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-200 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden border border-blue-100 mt-10">
        <div class="md:flex">
            <div class="p-10 md:w-2/3">
                <div class="mb-6 text-center bg-blue-50 py-4 px-6 rounded-lg border-b-4 border-blue-200">
                    <h1 class="text-3xl font-bold text-blue-800 mb-2">🗒️ Pendaftaran Siswa Baru</h1>
                    <p class="text-base text-blue-600">Mohon lengkapi seluruh data dengan benar</p>
                </div>

                <form method="POST" action="{{ route('register.store') }}" class="space-y-2">
                    @csrf

                    <div>
                        <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <div class="flex items-center border border-gray-300 rounded-md mb-1">
                            <span class="bg-gray-200 rounded-l-md p-2"><i class="fas fa-user"></i></span>
                            <input type="text" name="nama_lengkap" id="nama_lengkap"
                                value="{{ old('nama_lengkap') }}"
                                class="flex-1 p-2 border-l-0 rounded-r-md w-full focus:outline-none focus:ring-2 focus:ring-blue-200"
                                required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div>
                            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat
                                Lahir</label>
                            <div class="flex items-center border border-gray-300 rounded-md mb-1">
                                <span class="bg-gray-200 rounded-l-md p-2"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                    value="{{ old('tempat_lahir') }}"
                                    class="flex-1 p-2 border-l-0 rounded-r-md w-full focus:outline-none focus:ring-2 focus:ring-blue-200"
                                    required>
                            </div>
                        </div>

                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal
                                Lahir</label>
                            <div class="flex items-center border border-gray-300 rounded-md mb-1">
                                <span class="bg-gray-200 rounded-l-md p-2"><i class="fas fa-calendar-alt"></i></span>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                    value="{{ old('tanggal_lahir') }}"
                                    class="flex-1 p-2 border-l-0 rounded-r-md w-full focus:outline-none focus:ring-2 focus:ring-blue-200"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="flex items-center border border-gray-300 rounded-md mb-1">
                            <span class="bg-gray-200 rounded-l-md p-2"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="flex-1 p-2 border-l-0 rounded-r-md w-full focus:outline-none focus:ring-2 focus:ring-blue-200"
                                required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div>
                            <label for="no_hp_siswa" class="block text-sm font-medium text-gray-700">No HP Siswa</label>
                            <div class="flex items-center border border-gray-300 rounded-md mb-1">
                                <span class="bg-gray-200 rounded-l-md p-2"><i class="fas fa-phone"></i></span>
                                <input type="tel" name="no_hp_siswa" id="no_hp_siswa"
                                    value="{{ old('no_hp_siswa') }}"
                                    class="flex-1 p-2 border-l-0 rounded-r-md w-full focus:outline-none focus:ring-2 focus:ring-blue-200"
                                    required>
                            </div>
                        </div>

                        <div>
                            <label for="no_hp_orang_tua" class="block text-sm font-medium text-gray-700">No HP Orang
                                Tua</label>
                            <div class="flex items-center border border-gray-300 rounded-md mb-1">
                                <span class="bg-gray-200 rounded-l-md p-2"><i class="fas fa-phone"></i></span>
                                <input type="tel" name="no_hp_orang_tua" id="no_hp_orang_tua"
                                    value="{{ old('no_hp_orang_tua') }}"
                                    class="flex-1 p-2 border-l-0 rounded-r-md w-full focus:outline-none focus:ring-2 focus:ring-blue-200"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                        <div class="flex items-center border border-gray-300 rounded-md mb-1">
                            <span class="bg-gray-200 rounded-l-md p-2"><i class="fas fa-id-card"></i></span>
                            <input type="text" name="nisn" id="nisn" value="{{ old('nisn') }}"
                                class="flex-1 p-2 border-l-0 rounded-r-md w-full focus:outline-none focus:ring-2 focus:ring-blue-200"
                                required>
                        </div>
                    </div>

                    <div>
                        <label for="asal_sekolah" class="block text-sm font-medium text-gray-700">Asal Sekolah</label>
                        <div class="flex items-center border border-gray-300 rounded-md mb-4">
                            <span class="bg-gray-200 rounded-l-md p-2"><i class="fas fa-school"></i></span>
                            <input type="text" name="asal_sekolah" id="asal_sekolah"
                                value="{{ old('asal_sekolah') }}"
                                class="flex-1 p-2 border-l-0 rounded-r-md w-full focus:outline-none focus:ring-2 focus:ring-blue-200"
                                required>
                        </div>
                    </div>

                    <div class="flex items-center mt-4">
                        <input id="setuju_syarat" name="setuju_syarat" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                            {{ old('setuju_syarat') ? 'checked' : '' }} required>
                        <label for="setuju_syarat" class="ml-2 block text-sm text-gray-700">
                            Saya menyatakan bahwa data yang saya berikan adalah benar
                        </label>
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-6 border border-transparent rounded-xl shadow-md text-lg font-bold text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:shadow-lg active:scale-[0.98]">
                            Kirim Pendaftaran
                        </button>
                    </div>
                </form>

                <div class="mt-4">
                    <a href="{{ url()->previous() }}"
                        class="w-full block text-center py-2 px-4 border border-gray-300 rounded-md text-lg font-semibold text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200">
                        Kembali
                    </a>
                </div>
            </div>

            <div class="md:w-1/3">
                <img src="https://studyhat.com/wp-content/uploads/2024/09/Apakah-Itu-Pendidikan.jpg"
                    alt="Ilustrasi pendidikan" class="w-full h-full object-cover rounded-r-lg">
            </div>
        </div>
    </div>
</body>

</html>
