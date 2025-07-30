<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlamatKontak extends Model
{
    use HasFactory;

    protected $table = 'alamat_kontak';

    protected $fillable = [
        'daftar_ulang_id',
        'alamat',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
        'hp_siswa',
        'hp_ortu',
    ];

    public function daftarUlang()
    {
        return $this->belongsTo(DaftarUlang::class);
    }
}
