<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GelombangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gelombang')->insert([
            [
                'nama'           => 'Gelombang 1',
                'tanggal_mulai'  => '2025-06-01',
                'tanggal_selesai' => '2025-06-15',
                'tanggal_tpa'    => '2025-06-16',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'nama'           => 'Gelombang 2',
                'tanggal_mulai'  => '2025-06-16',
                'tanggal_selesai' => '2025-06-30',
                'tanggal_tpa'    => '2025-07-01',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'nama'           => 'Gelombang 3',
                'tanggal_mulai'  => '2025-07-01',
                'tanggal_selesai' => '2025-07-15',
                'tanggal_tpa'    => '2025-07-16',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
