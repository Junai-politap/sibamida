<?php

namespace App\Http\Controllers\Web;

use App\Models\Bangunan;
use App\Models\Jembatan;
use App\Models\Opd;
use App\Http\Controllers\Controller;
use App\Models\Peralatan;
use App\Models\Tanah;
use Illuminate\Http\Request;


class BaseController extends Controller
{
    public function index()
    {
        $data['list_peralatan'] = Peralatan::all();
        $data['list_bangunan'] = Bangunan::all();
        $data['list_tanah'] = Tanah::all();
        $data['list_jembatan'] = Jembatan::all();
        $data['list_opd'] = Opd::all();
        return view('web.index', $data);
    }

    public function aset($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_bangunan'] = Bangunan::all();
        $data['list_peralatan'] = Peralatan::all();
        $data['list_jembatan'] = Jembatan::all();
        $data['list_tanah'] = Tanah::all();

        return view('web.aset', $data);
    }

    public function bahaya()
    {
        $data['list_opd'] = Opd::all();
        return view('web.contact', $data);
    }

    public function jembatan($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_jembatan'] = Jembatan::where('id_opd' , $opd)->get();
        return view('web.jembatan', $data);
    }

    public function bangunan($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_bangunan'] = Bangunan::where('id_opd' , $opd)->get();
        $data['data_bangunan'] = Bangunan::all();
        return view('web.bangunan', $data);
    }

    public function peralatan($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_peralatan'] = Peralatan::where('id_opd' , $opd)->get();
        return view('web.peralatan', $data);
    }

    public function tanah($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_tanah'] = Tanah::where('id_opd' , $opd)->get();
        return view('web.tanah', $data);
    }
}
