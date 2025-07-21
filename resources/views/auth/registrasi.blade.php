<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun Calon Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #ebf8ff 0%, #93c5fd 100%);
        }

        .input-error {
            border-color: #ef4444;
        }

        .error-message {
            color: #dc2626;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            padding: 0.25rem 0.5rem;
            background-color: #fee2e2;
            border-radius: 0.25rem;
            opacity: 0;
            transition: all 0.2s ease-in-out;
        }

        .error-message.show {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="gradient-bg py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden border border-blue-100">
            <div class="md:flex">
                <div class="md:flex-shrink-0 bg-indigo-50 flex items-center justify-center p-6 md:w-2/5">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6d9e570e-40b7-4855-a2cf-aca1ce0d0cc5.png"
                        alt="Ilustrasi digital pendidikan modern dengan siswa dan laptop"
                        class="w-full object-contain" />
                </div>
                <div class="p-10 md:w-3/5">
                    <div class="mb-6 text-center bg-blue-50 py-4 px-6 rounded-lg border-b-4 border-blue-200">
                        <h1 class="text-3xl font-bold text-blue-800 mb-2">🗒️ Pendaftaran Siswa Baru</h1>
                        <p class="text-base text-blue-600">Mohon lengkapi seluruh data dengan benar</p>
                    </div>

                    <form id="registrationForm" class="space-y-6">
                        <div>
                            <label for="fullName" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" id="fullName" name="fullName"
                                class="mt-1 block w-full px-4 py-3 text-lg border border-blue-100 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-300 transition duration-200 bg-blue-50 text-blue-900"
                                required>
                            <p id="fullNameError" class="error-message hidden">Nama lengkap harus diisi</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="birthPlace" class="block text-sm font-medium text-gray-700">Tempat
                                    Lahir</label>
                                <input type="text" id="birthPlace" name="birthPlace"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                                <p id="birthPlaceError" class="error-message hidden">Tempat lahir harus diisi</p>
                            </div>
                            <div>
                                <label for="birthDate" class="block text-sm font-medium text-gray-700">Tanggal
                                    Lahir</label>
                                <input type="date" id="birthDate" name="birthDate"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                                <p id="birthDateError" class="error-message hidden">Tanggal lahir harus diisi</p>
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                required>
                            <p id="emailError" class="error-message hidden">Email harus valid</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="studentPhone" class="block text-sm font-medium text-gray-700">No HP
                                    Siswa</label>
                                <input type="tel" id="studentPhone" name="studentPhone"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                                <p id="studentPhoneError" class="error-message hidden">Nomor HP siswa harus diisi</p>
                            </div>
                            <div>
                                <label for="parentPhone" class="block text-sm font-medium text-gray-700">No HP Orang
                                    Tua</label>
                                <input type="tel" id="parentPhone" name="parentPhone"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                                <p id="parentPhoneError" class="error-message hidden">Nomor HP orang tua harus diisi</p>
                            </div>
                        </div>

                        <div>
                            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                            <input type="text" id="nisn" name="nisn"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                required>
                            <p id="nisnError" class="error-message hidden">NISN harus diisi</p>
                        </div>

                        <div>
                            <label for="schoolOrigin" class="block text-sm font-medium text-gray-700">Asal
                                Sekolah</label>
                            <input type="text" id="schoolOrigin" name="schoolOrigin"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                required>
                            <p id="schoolOriginError" class="error-message hidden">Asal sekolah harus diisi</p>
                        </div>

                        <div class="flex items-center">
                            <input id="agreeTerms" name="agreeTerms" type="checkbox"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" required>
                            <label for="agreeTerms" class="ml-2 block text-sm text-gray-700">
                                Saya menyatakan bahwa data yang saya berikan adalah benar
                            </label>
                        </div>
                        <p id="agreeTermsError" class="error-message hidden">Anda harus menyetujui pernyataan ini</p>

                        <div class="mt-6">
                            <button type="submit"
                                class="w-full flex justify-center py-4 px-6 border border-transparent rounded-xl shadow-md text-lg font-bold text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:shadow-lg active:scale-[0.98]">
                                Kirim Pendaftaran
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;

            // Reset error states
            document.querySelectorAll('.error-message').forEach(el => el.classList.remove('show'));
            document.querySelectorAll('input').forEach(el => el.classList.remove('input-error'));

            // Validate each field
            const fullName = document.getElementById('fullName');
            if (!fullName.value.trim()) {
                fullName.classList.add('input-error');
                document.getElementById('fullNameError').classList.add('show');
                isValid = false;
            }

            const birthPlace = document.getElementById('birthPlace');
            if (!birthPlace.value.trim()) {
                birthPlace.classList.add('input-error');
                document.getElementById('birthPlaceError').classList.remove('hidden');
                isValid = false;
            }

            const birthDate = document.getElementById('birthDate');
            if (!birthDate.value) {
                birthDate.classList.add('input-error');
                document.getElementById('birthDateError').classList.remove('hidden');
                isValid = false;
            }

            const email = document.getElementById('email');
            if (!email.value.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                email.classList.add('input-error');
                document.getElementById('emailError').classList.remove('hidden');
                isValid = false;
            }

            const studentPhone = document.getElementById('studentPhone');
            if (!studentPhone.value.trim()) {
                studentPhone.classList.add('input-error');
                document.getElementById('studentPhoneError').classList.remove('hidden');
                isValid = false;
            }

            const parentPhone = document.getElementById('parentPhone');
            if (!parentPhone.value.trim()) {
                parentPhone.classList.add('input-error');
                document.getElementById('parentPhoneError').classList.remove('hidden');
                isValid = false;
            }

            const nisn = document.getElementById('nisn');
            if (!nisn.value.trim()) {
                nisn.classList.add('input-error');
                document.getElementById('nisnError').classList.remove('hidden');
                isValid = false;
            }

            const schoolOrigin = document.getElementById('schoolOrigin');
            if (!schoolOrigin.value.trim()) {
                schoolOrigin.classList.add('input-error');
                document.getElementById('schoolOriginError').classList.remove('hidden');
                isValid = false;
            }

            const agreeTerms = document.getElementById('agreeTerms');
            if (!agreeTerms.checked) {
                document.getElementById('agreeTermsError').classList.remove('hidden');
                isValid = false;
            }

            if (isValid) {
                // Form is valid, proceed with submission
                alert('Formulir berhasil dikirim! Data akan diproses.');
                // Here you would typically send data to server
                // this.submit();
            }
        });
    </script>
</body>

</html>
