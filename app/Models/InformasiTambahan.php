<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InformasiTambahan extends Model
{
    use HasFactory;

    protected $table = 'informasi_tambahan';

    protected $fillable = [
        'daftar_ulang_id',
        'agama',
        'status_tempat_tinggal',
        'jarak',
        'transportasi',
        'no_kip',
        'no_pkh',
        'riwayat_penyakit',
        'alergi',
        'ukuran_baju',
        'ukuran_celana',
        'ukuran_jilbab',
    ];

    public function daftarUlang()
    {
        return $this->belongsTo(DaftarUlang::class);
    }
}
