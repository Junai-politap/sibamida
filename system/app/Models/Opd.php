<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;
use App\Models\Pegawai;
use App\Models\Jembatan;
use App\Models\Bidang;

class Opd extends ModelAuthenticate
{
    protected $table = "opd";

    function handleUploadLogo()
    {
        if (request()->hasFile('logo')) {
            $logo = request()->file('logo');
            $destination = "opd";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $logo->extension();
            $url = $logo->storeAs($destination, $filename);
            $this->logo = "app/" . $url;
            $this->save();

        }
    }

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id');
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
        return $this->belongsTo(Peralatan::class, 'id');
    }

    public function Tanah()
    {
        return $this->belongsTo(Tanah::class, 'id');
    }

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'id');
    }

    public function Bidang()
    {
        return $this->belongsTo(Bidang::class, 'id');
    }

    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id');
    }

}
