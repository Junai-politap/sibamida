<?php

namespace App\Models;

use App\Models\Ruangan;
use App\Models\Riwayat;
use App\Models\Kategori;
use App\Models\Model;
use App\Models\Opd;
use Illuminate\Support\Str;

class Aset extends Model
{
    protected $table ="aset";

    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function Riwayat()
    {
        return $this->belongsTo(Riwayat::class, 'id');
    }

    public function Opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "assets";
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
