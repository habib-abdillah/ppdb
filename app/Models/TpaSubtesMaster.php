<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TpaSubtesMaster extends Model
{
    use HasFactory;

    protected $table = 'tpa_subtes_master';

    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',
    ];

    public function hasilSubtes()
    {
        return $this->hasMany(TpaHasilSubtes::class, 'tpa_subtes_master_id');
    }
}
