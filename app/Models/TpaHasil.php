<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpaHasil extends Model
{
    use HasFactory;

    protected $table = 'tpa_hasil';

    protected $fillable = [
        'pendaftar_id',
        'nilai',
        'rekomendasi_jurusan',
        'catatan',
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }
}
