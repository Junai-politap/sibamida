<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Aset;
use App\Models\Pegawai;
use App\Models\Ruangan;

class Riwayat extends Model
{
    protected $table = 'riwayat';

    public function Aset()
    {
        return $this->belongsTo(Aset::class, 'id_aset');
    }
    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }


}
