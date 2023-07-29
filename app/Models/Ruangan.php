<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Riwayat;

class Ruangan extends Model
{
    protected $table="ruangan";

    public function Aset()
    {
        return $this->belongsTo(Aset::class, 'id');
    }

    public function Riwayat()
    {
        return $this->belongsTo(Riwayat::class, 'id');
    }
}
