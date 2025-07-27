<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TpaHasil extends Model
{
    use HasFactory;

    protected $table = 'tpa_hasil';

    protected $fillable = [
        'pendaftar_id',
        'nilai',
        'persentil',
        'rekomendasi_jurusan',
        'kesesuaian_pplg',
        'kesesuaian_dkv',
        'catatan',
        'status',
        'tanggal_tes',
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }

    public function subtes()
    {
        return $this->hasMany(TpaHasilSubtes::class);
    }
}