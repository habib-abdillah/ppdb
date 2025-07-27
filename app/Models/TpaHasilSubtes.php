<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TpaHasilSubtes extends Model
{
    use HasFactory;

    protected $table = 'tpa_hasil_subtes';

    protected $fillable = [
        'tpa_hasil_id',
        'tpa_subtes_master_id',
        'nilai',
        'kategori',
        'keterangan',
    ];

    public function hasil()
    {
        return $this->belongsTo(TpaHasil::class, 'tpa_hasil_id');
    }

    public function master()
    {
        return $this->belongsTo(TpaSubtesMaster::class, 'tpa_subtes_master_id');
    }
}
