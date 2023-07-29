<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Opd;

class Kategori extends Model
{
    protected $table="kategori";

    public function Aset()
    {
        return $this->belongsTo(Aset::class, 'id');
    }

    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }
}
