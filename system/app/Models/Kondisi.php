<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Opd;
use App\Models\Peralatan;

class Kondisi extends Model
{
    protected $table ="kondisi";

    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }

    public function Peralatan()
    {
        return $this->belongsTo(Peralatan::class, 'id');
    }
}
