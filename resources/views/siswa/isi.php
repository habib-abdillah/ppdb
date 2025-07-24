<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Bukti Pembayaran TPA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#3b82f6',
            secondary: '#1e40af',
            accent: '#10b981',
          }
        }
      }
    }
  </script>
</head>

<body class="bg-gray-100">
  <!-- Main Container -->
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-lg">
      <div class="p-4 border-b border-gray-200">
        <h2 class="text-xl font-semibold text-gray-800">TPA Online</h2>
      </div>
      <nav class="mt-4">
        <a href="#" class="block px-4 py-2 text-gray-700 bg-blue-50 border-l-4 border-primary">
          <i class="fas fa-home mr-2"></i> Dashboard
        </a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 border-l-4 border-transparent hover:border-primary">
          <i class="fas fa-user mr-2"></i> Profil
        </a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 border-l-4 border-transparent hover:border-primary">
          <i class="fas fa-calendar-alt mr-2"></i> Jadwal
        </a>
        <a href="#" class="block px-4 py-2 text-primary font-medium bg-blue-50 border-l-4 border-primary">
          <i class="fas fa-file-upload mr-2"></i> Upload Pembayaran
        </a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 border-l-4 border-transparent hover:border-primary">
          <i class="fas fa-file-alt mr-2"></i> Hasil Tes
        </a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Header -->
      <header class="bg-white shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
          <h1 class="text-2xl font-bold text-gray-800">Upload Bukti Pembayaran</h1>
          <div class="flex items-center space-x-4">
            <div class="relative">
              <button class="flex items-center space-x-2 text-gray-600 hover:text-gray-900">
                <i class="fas fa-user-circle text-2xl"></i>
                <span class="hidden md:inline-block">John Doe</span>
              </button>
            </div>
          </div>
        </div>
      </header>

      <!-- Content -->
      <main class="flex-1 overflow-y-auto p-6">
        <div class="max-w-4xl mx-auto">
          <!-- Information Card -->
          <div class="bg-white rounded-lg shadow-md p-6 mb-6 border-l-4 border-primary">
            <div class="flex items-start">
              <div class="bg-blue-100 p-2 rounded-full mr-4">
                <i class="fas fa-info-circle text-blue-500 text-xl"></i>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Penting</h3>
                <p class="text-gray-600">
                  Harap upload bukti pembayaran Tes Potensi Akademik dalam format JPG, PNG, atau PDF dengan ukuran maksimal 2MB.
                  Pastikan foto/tanda bukti pembayaran terlihat jelas.
                </p>
              </div>
            </div>
          </div>

          <!-- Upload Section -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
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
                  <input
                    type="text"
                    id="nomor-peserta"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    value="TPA-2023-00123"
                    readonly>
                </div>
                <div>
                  <label class="block text-gray-700 text-sm font-medium mb-2" for="nama-peserta">
                    Nama Peserta
                  </label>
                  <input
                    type="text"
                    id="nama-peserta"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    value="John Doe"
                    readonly>
                </div>
                <div>
                  <label class="block text-gray-700 text-sm font-medium mb-2" for="bank-tujuan">
                    Bank Tujuan
                  </label>
                  <select
                    id="bank-tujuan"
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
                    <input
                      type="text"
                      id="nominal"
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
                <div id="upload-area" class="border-2 border-dashed border-gray-300 rounded-lg p-10 text-center cursor-pointer hover:border-primary transition duration-300">
                  <div class="max-w-xs mx-auto">
                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-3"></i>
                    <h4 class="font-medium text-lg text-gray-700 mb-1">Klik untuk upload atau tarik file ke sini</h4>
                    <p class="text-sm text-gray-500 mb-3">Format: JPG, PNG, PDF (Maks. 2MB)</p>
                    <input type="file" id="file-upload" class="hidden" accept="image/*,.pdf">
                    <button class="bg-primary text-white px-4 py-2 rounded-md hover:bg-secondary transition duration-300">
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
                <button
                  id="submit-btn"
                  class="bg-primary text-white px-6 py-2 rounded-md hover:bg-secondary transition duration-300 flex items-center disabled:opacity-50 disabled:cursor-not-allowed"
                  disabled>
                  <i class="fas fa-paper-plane mr-2"></i> Kirim
                </button>
              </div>
            </div>
          </div>

          <!-- Bank Accounts -->
          <div class="bg-white rounded-lg shadow-md mt-6 p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Rekening Pembayaran</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div class="border rounded-lg p-4 hover:shadow-md transition duration-300">
                <div class="flex items-center mb-3">
                  <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f2551823-a3f7-45c1-91f4-696ca6baf852.png" alt="Logo Bank BCA berwarna biru dengan ikon segitiga" class="h-8 w-8 object-contain mr-2">
                  <h3 class="font-medium">BCA</h3>
                </div>
                <p class="text-gray-600 text-sm">A/N: Universitas Pendidikan Indonesia</p>
                <p class="font-semibold text-gray-800 mt-2">1234567890</p>
              </div>
              <div class="border rounded-lg p-4 hover:shadow-md transition duration-300">
                <div class="flex items-center mb-3">
                  <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/79c6b64f-0c4f-4267-bd51-adc00bb54e2a.png" alt="Logo Bank BNI berwarna hijau dengan ikon bintang" class="h-8 w-8 object-contain mr-2">
                  <h3 class="font-medium">BNI</h3>
                </div>
                <p class="text-gray-600 text-sm">A/N: Universitas Pendidikan Indonesia</p>
                <p class="font-semibold text-gray-800 mt-2">9876543210</p>
              </div>
              <div class="border rounded-lg p-4 hover:shadow-md transition duration-300">
                <div class="flex items-center mb-3">
                  <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cc63b618-2dd4-452d-8489-efc5b7b8a0d5.png" alt="Logo Bank Mandiri berwarna merah dengan ikon superblok" class="h-8 w-8 object-contain mr-2">
                  <h3 class="font-medium">Mandiri</h3>
                </div>
                <p class="text-gray-600 text-sm">A/N: Universitas Pendidikan Indonesia</p>
                <p class="font-semibold text-gray-800 mt-2">5678901234</p>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // File Upload Handling
      const uploadArea = document.getElementById('upload-area');
      const fileUpload = document.getElementById('file-upload');
      const fileInfo = document.getElementById('file-info');
      const fileName = document.getElementById('file-name');
      const removeFile = document.getElementById('remove-file');
      const submitBtn = document.getElementById('submit-btn');

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
            alert('Ukuran file terlalu besar. Maksimal 2MB');
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
          document.getElementById('success-filename').textContent = file.name;
          fileInfo.classList.remove('hidden');
          uploadArea.classList.add('hidden');

          // Enable submit button if all required fields are filled
          if (document.getElementById('bank-tujuan').value && document.getElementById('nominal').value) {
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

      // Submit button click
      submitBtn.addEventListener('click', function() {
        // Simulate form submission
        this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Memproses...';
        this.disabled = true;

        setTimeout(() => {
          // Show success section
          document.getElementById('success-section').classList.remove('hidden');
          this.innerHTML = '<i class="fas fa-check mr-2"></i> Berhasil';
          // Scroll to success section
          document.getElementById('success-section').scrollIntoView({
            behavior: 'smooth'
          });
        }, 3000);
      });

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
</body>

</html>