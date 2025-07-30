@php
    $step = request('step', 1);
    $dp = $daftarUlang?->dataPribadi;
    $ak = $daftarUlang?->alamatKontak;
    $ot = $daftarUlang?->orangTua;
    $sa = $daftarUlang?->sekolahAsal;
    $ss = $daftarUlang?->statusSantri;
    $it = $daftarUlang?->informasiTambahan;
    $dd = $daftarUlang?->dokumenDaftarUlang;

    $readonly = $daftarUlang?->is_complete == 1;
@endphp
<div class="flex-1 px-6" x-data="{ step: {{ $step }} }">
    <div class="bg-white rounded-lg shadow-xl p-8 mb-8 border-l-4 border-blue-500">
        @if ($readonly)
            <div class="mb-6 bg-yellow-100 text-yellow-800 px-4 py-3 rounded border-l-4 border-yellow-500">
                <strong>Perhatian!</strong> Formulir telah dikunci karena sudah dikirim dan sedang menunggu verifikasi
                admin.
                Anda tidak dapat mengubah data lagi.
            </div>
        @endif
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Formulir Daftar Ulang</h1>
            <p class="text-gray-600">Langkah <span x-text="step"></span> dari 8</p>
        </div>

        <!-- Stepper Indicator -->
        <div class="flex space-x-2 mb-8">
            <template x-for="s in 8" :key="s">
                <div :class="{
                    'bg-blue-600 text-white': step === s,
                    'bg-gray-200 text-gray-600': step !== s
                }"
                    class="w-10 h-10 flex items-center justify-center rounded-full text-lg font-semibold transition-all duration-200 cursor-default">
                    <span x-text="s"></span>
                </div>
            </template>
        </div>
        <div class="w-full bg-gray-200 h-2 rounded mb-6">
            <div class="h-2 bg-blue-500 rounded transition-all duration-300" :style="`width: ${(step / 8) * 100}%`">
            </div>
        </div>

        <form action="{{ route('siswa.du.store') }}" method="POST" enctype="multipart/form-data" x-ref="form">
            @csrf
            <input type="hidden" name="step" :value="step">
            <input type="hidden" name="draft" x-ref="draft">

            {{-- STEP 1 --}}
            <div x-show="step === 1" class="space-y-6" x-transition>
                <x-input label="Nama Lengkap" name="nama" :value="auth()->user()->name" readonly required />
                <x-input label="NISN" name="nisn" :value="$dp?->nisn" :disabled="$readonly" required />
                <x-input label="Tempat Lahir" name="tempat_lahir" :value="$dp?->tempat_lahir" :disabled="$readonly" required />
                <x-input label="Tanggal Lahir" name="tanggal_lahir" type="date" :value="$dp?->tanggal_lahir" :disabled="$readonly"
                    required />
                <x-select label="Jenis Kelamin" name="jk" :options="['L' => 'Laki-laki', 'P' => 'Perempuan']" :value="$dp?->jk" :disabled="$readonly"
                    required />
                <x-input label="NIK Siswa" name="nik_siswa" :value="$dp?->nik_siswa" :disabled="$readonly" required />
                <x-input label="Nomor KK" name="kk" :value="$dp?->kk" :disabled="$readonly" required />
                <x-input label="Anak Ke-" name="anak_ke" type="number" :value="$dp?->anak_ke" :disabled="$readonly"
                    required />
                <x-input label="Dari berapa bersaudara" name="saudara" type="number" :value="$dp?->saudara"
                    :disabled="$readonly" required />
                <x-select label="Status dalam Keluarga" name="status_keluarga" :options="['Kandung', 'Tiri', 'Angkat']" :value="$dp?->status_keluarga"
                    :disabled="$readonly" required />
                <x-input label="Bahasa Sehari-hari" name="bahasa" :value="$dp?->bahasa" :disabled="$readonly" required />
                <x-select label="Status Anak" name="status_anak" :options="['Lengkap', 'Yatim', 'Piatu', 'Yatim Piatu']" :value="$dp?->status_anak"
                    :disabled="$readonly" required />
                <div class="flex justify-end mt-8">
                    @if ($readonly)
                        <button type="button" @click="step++"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">
                            Lanjut
                        </button>
                    @else
                        <button type="button" @click="confirmLanjut()"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">Lanjut</button>
                    @endif
                </div>
            </div>

            {{-- STEP 2 --}}
            <div x-show="step === 2" class="space-y-6" x-transition>
                <x-textarea label="Alamat Lengkap" name="alamat" :value="$ak?->alamat" :disabled="$readonly" required />
                <x-input label="Desa/Kelurahan" name="desa" :value="$ak?->desa" :disabled="$readonly" required />
                <x-input label="Kecamatan" name="kecamatan" :value="$ak?->kecamatan" :disabled="$readonly" required />
                <x-input label="Kabupaten/Kota" name="kabupaten" :value="$ak?->kabupaten" :disabled="$readonly" required />
                <x-input label="Provinsi" name="provinsi" :value="$ak?->provinsi" :disabled="$readonly" required />
                <x-input label="Kode Pos" name="kode_pos" :value="$ak?->kode_pos" :disabled="$readonly" required />
                <x-input label="No. HP Siswa" name="hp_siswa" :value="$ak?->hp_siswa" :disabled="$readonly" />
                <x-input label="No. HP Orang Tua (Whatsapp)" name="hp_ortu" :value="$ak?->hp_ortu" :disabled="$readonly"
                    required />

                <div class="flex justify-between mt-8">
                    <button type="button" @click="step--"
                        class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400">Kembali</button>
                    @if ($readonly)
                        <button type="button" @click="step++"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">
                            Lanjut
                        </button>
                    @else
                        <button type="button" @click="confirmLanjut()"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">Lanjut</button>
                    @endif
                </div>
            </div>


            {{-- STEP 3 --}}
            <div x-show="step === 3" class="space-y-6" x-transition>
                <x-input label="NIK Ayah" name="nik_ayah" :value="$ot?->nik_ayah" :disabled="$readonly" required />
                <x-input label="Nama Ayah" name="ayah" :value="$ot?->ayah" :disabled="$readonly" required />
                <x-input label="Pekerjaan Ayah" name="pekerjaan_ayah" :value="$ot?->pekerjaan_ayah" :disabled="$readonly" required />
                <x-select label="Pendidikan Ayah" name="pendidikan_ayah" :value="$ot?->pendidikan_ayah" :options="['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']"
                    :disabled="$readonly" required />
                <x-input label="Penghasilan Ayah" name="penghasilan_ayah" :value="$ot?->penghasilan_ayah" :disabled="$readonly"
                    required />
                <x-input label="NIK Ibu" name="nik_ibu" :value="$ot?->nik_ibu" :disabled="$readonly" required />
                <x-input label="Nama Ibu" name="ibu" :value="$ot?->ibu" :disabled="$readonly" required />
                <x-input label="Pekerjaan Ibu" name="pekerjaan_ibu" :value="$ot?->pekerjaan_ibu" :disabled="$readonly" required />
                <x-select label="Pendidikan Ibu" name="pendidikan_ibu" :value="$ot?->pendidikan_ibu" :options="['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']"
                    :disabled="$readonly" required />
                <x-input label="Penghasilan Ibu" name="penghasilan_ibu" :value="$ot?->penghasilan_ibu" :disabled="$readonly"
                    required />
                <x-input label="Nama Wali (jika ada)" name="wali" :value="$ot?->wali" :disabled="$readonly" />
                <x-input label="Hubungan dengan Wali" name="hubungan_wali" :value="$ot?->hubungan_wali" :disabled="$readonly" />
                <x-input label="No HP Wali" name="hp_wali" :value="$ot?->hp_wali" :disabled="$readonly" />
                <div class="flex justify-between mt-8">
                    <button type="button" @click="step--"
                        class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400">Kembali</button>
                    @if ($readonly)
                        <button type="button" @click="step++"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">
                            Lanjut
                        </button>
                    @else
                        <button type="button" @click="confirmLanjut()"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">Lanjut</button>
                    @endif
                </div>
            </div>

            {{-- STEP 4 --}}
            <div x-show="step === 4" class="space-y-6" x-transition>
                <x-select label="Jenjang Sebelumnya" name="jenjang_asal" :value="$sa?->jenjang_asal" :options="['MTS', 'SMP', 'PKBM']"
                    :disabled="$readonly" required />
                <x-input label="Nama Sekolah Asal" name="sekolah_asal" :value="$sa?->sekolah_asal" :disabled="$readonly"
                    required />
                <x-select label="Status Sekolah" name="status_sekolah" :value="$sa?->status_sekolah" :options="['Negeri', 'Swasta']"
                    :disabled="$readonly" required />
                <x-input label="Alamat Sekolah Asal" name="alamat_sekolah" :value="$sa?->alamat_sekolah" :disabled="$readonly"
                    required />
                <x-input label="Tahun Lulus" name="tahun_lulus" :value="$sa?->tahun_lulus" :disabled="$readonly" required />
                <x-input label="NPSN/NSS Sekolah" name="npsn" :value="$sa?->npsn" :disabled="$readonly" />
                <div class="flex justify-between mt-8">
                    <button type="button" @click="step--"
                        class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400">Kembali</button>
                    @if ($readonly)
                        <button type="button" @click="step++"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">
                            Lanjut
                        </button>
                    @else
                        <button type="button" @click="confirmLanjut()"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">Lanjut</button>
                    @endif
                </div>
            </div>

            {{-- STEP 5 --}}
            <div x-show="step === 5" class="space-y-6" x-transition>
                <x-select label="Status Santri" name="status_santri" :value="$ss?->status_santri" :options="['Mukim', 'Pulang-Pergi']"
                    :disabled="$readonly" required />
                <x-input label="Tanggal Masuk Pondok" name="tanggal_masuk" type="date" :value="$ss?->tanggal_masuk"
                    :disabled="$readonly" required />
                <x-input label="Kamar" name="kamar" :value="$ss?->kamar" :disabled="$readonly" />
                <x-select label="Lembaga yang Diikuti" name="lembaga" :value="$ss?->lembaga" :options="['TPQ', 'Diniyah', 'MTs', 'MA', 'SMK']"
                    :disabled="$readonly" required />
                <x-input label="Hafalan Terakhir" name="hafalan_terakhir" :value="$ss?->hafalan_terakhir" :disabled="$readonly" />
                <x-input label="Rekomendasi Jurusan (opsional)" name="rekomendasi_jurusan" :value="$ss?->rekomendasi_jurusan"
                    :disabled="$readonly" />
                <div class="flex justify-between mt-8">
                    <button type="button" @click="step--"
                        class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400">Kembali</button>
                    @if ($readonly)
                        <button type="button" @click="step++"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">
                            Lanjut
                        </button>
                    @else
                        <button type="button" @click="confirmLanjut()"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">Lanjut</button>
                    @endif
                </div>
            </div>

            {{-- STEP 6 --}}
            <div x-show="step === 6" class="space-y-6" x-transition>
                <x-select label="Agama" name="agama" :value="$it?->agama" :options="[
                    'Islam' => 'Islam',
                    'Kristen' => 'Kristen',
                    'Katolik' => 'Katolik',
                    'Hindu' => 'Hindu',
                    'Buddha' => 'Buddha',
                    'Konghucu' => 'Konghucu',
                ]" :disabled="$readonly"
                    required />
                <x-select label="Status Tempat Tinggal" name="status_tempat_tinggal" :value="$it?->status_tempat_tinggal"
                    :disabled="$readonly" :options="[
                        'Milik Sendiri' => 'Milik Sendiri',
                        'Sewa/Kontrak' => 'Sewa/Kontrak',
                        'Ikut Orang Tua' => 'Ikut Orang Tua',
                        'Menumpang' => 'Menumpang',
                        'Asrama' => 'Asrama',
                    ]" :disabled="$readonly" required />
                <x-input label="Jarak Rumah ke Sekolah (km)" name="jarak" type="number" step="0.1"
                    :value="$it?->jarak" :disabled="$readonly" required />
                <x-select label="Transportasi ke Sekolah" name="transportasi" :value="$it?->transportasi" :options="[
                    'Jalan Kaki' => 'Jalan Kaki',
                    'Sepeda' => 'Sepeda',
                    'Motor' => 'Motor',
                    'Mobil Pribadi' => 'Mobil Pribadi',
                    'Angkutan Umum' => 'Angkutan Umum',
                    'Ojek Online' => 'Ojek Online',
                    'Lainnya' => 'Lainnya',
                ]"
                    :disabled="$readonly" required />
                <x-input label="Nomor KIP (jika punya)" name="no_kip" :value="$it?->no_kip" :disabled="$readonly" />
                <x-input label="Nomor PKH/BPNT (jika ada)" name="no_pkh" :value="$it?->no_pkh" :disabled="$readonly" />
                <x-textarea label="Riwayat Penyakit (jika ada)" name="riwayat_penyakit" :value="$it?->riwayat_penyakit"
                    :disabled="$readonly" />
                <x-input label="Alergi (jika ada)" name="alergi" :value="$it?->alergi" :disabled="$readonly" />
                <x-input label="Ukuran Seragam Baju" name="ukuran_baju" :value="$it?->ukuran_baju" :disabled="$readonly" />
                <x-input label="Ukuran Celana" name="ukuran_celana" :value="$it?->ukuran_celana" :disabled="$readonly" />
                <x-input label="Ukuran Jilbab" name="ukuran_jilbab" :value="$it?->ukuran_jilbab" :disabled="$readonly" />
                <div class="flex justify-between mt-8">
                    <button type="button" @click="step--"
                        class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400">Kembali</button>
                    @if ($readonly)
                        <button type="button" @click="step++"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">
                            Lanjut
                        </button>
                    @else
                        <button type="button" @click="confirmLanjut()"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">Lanjut</button>
                    @endif
                </div>
            </div>

            {{-- STEP 7 Dokumen --}}
            <div x-show="step === 7" class="space-y-6" x-transition>
                <x-input label="Foto Formal Siswa (3x4)" name="foto" type="file" :disabled="$readonly" />
                @if ($dd?->foto)
                    <div class="flex items-center justify-between p-4 bg-blue-50 border border-blue-200 rounded-md">
                        <div class="text-sm text-gray-600">
                            Sudah upload foto:
                            <button type="button"
                                onclick="showPreview('{{ asset('storage/' . $dd->foto) }}', 'Foto Formal Siswa')"
                                class="text-blue-600 underline hover:text-blue-800">Lihat Foto</button>
                        </div>
                    </div>
                @endif
                <x-input label="Scan Kartu Keluarga" name="kk_file" type="file" :disabled="$readonly" />
                @if ($dd?->kk)
                    <div class="flex items-center justify-between p-4 bg-blue-50 border border-blue-200 rounded-md">
                        <div class="text-sm text-gray-600">Sudah upload Kartu Keluarga:
                            <button type="button"
                                onclick="showPreview('{{ asset('storage/' . $dd->kk) }}', 'Kartu Keluarga')"
                                class="text-blue-600 underline">Lihat KK</button>
                        </div>
                    </div>
                @endif
                <x-input label="Scan Akta Kelahiran" name="akta_file" type="file" :disabled="$readonly" />
                @if ($dd?->akte)
                    <div class="flex items-center justify-between p-4 bg-blue-50 border border-blue-200 rounded-md">
                        <div class="text-sm text-gray-600">Sudah upload Akta Kelahiran:
                            <button type="button"
                                onclick="showPreview('{{ asset('storage/' . $dd->akte) }}', 'Akta Kelahiran')"
                                class="text-blue-600 underline hover:text-blue-800">Lihat Akta</button>
                        </div>
                    </div>
                @endif
                <x-input label="Scan Ijazah Terakhir" name="ijazah_file" type="file" :disabled="$readonly" />
                @if ($dd?->ijazah)
                    <div class="flex items-center justify-between p-4 bg-blue-50 border border-blue-200 rounded-md">
                        <div class="text-sm text-gray-600">Sudah upload Ijazah Terakhir:
                            <button type="button"
                                onclick="showPreview('{{ asset('storage/' . $dd->ijazah) }}', 'Ijzah Terakhir')"
                                class="text-blue-600 underline hover:text-blue-800">Lihat Ijazah</button>
                        </div>
                    </div>
                @endif
                <x-input label="Scan KTP Ayah/Ibu/Wali" name="ktp_file" type="file" :disabled="$readonly" />
                @if ($dd?->ktp)
                    <div class="flex items-center justify-between p-4 bg-blue-50 border border-blue-200 rounded-md">
                        <div class="text-sm text-gray-600">Sudah upload KTP Ayah/Ibu/Wali:
                            <button type="button" onclick="showPreview('{{ asset('storage/' . $dd->ktp) }}', 'KTP')"
                                class="text-blue-600 underline hover:text-blue-800">Lihat KTP</button>
                        </div>
                    </div>
                @endif
                <div class="flex justify-between mt-8">
                    <button type="button" @click="step--"
                        class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400">Kembali</button>
                    @if ($readonly)
                        <button type="button" @click="step++"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">
                            Lanjut
                        </button>
                    @else
                        <button type="button" @click="confirmLanjut()"
                            class="bg-blue-600 text-white px-8 py-3 rounded shadow hover:bg-blue-700">Lanjut</button>
                    @endif
                </div>
            </div>

            {{-- STEP 8 Submit --}}
            <div x-show="step === 8" class="space-y-6" x-transition>
                <p class="text-gray-700">
                    @if ($readonly)
                        Formulir ini telah dikunci. Silakan lihat kembali data Anda.
                    @else
                        Silakan periksa kembali seluruh isian sebelum mengirim.
                    @endif
                </p>
                <div class="flex justify-between mt-8">
                    <button type="button" @click="step--"
                        class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400">Kembali</button>
                    @if (!$readonly)
                        <button type="button" @click="confirmSubmit()"
                            class="bg-green-600 text-white px-8 py-3 rounded shadow hover:bg-green-700">Simpan
                            Permanen</button>
                    @endif
                </div>
            </div>

        </form>
    </div>
