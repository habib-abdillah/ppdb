<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarUlang extends Model
{
    use HasFactory;

    protected $table = 'daftar_ulang';

    protected $fillable = [
        'pendaftar_id',
        'alamat',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'penghasilan',
        'berkas_kk',
        'berkas_akta',
        'berkas_ijazah',
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }
}
