<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPribadi extends Model
{
    use HasFactory;

    protected $table = 'data_pribadi';

    protected $fillable = [
        'daftar_ulang_id',
        'nama',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'nik_siswa',
        'kk',
        'anak_ke',
        'saudara',
        'status_keluarga',
        'bahasa',
        'status_anak',
    ];

    public function daftarUlang()
    {
        return $this->belongsTo(DaftarUlang::class);
    }
}
