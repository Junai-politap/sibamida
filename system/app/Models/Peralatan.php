<?php

namespace App\Models;

use App\Models\Riwayat;
use App\Models\Kategori;
use App\Models\Model;
use App\Models\Opd;
use Illuminate\Support\Str;

class Peralatan extends Model
{
    protected $table = 'peralatan';

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

    public function Kondisi()
    {
        return $this->belongsTo(Kondisi::class, 'id_kondisi');
    }

    public function Bidang()
    {
        return $this->belongsTo(Bidang::class, 'id_bidang');
    }

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }



    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "peralatan dan mesin";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
          

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
