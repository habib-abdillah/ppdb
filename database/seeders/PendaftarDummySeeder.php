<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pendaftar;
use App\Models\Pembayaran;
use App\Models\Rekomendasi;
use App\Models\DaftarUlang;

class PendaftarDummySeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat akun user
        $user = User::create([
            'name' => 'Ahmad Fulan',
            'email' => 'ahmad@example.com',
            'password' => Hash::make('123'),
            'role' => 'siswa',
        ]);

        // 2. Simpan ke tabel pendaftars
        $pendaftar = Pendaftar::create([
            'user_id'       => $user->id,
            'nama_lengkap'  => 'Ahmad Fulan',
            'tempat_lahir'  => 'Bandung',
            'tanggal_lahir' => '2009-05-12',
            'email'         => $user->email,
            'no_hp_siswa'   => '081234567890',
            'no_hp_ortu'    => '089876543210',
            'nisn'          => '1234567890',
            'asal_sekolah'  => 'SMP Negeri 1 Bandung',
        ]);

        // 3. Pembayaran TPA
        Pembayaran::create([
            'pendaftar_id'     => $pendaftar->id,
            'jenis'            => 'TPA',
            'bukti'            => 'bukti_tpa_dummy.jpg',
            'status'           => 'diterima',
            'catatan'          => 'Valid',
            'tanggal_dibayar'  => now(),
        ]);

        // 4. Rekomendasi jurusan
        Rekomendasi::create([
            'pendaftar_id' => $pendaftar->id,
            'jurusan'      => 'PPLG',
            'catatan'      => 'Sangat cocok di bidang pemrograman.',
        ]);

        // 5. Daftar ulang (sederhana)
        DaftarUlang::create([
            'pendaftar_id'   => $pendaftar->id,
            'alamat'         => 'Jl. Merdeka No. 45 Bandung',
            'nama_ayah'      => 'Budi Santoso',
            'nama_ibu'       => 'Siti Aisyah',
            'pekerjaan_ayah' => 'Karyawan Swasta',
            'pekerjaan_ibu'  => 'Ibu Rumah Tangga',
            'penghasilan'    => '3000000',
            'berkas_kk'      => 'kk_dummy.pdf',
            'berkas_akta'    => 'akta_dummy.pdf',
            'berkas_ijazah'  => 'ijazah_dummy.pdf',
        ]);
    }
}
