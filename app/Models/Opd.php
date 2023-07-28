<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

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
}
