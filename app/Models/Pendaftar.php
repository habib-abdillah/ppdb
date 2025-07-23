<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftars'; // pastikan nama tabel tetap cocok

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'no_hp_siswa',
        'no_hp_ortu',
        'nisn',
        'asal_sekolah',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }

    public function rekomendasi()
    {
        return $this->hasOne(Rekomendasi::class);
    }
}
