<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Kategori;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class OpdResource extends Controller
{
    public function getPegawai($id_opd) {
        return Pegawai::where("id_opd", $id_opd)->get()->toJson();
    }

    public function getKategori($id_opd) {
        return Kategori::where("id_opd", $id_opd)->get()->toJson();
    }

    public function getBidang($id_opd) {
        return Bidang::where("id_opd", $id_opd)->get()->toJson();
    }
}
