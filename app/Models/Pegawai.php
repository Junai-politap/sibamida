<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;
use App\models\Opd;

class Pegawai extends ModelAuthenticate
{
    protected $table="pegawai";

    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }


    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "pegawai";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
