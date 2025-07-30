<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DokumenDaftarUlang extends Model
{
    use HasFactory;

    protected $table = 'dokumen_daftar_ulang';

    protected $fillable = [
        'daftar_ulang_id',
        'foto',
        'kk',
        'akte',
        'ijazah',
        'ktp',
    ];

    public function daftarUlang()
    {
        return $this->belongsTo(DaftarUlang::class);
    }
}
