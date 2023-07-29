<?php

namespace App\Models;

use App\Models\Model;

class Ruangan extends Model
{
    protected $table="ruangan";

    public function Aset()
    {
        return $this->belongsTo(Aset::class, 'id');
    }
}
