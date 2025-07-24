<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pendaftar;
use App\Models\TpaAkses;

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
    }
}
