<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class Slide extends Model
{
    protected $table ="slide";
    
    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "slide";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            

        }
    }
}