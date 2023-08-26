<?php

namespace App\Models;
use App\Models\Model;
use App\Models\Opd;

class Ruangan extends Model
{
    protected $table = "ruangan";


    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }

}
