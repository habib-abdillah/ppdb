<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .input-error {
            border-color: #f00;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.5);
        }

        .input-success {
            border-color: #34d399;
            box-shadow: 0 0 0 2px rgba(34, 197, 94, 0.5);
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            20%,
            60% {
                transform: translateX(-5px);
            }

            40%,
            80% {
                transform: translateX(5px);
            }
        }

        .shake {
            animation: shake 0.5s;
        }
    </style>
</head>

<body class="bg-gray-200 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden border border-blue-100 mt-10">
        <div class="md:flex">
            <div class="p-10 md:w-2/3">
                <div class="mb-6 text-center bg-blue-50 py-4 px-6 rounded-lg border-b-4 border-blue-200">
                    <h1 class="text-3xl font-bold text-blue-800 mb-2">🗒️ Pendaftaran Siswa Baru</h1>
                    <p class="text-base text-blue-600">Mohon lengkapi seluruh data dengan benar</p>
                </div>

                <form id="registrationForm" method="POST" action="{{ route('register.store') }}" class="space-y-2"
                    novalidate>
                    @csrf

                    <!-- Nama Lengkap -->
                    <div class="flex border border-gray-300 rounded-md mb-2 overflow-hidden">
                        <span class="bg-gray-200 px-3 flex items-center justify-center">
                            <i class="fas fa-user text-gray-700" aria-hidden="true"></i>
                        </span>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap"
                            aria-label="Nama Lengkap" aria-required="true" value="{{ old('nama_lengkap') }}"
                            class="flex-1 p-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <p id="nama-error" class="text-sm text-red-600 hidden">Nama lengkap harus diisi</p>

                    <!-- Tempat Lahir dan Tanggal Lahir -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div>
                            <div class="flex border border-gray-300 rounded-md mb-2 overflow-hidden">
                                <span class="bg-gray-200 px-3 flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-gray-700" aria-hidden="true"></i>
                                </span>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"
                                    aria-label="Tempat Lahir" aria-required="true" value="{{ old('tempat_lahir') }}"
                                    class="flex-1 p-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                            </div>
                            <p id="tempat-lahir-error" class="text-sm text-red-600 hidden">Tempat lahir harus diisi</p>
                        </div>

                        <div>
                            <div class="flex border border-gray-300 rounded-md mb-2 overflow-hidden">
                                <span class="bg-gray-200 px-3 flex items-center justify-center">
                                    <i class="fas fa-calendar-alt text-gray-700" aria-hidden="true"></i>
                                </span>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir"
                                    placeholder="Tanggal Lahir" aria-label="Tanggal Lahir" aria-required="true"
                                    value="{{ old('tanggal_lahir') }}"
                                    class="flatpickr flex-1 p-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                            </div>
                            <p id="tanggal-lahir-error" class="text-sm text-red-600 hidden">Tanggal lahir harus diisi
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex border border-gray-300 rounded-md mb-2 overflow-hidden">
                        <span class="bg-gray-200 px-3 flex items-center justify-center">
                            <i class="fas fa-envelope text-gray-700" aria-hidden="true"></i>
                        </span>
                        <input type="email" name="email" id="email" placeholder="Email" aria-label="Email"
                            aria-required="true" value="{{ old('email') }}"
                            class="flex-1 p-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <p id="email-error" class="text-sm text-red-600 hidden">Email tidak valid</p>

                    <!-- No HP Siswa dan Orang Tua -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div>
                            <div class="flex border border-gray-300 rounded-md mb-2 overflow-hidden">
                                <span class="bg-gray-200 px-3 flex items-center justify-center">
                                    <i class="fas fa-phone text-gray-700" aria-hidden="true"></i>
                                </span>
                                <input type="tel" name="no_hp_siswa" id="no_hp_siswa" placeholder="No HP Siswa"
                                    aria-label="No HP Siswa" aria-required="true" value="{{ old('no_hp_siswa') }}"
                                    class="flex-1 p-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                            </div>
                            <p id="no-hp-siswa-error" class="text-sm text-red-600 hidden">No HP siswa tidak valid</p>
                        </div>

                        <div>
                            <div class="flex border border-gray-300 rounded-md mb-2 overflow-hidden">
                                <span class="bg-gray-200 px-3 flex items-center justify-center">
                                    <i class="fas fa-phone text-gray-700" aria-hidden="true"></i>
                                </span>
                                <input type="tel" name="no_hp_orang_tua" id="no_hp_orang_tua"
                                    placeholder="No HP Orang Tua" aria-label="No HP Orang Tua" aria-required="true"
                                    value="{{ old('no_hp_orang_tua') }}"
                                    class="flex-1 p-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                            </div>
                            <p id="no-hp-orang-tua-error" class="text-sm text-red-600 hidden">No HP orang tua tidak
                                valid</p>
                        </div>
                    </div>

                    <!-- NISN -->
                    <div class="flex border border-gray-300 rounded-md mb-2 overflow-hidden">
                        <span class="bg-gray-200 px-3 flex items-center justify-center">
                            <i class="fas fa-id-card text-gray-700" aria-hidden="true"></i>
                        </span>
                        <input type="text" name="nisn" id="nisn" placeholder="NISN" aria-label="NISN"
                            aria-required="true" value="{{ old('nisn') }}"
                            class="flex-1 p-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <p id="nisn-error" class="text-sm text-red-600 hidden">NISN harus diisi</p>

                    <!-- Asal Sekolah -->
                    <div class="flex border border-gray-300 rounded-md mb-2 overflow-hidden">
                        <span class="bg-gray-200 px-3 flex items-center justify-center">
                            <i class="fas fa-school text-gray-700" aria-hidden="true"></i>
                        </span>
                        <input type="text" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah"
                            aria-label="Asal Sekolah" aria-required="true" value="{{ old('asal_sekolah') }}"
                            class="flex-1 p-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <p id="asal-sekolah-error" class="text-sm text-red-600 hidden">Asal sekolah harus diisi</p>

                    <!-- Checkbox Syarat -->
                    <div class="flex items-center mt-4">
                        <input id="setuju_syarat" name="setuju_syarat" type="checkbox"
                            aria-label="Setuju syarat dan ketentuan"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="setuju_syarat" class="ml-2 block text-sm text-gray-700">
                            Saya menyatakan bahwa data yang saya berikan adalah benar
                        </label>
                    </div>

                    <!-- Submit -->
                    <div class="mt-6">
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-6 border border-transparent rounded-xl shadow-md text-lg font-bold text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:shadow-lg active:scale-[0.98]">
                            Kirim Pendaftaran
                        </button>
                    </div>
                </form>
                <div class="mt-4">
                    <a href="{{ route('landing') }}"
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Pendaftaran Berhasil!',
                    text: @json(session('success')),
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('login') }}";
                    }
                });
            @endif
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const submitBtn = form.querySelector('button[type="submit"]');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;

                // Clear previous error messages
                const errorMessages = document.querySelectorAll('.text-red-600');
                errorMessages.forEach(msg => msg.classList.add('hidden'));

                // Validate Nama Lengkap
                const nama = document.getElementById('nama_lengkap');
                if (!nama.value.trim()) {
                    showError(nama, 'nama-error', 'Nama lengkap harus diisi');
                    isValid = false;
                }

                // Validate Tempat Lahir
                const tempatLahir = document.getElementById('tempat_lahir');
                if (!tempatLahir.value.trim()) {
                    showError(tempatLahir, 'tempat-lahir-error', 'Tempat lahir harus diisi');
                    isValid = false;
                }

                // Validate Tanggal Lahir
                const tanggalLahir = document.getElementById('tanggal_lahir');
                if (!tanggalLahir.value) {
                    showError(tanggalLahir, 'tanggal-lahir-error', 'Tanggal lahir harus diisi');
                    isValid = false;
                }

                // Validate Email
                const email = document.getElementById('email');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email.value.trim() || !emailRegex.test(email.value)) {
                    showError(email, 'email-error', 'Email tidak valid');
                    isValid = false;
                }

                // Validate No HP Siswa
                const noHpSiswa = document.getElementById('no_hp_siswa');
                const noHpRegex = /^[0-9]{10,15}$/;
                if (!noHpSiswa.value.trim() || !noHpRegex.test(noHpSiswa.value)) {
                    showError(noHpSiswa, 'no-hp-siswa-error', 'No HP siswa tidak valid');
                    isValid = false;
                }

                // Validate No HP Orang Tua
                const noHpOrangTua = document.getElementById('no_hp_orang_tua');
                if (!noHpOrangTua.value.trim() || !noHpRegex.test(noHpOrangTua.value)) {
                    showError(noHpOrangTua, 'no-hp-orang-tua-error', 'No HP orang tua tidak valid');
                    isValid = false;
                }

                // Validate NISN
                const nisn = document.getElementById('nisn');
                if (!nisn.value.trim()) {
                    showError(nisn, 'nisn-error', 'NISN harus diisi');
                    isValid = false;
                }

                // Validate Asal Sekolah
                const asalSekolah = document.getElementById('asal_sekolah');
                if (!asalSekolah.value.trim()) {
                    showError(asalSekolah, 'asal-sekolah-error', 'Asal sekolah harus diisi');
                    isValid = false;
                }

                if (isValid) {
                    // Only validate checkbox if all other fields are valid
                    const setujuSyarat = document.getElementById('setuju_syarat');
                    if (!setujuSyarat.checked) {
                        alert('Anda harus menyetujui syarat dan ketentuan.');
                        isValid = false;
                        form.classList.add('shake');
                        setTimeout(() => {
                            form.classList.remove('shake');
                        }, 500);
                        return false;
                    }
                    form.submit();
                } else {
                    form.classList.add('shake');
                    setTimeout(() => {
                        form.classList.remove('shake');
                    }, 500);
                }
            });

            function showError(input, errorId, message) {
                const errorElement = document.getElementById(errorId);
                errorElement.textContent = message;
                errorElement.classList.remove('hidden');
                input.classList.add('input-error');
            }

            function clearError(input, errorId) {
                const errorElement = document.getElementById(errorId);
                errorElement.classList.add('hidden');
                input.classList.remove('input-error');
            }

            const inputsToValidate = [{
                    id: 'nama_lengkap',
                    errorId: 'nama-error'
                },
                {
                    id: 'tempat_lahir',
                    errorId: 'tempat-lahir-error'
                },
                {
                    id: 'tanggal_lahir',
                    errorId: 'tanggal-lahir-error'
                },
                {
                    id: 'email',
                    errorId: 'email-error'
                },
                {
                    id: 'no_hp_siswa',
                    errorId: 'no-hp-siswa-error'
                },
                {
                    id: 'no_hp_orang_tua',
                    errorId: 'no-hp-orang-tua-error'
                },
                {
                    id: 'nisn',
                    errorId: 'nisn-error'
                },
                {
                    id: 'asal_sekolah',
                    errorId: 'asal-sekolah-error'
                }
            ];

            inputsToValidate.forEach(item => {
                const input = document.getElementById(item.id);
                input.addEventListener('input', () => {
                    input.classList.remove('input-error');
                    input.classList.remove('input-success');
                    const error = document.getElementById(item.errorId);
                    error.classList.add('hidden');

                    // Tambahkan validasi dinamis jika perlu
                    if (item.id === 'email') {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (emailRegex.test(input.value.trim())) {
                            input.classList.add('input-success');
                        }
                    } else if (item.id === 'no_hp_siswa' || item.id === 'no_hp_orang_tua') {
                        const noHpRegex = /^[0-9]{10,15}$/;
                        if (noHpRegex.test(input.value.trim())) {
                            input.classList.add('input-success');
                        }
                    } else if (item.id === 'nisn') {
                        const nisnRegex = /^[0-9]{10}$/;
                        if (nisnRegex.test(input.value.trim())) {
                            input.classList.add('input-success');
                        }
                    } else {
                        if (input.value.trim()) {
                            input.classList.add('input-success');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
