<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Aset;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Opd;
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

    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }

}
