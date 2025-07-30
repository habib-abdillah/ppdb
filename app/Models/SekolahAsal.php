<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SekolahAsal extends Model
{
    use HasFactory;

    protected $table = 'sekolah_asal';

    protected $fillable = [
        'daftar_ulang_id',
        'jenjang_asal',
        'sekolah_asal',
        'status_sekolah',
        'alamat_sekolah',
        'tahun_lulus',
        'npsn',
    ];

    public function daftarUlang()
    {
        return $this->belongsTo(DaftarUlang::class);
    }
}
