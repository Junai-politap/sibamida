<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;
use App\Models\Pegawai;

class Opd extends ModelAuthenticate
{
    protected $table = "opd";

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id');
    }

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
}
