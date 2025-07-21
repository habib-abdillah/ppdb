<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Panitia PPDB',
            'email' => 'panitia@example.com',
            'password' => Hash::make('123'),
            'role' => 'panitia',
        ]);

        User::create([
            'name' => 'Siswa Baru',
            'email' => 'siswa@example.com',
            'password' => Hash::make('123'),
            'role' => 'calon_siswa',
        ]);
    }
}
