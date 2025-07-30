<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrangTua extends Model
{
    use HasFactory;

    protected $table = 'orang_tua';

    protected $fillable = [
        'daftar_ulang_id',
        'nik_ayah',
        'ayah',
        'pekerjaan_ayah',
        'pendidikan_ayah',
        'penghasilan_ayah',
        'nik_ibu',
        'ibu',
        'pekerjaan_ibu',
        'pendidikan_ibu',
        'penghasilan_ibu',
        'wali',
        'hubungan_wali',
        'hp_wali',
    ];

    public function daftarUlang()
    {
        return $this->belongsTo(DaftarUlang::class);
    }
}
