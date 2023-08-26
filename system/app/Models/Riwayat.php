<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Jembatan;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Opd;
use Illuminate\Support\Str;
class Riwayat extends Model
{
    protected $table = 'riwayat';

    function handleUploadSK()
    {
        if (request()->hasFile('sk')) {
            $sk = request()->file('sk');
            $destination = "sk-riwayat";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $sk->extension();
            $url = $sk->storeAs($destination, $filename);
            $this->sk = "app/" . $url;
            $this->save();

        }
    }

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