</div>
<script>
    function showPreview(url, title = 'Preview Gambar') {
        Swal.fire({
            title: title,
            imageUrl: url,
            imageAlt: 'Dokumen Preview',
            confirmButtonText: 'Tutup',
            width: 'auto',
            padding: '1em',
            showCloseButton: true
        });
    }

    function confirmLanjut() {
        Swal.fire({
            title: 'Yakin menyimpan data?',
            text: "Pastikan data sudah benar sebelum lanjut ke langkah berikutnya.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#aaa',
            confirmButtonText: 'Ya, Simpan & Lanjut',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector('input[name="draft"]').value = false;
                document.querySelector('form[x-ref="form"]').submit();
            }
        });
    }

    function confirmSubmit() {
        Swal.fire({
            title: 'Yakin simpan permanen?',
            text: "Setelah disimpan, Anda tidak dapat mengubah data kembali.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#aaa',
            confirmButtonText: 'Ya, Kirim',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector('input[name="draft"]').value = false;
                document.querySelector('form[x-ref="form"]').submit();
            }
        });
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        @if ($readonly)
            const form = document.querySelector('form');
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Form Terkunci',
                    text: 'Anda tidak dapat mengubah data karena formulir sudah dikirim.',
                    confirmButtonText: 'OK'
                });
            });
        @endif
    });
</script>
