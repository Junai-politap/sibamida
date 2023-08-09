<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Jembatan;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Opd;
class Riwayat extends Model
{
    protected $table = 'riwayat';

    public function Jembatan()
    {
        return $this->belongsTo(Jembatan::class, 'id_aset');
    }

    public function Peralatan()
    {
        return $this->belongsTo(Peralatan::class, 'id_aset');
    }
    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }

}
