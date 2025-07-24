@extends('layouts.app')

@section('title', 'Upload Pembayaran TPA')

@section('content')
    <!-- Content -->
    <div class="flex">
        <main class="flex-1 p-4">
            <!-- Information Card -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6 border-l-4 border-primary">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-full mr-4">
                            <i class="fas fa-info-circle text-blue-500 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Penting</h3>
                            <p class="text-gray-600">
                                Harap upload bukti pembayaran Tes Potensi Akademik dalam format JPG, PNG, atau PDF
                                dengan ukuran maksimal 2MB.
                                Pastikan foto/tanda bukti pembayaran terlihat jelas.
                            </p>
                        </div>
                    </div>
                    @if ($pembayaran && $pembayaran->bukti)
                        <div class="mt-4 md:mt-0 md:ml-4 shrink-0">
                            <button type="button" onclick="lihatBukti('{{ asset('storage/' . $pembayaran->bukti) }}')"
                                class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 w-full md:w-auto">
                                Lihat Bukti Pembayaran
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <div x-data="{ showForm: {{ $pembayaran ? 'false' : 'true' }} }" x-ref="uploadFormContainer">
                {{-- Jika sudah pernah upload --}}
                @if ($pembayaran)
                    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Bukti Sudah Diupload</h3>

                        <p class="text-sm text-gray-600 mb-2">Status:
                            <span class="font-semibold text-yellow-600">{{ ucfirst($pembayaran->status) }}</span>
                        </p>

                        <div>
                            <button x-on:click="showForm ? showForm = false : konfirmasiUploadUlang($event)"
                                class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                <span x-text="showForm ? 'Sembunyikan Form' : 'Upload Ulang'"></span>
                            </button>
                        </div>
                    </div>
                @endif

                {{-- Form Upload / Upload Ulang --}}
                <div x-show="showForm" x-cloak>
                    <!-- Upload Section -->
                    <form data-turbo="false" action="{{ route('siswa.pembayaran.tpa.store') }}" method="POST"
                        enctype="multipart/form-data" class="bg-white rounded-lg shadow-md overflow-hidden">
                        @csrf
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-800">Form Upload Bukti Pembayaran</h2>
                        </div>
                        <div class="p-6">
                            <!-- Payment Info -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="nomor-peserta">
                                        Nomor Peserta
                                    </label>
                                    <input type="text" id="nomor-peserta"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                        value="TPA-2023-00123" readonly>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="nama-peserta">
                                        Nama Peserta
                                    </label>
                                    <input type="text" id="nama-peserta"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                        value="John Doe" readonly>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="bank-tujuan">
                                        Bank Tujuan
                                    </label>
                                    <select name="bank_tujuan" id="bank-tujuan"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                        <option value="">Pilih Bank</option>
                                        <option value="bca">BCA</option>
                                        <option value="bni">BNI</option>
                                        <option value="bri">BRI</option>
                                        <option value="mandiri">Mandiri</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2" for="nominal">
                                        Nominal Pembayaran
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-2 text-gray-500">Rp</span>
                                        <input type="text" name="nominal" id="nominal"
                                            class="w-full px-8 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                            placeholder="250.000">
                                    </div>
                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-medium mb-2">
                                    Upload Bukti Pembayaran
                                </label>
                                <div id="upload-area"
                                    class="border-2 border-dashed border-gray-300 rounded-lg p-10 text-center cursor-pointer hover:border-primary transition duration-300">
                                    <div class="max-w-xs mx-auto">
                                        <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-3"></i>
                                        <h4 class="font-medium text-lg text-gray-700 mb-1">Klik untuk upload atau tarik file
                                            ke sini</h4>
                                        <p class="text-sm text-gray-500 mb-3">Format: JPG, PNG, PDF (Maks. 2MB)</p>
                                        <input type="file" name="bukti" id="file-upload" class="hidden"
                                            accept="image/*,.pdf">
                                        <button type="button" id="pick-file-btn"
                                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                                            Pilih File
                                        </button>
                                    </div>
                                </div>
                                <div id="file-info" class="mt-3 hidden">
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-md">
                                        <div class="flex items-center">
                                            <i class="fas fa-file-image text-primary mr-3"></i>
                                            <span id="file-name" class="font-medium"></span>
                                        </div>
                                        <button id="remove-file" class="text-gray-500 hover:text-red-500">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button id="submit-btn" type="submit"
                                    class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 disabled:opacity-50 disabled:cursor-not-allowed flex items-center"
                                    disabled>
                                    <i class="fas fa-paper-plane mr-2"></i> Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Bank Accounts -->
            <div class="bg-white rounded-lg shadow-md mt-6 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Rekening Pembayaran</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="border rounded-lg p-4 hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-3">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f2551823-a3f7-45c1-91f4-696ca6baf852.png"
                                alt="Logo Bank BCA berwarna biru dengan ikon segitiga"
                                class="h-8 w-8 object-contain mr-2">
                            <h3 class="font-medium">BCA</h3>
                        </div>
                        <p class="text-gray-600 text-sm">A/N: Universitas Pendidikan Indonesia</p>
                        <p class="font-semibold text-gray-800 mt-2">1234567890</p>
                    </div>
                    <div class="border rounded-lg p-4 hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-3">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/79c6b64f-0c4f-4267-bd51-adc00bb54e2a.png"
                                alt="Logo Bank BNI berwarna hijau dengan ikon bintang"
                                class="h-8 w-8 object-contain mr-2">
                            <h3 class="font-medium">BNI</h3>
                        </div>
                        <p class="text-gray-600 text-sm">A/N: Universitas Pendidikan Indonesia</p>
                        <p class="font-semibold text-gray-800 mt-2">9876543210</p>
                    </div>
                    <div class="border rounded-lg p-4 hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-3">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cc63b618-2dd4-452d-8489-efc5b7b8a0d5.png"
                                alt="Logo Bank Mandiri berwarna merah dengan ikon superblok"
                                class="h-8 w-8 object-contain mr-2">
                            <h3 class="font-medium">Mandiri</h3>
                        </div>
                        <p class="text-gray-600 text-sm">A/N: Universitas Pendidikan Indonesia</p>
                        <p class="font-semibold text-gray-800 mt-2">5678901234</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            console.log('✅ Alpine aktif');
        });
    </script>
    <script>
        function lihatBukti(fileUrl) {
            const isPdf = fileUrl.endsWith('.pdf');

            Swal.fire({
                title: 'Bukti Pembayaran',
                html: isPdf ?
                    `<iframe src="${fileUrl}" width="100%" height="500px" style="border:none;"></iframe>` :
                    `<img src="${fileUrl}" alt="Bukti Pembayaran" class="w-full rounded" />`,
                width: '90%', // lebih fleksibel di mobile
                customClass: {
                    title: 'text-lg md:text-xl font-semibold',
                },
                showCloseButton: true,
                showConfirmButton: false,
            });
        }

        function konfirmasiUploadUlang(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Upload Ulang?',
                text: "Data bukti pembayaran sebelumnya akan digantikan.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Lanjutkan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    const el = document.querySelector('[x-ref="uploadFormContainer"]');
                    if (el) {
                        try {
                            Alpine.store('upload')?.setVisible?.(); // jika pakai Alpine store
                            Alpine.$data(el).showForm = true;
                        } catch (error) {
                            console.error('Gagal akses Alpine:', error);
                        }
                    }
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Upload Bukti Berhasil!',
                    text: @json(session('success')),
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            @endif
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // File Upload Handling
            const uploadArea = document.getElementById('upload-area');
            const fileUpload = document.getElementById('file-upload');
            const fileInfo = document.getElementById('file-info');
            const fileName = document.getElementById('file-name');
            const removeFile = document.getElementById('remove-file');
            const submitBtn = document.getElementById('submit-btn');
            const form = document.querySelector('form');

            // Click upload area to trigger file input
            uploadArea.addEventListener('click', function() {
                fileUpload.click();
            });

            // File input change event
            fileUpload.addEventListener('change', function(e) {
                if (e.target.files.length > 0) {
                    const file = e.target.files[0];
                    const fileSize = file.size / 1024 / 1024; // MB

                    // Check file size
                    if (fileSize > 2) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Upload Gagal',
                            text: 'Ukuran file terlalu besar. Maksimal 2MB',
                        });
                        return;
                    }

                    // Check file type
                    const validTypes = ['image/jpeg', 'image/png', 'application/pdf'];
                    if (!validTypes.includes(file.type)) {
                        alert('Format file tidak didukung. Harap upload JPG, PNG, atau PDF');
                        return;
                    }

                    // Show file info
                    fileName.textContent = file.name;
                    fileInfo.classList.remove('hidden');
                    uploadArea.classList.add('hidden');

                    // Enable submit button if all required fields are filled
                    if (document.getElementById('bank-tujuan').value && document.getElementById('nominal')
                        .value) {
                        submitBtn.disabled = false;
                    }
                }
            });

            // Remove file
            removeFile.addEventListener('click', function() {
                fileUpload.value = '';
                fileInfo.classList.add('hidden');
                uploadArea.classList.remove('hidden');
                submitBtn.disabled = true;
            });

            // Form validation for submit button
            document.getElementById('bank-tujuan').addEventListener('change', checkForm);
            document.getElementById('nominal').addEventListener('input', checkForm);

            function checkForm() {
                if (fileUpload.files.length > 0 &&
                    document.getElementById('bank-tujuan').value &&
                    document.getElementById('nominal').value) {
                    submitBtn.disabled = false;
                } else {
                    submitBtn.disabled = true;
                }
            }

            // Drag and drop functionality
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                uploadArea.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                uploadArea.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                uploadArea.addEventListener(eventName, unhighlight, false);
            });

            function highlight() {
                uploadArea.classList.add('border-primary', 'bg-blue-50');
            }

            function unhighlight() {
                uploadArea.classList.remove('border-primary', 'bg-blue-50');
            }

            uploadArea.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                fileUpload.files = files;
                const event = new Event('change');
                fileUpload.dispatchEvent(event);
            }
        });
    </script>
@endsection
