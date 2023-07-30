<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

class Admin extends ModelAuthenticate
{
    protected $table ="admin";

    function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "admin";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }
}
