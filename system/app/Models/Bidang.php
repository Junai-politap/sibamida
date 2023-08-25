<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Opd;
use App\Models\Jembatan;
use App\Models\Peralatan;
use App\Models\Bangunan;
use App\Models\Tanah;

class Bidang extends Model
{
    protected $table ="bidang";

    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }

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
        return $this->belongsTo(Bangunan::class, 'id');
    }

    public function Tanah()
    {
        return $this->belongsTo(Tanah::class, 'id');
    }
}
