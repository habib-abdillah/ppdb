<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusSantri extends Model
{
    use HasFactory;

    protected $table = 'status_santri';

    protected $fillable = [
        'daftar_ulang_id',
        'status_santri',
        'tanggal_masuk',
        'kamar',
        'lembaga',
        'hafalan_terakhir',
        'rekomendasi_jurusan',
    ];

    public function daftarUlang()
    {
        return $this->belongsTo(DaftarUlang::class);
    }
}
