<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DaftarUlang extends Model
{
    use HasFactory;

    protected $table = 'daftar_ulang';

    protected $fillable = [
        'pendaftar_id',
        'status_verifikasi',
        'catatan',
        'is_complete',
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }

    public function dataPribadi()
    {
        return $this->hasOne(DataPribadi::class);
    }

    public function alamatKontak()
    {
        return $this->hasOne(AlamatKontak::class);
    }

    public function orangTua()
    {
        return $this->hasOne(OrangTua::class);
    }

    public function sekolahAsal()
    {
        return $this->hasOne(SekolahAsal::class);
    }

    public function statusSantri()
    {
        return $this->hasOne(StatusSantri::class);
    }

    public function informasiTambahan()
    {
        return $this->hasOne(InformasiTambahan::class);
    }

    public function dokumenDaftarUlang()
    {
        return $this->hasOne(dokumenDaftarUlang::class);
    }
}
