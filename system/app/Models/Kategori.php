<?php

namespace App\Models;

use App\Models\Model;
use App\Models\jembatan;
use App\Models\Opd;

class Kategori extends Model
{
    protected $table="kategori";

    public function Jembatan()
    {
        return $this->belongsTo(Jembatan::class, 'id');
    }

    public function Peralatan()
    {
        return $this->belongsTo(Peralatan::class, 'id');
    }

    public function Bangunan()
    {
        return $this->belongsTo(Peralatan::class, 'id');
    }

    public function Tanah()
    {
        return $this->belongsTo(Tanah::class, 'id');
    }

    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }
}
