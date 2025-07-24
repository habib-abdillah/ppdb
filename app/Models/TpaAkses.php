<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TpaAkses extends Model
{
    protected $table = 'tpa_akses';

    protected $fillable = [
        'pendaftar_id',
        'username',
        'password',
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }
}
