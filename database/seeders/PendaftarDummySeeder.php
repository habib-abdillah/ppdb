<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pendaftar;
use App\Models\TpaAkses;
use App\Models\TpaHasil;
use App\Models\TpaSubtesMaster;
use App\Models\TpaHasilSubtes;

class PendaftarDummySeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Ahmad Fulan',
            'email' => 'ahmad@example.com',
            'password' => Hash::make('123'),
            'role' => 'siswa',
        ]);

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
            'gelombang_id'  => 1,
        ]);

        TpaAkses::create([
            'pendaftar_id' => $pendaftar->id,
            'username'     => $pendaftar->email,
            'password'     => $pendaftar->no_hp_ortu,
        ]);

        $subtesList = [
            ['kode' => 'LOGIKA', 'nama' => 'Logika Programming'],
            ['kode' => 'KREATIVITAS', 'nama' => 'Kreativitas Visual'],
            ['kode' => 'PEMECAHAN', 'nama' => 'Pemecahan Masalah'],
            ['kode' => 'ESTETIKA', 'nama' => 'Estetika Desain'],
        ];

        foreach ($subtesList as $subtes) {
            TpaSubtesMaster::firstOrCreate(
                ['kode' => $subtes['kode']],
                ['nama' => $subtes['nama']]
            );
        }

        $hasil = TpaHasil::create([
            'pendaftar_id'        => $pendaftar->id,
            'nilai'               => 320,
            'persentil'           => 85,
            'rekomendasi_jurusan' => 'PPLG',
            'kesesuaian_pplg'     => 85,
            'kesesuaian_dkv'      => 65,
            'catatan'             => 'Direkomendasikan ke jurusan PPLG karena skor logika sangat tinggi.',
            'status'              => 'selesai',
            'tanggal_tes'         => now()->subDays(5),
        ]);

        // Masukkan nilai per subtes
        $nilaiSubtes = [
            'LOGIKA'       => ['nilai' => 92, 'kategori' => 'Sangat Baik', 'keterangan' => 'Kemampuan utama untuk PPLG'],
            'KREATIVITAS'  => ['nilai' => 78, 'kategori' => 'Baik', 'keterangan' => 'Potensi untuk DKV'],
            'PEMECAHAN'    => ['nilai' => 85, 'kategori' => 'Sangat Baik', 'keterangan' => 'Kuat di kedua bidang'],
            'ESTETIKA'     => ['nilai' => 65, 'kategori' => 'Cukup', 'keterangan' => 'Perlu pengembangan untuk DKV'],
        ];

        foreach ($nilaiSubtes as $kode => $detail) {
            $master = TpaSubtesMaster::where('kode', $kode)->first();

            TpaHasilSubtes::create([
                'tpa_hasil_id'          => $hasil->id,
                'tpa_subtes_master_id'  => $master->id,
                'nilai'                 => $detail['nilai'],
                'kategori'              => $detail['kategori'],
                'keterangan'            => $detail['keterangan'],
            ]);
        }
    }
}
