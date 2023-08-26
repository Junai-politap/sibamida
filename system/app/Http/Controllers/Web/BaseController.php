<?php

namespace App\Http\Controllers\Web;

use App\Models\Bangunan;
use App\Models\Jembatan;
use App\Models\Opd;
use App\Http\Controllers\Controller;
use App\Models\Peralatan;
use App\Models\Riwayat;
use App\Models\Slide;
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
        $data['list_slide'] = Slide::all();
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
        $data['list_jembatan'] = Jembatan::orderBy('tahun_perolehan', 'DESC')->where('id_opd' , $opd)->get();
        return view('web.jembatan', $data);
    }

    public function showJembatan($jembatan){
        $data['jembatan'] = Jembatan::find($jembatan);
        $data['list_opd'] = Opd::all();
        $data['list_riwayat'] = Riwayat::where('id_aset', $jembatan)->get();

        return view('web.show-jembatan', $data);
    }

    function filterJembatan($opd)
    {
        $data['list_opd'] = Opd::all();
        $data['opd'] = Opd::find($opd);
        $nama_aset = request('nama_aset');
        $data['list_jembatan'] = Jembatan::where('nama_aset', 'like', "%$nama_aset%")->get();
        $data['nama_aset'] = $nama_aset;
        return view('web.jembatan', $data);
    }

    public function bangunan($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_bangunan'] = Bangunan::orderBy('tahun_perolehan', 'DESC')->where('id_opd' , $opd)->get();
        return view('web.bangunan', $data);
    }

    public function showBangunan($bangunan){
        $data['bangunan'] = Bangunan::find($bangunan);
        $data['list_opd'] = Opd::all();
        $data['list_riwayat'] = Riwayat::where('id_aset', $bangunan)->get();

        return view('web.show-bangunan', $data);
    }

    function filterBangunan($opd)
    {
        $data['list_opd'] = Opd::all();
        $data['opd'] = Opd::find($opd);
        $nama_barang = request('nama_barang');
        $data['list_bangunan'] = Bangunan::where('nama_barang', 'like', "%$nama_barang%")->get();
        $data['nama_barang'] = $nama_barang;
        return view('web.bangunan', $data);
    }


    public function peralatan($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_peralatan'] = Peralatan::orderBy('tahun_perolehan', 'DESC')->where('id_opd' , $opd)->get();
        return view('web.peralatan', $data);
    }


    public function showPeralatan($peralatan){
        $data['peralatan'] = Peralatan::find($peralatan);
        $data['list_opd'] = Opd::all();
        $data['list_riwayat'] = Riwayat::where('id_aset', $peralatan)->get();

        return view('web.show-peralatan', $data);
    }

    function filterPeralatan($opd)
    {
        $data['list_opd'] = Opd::all();
        $data['opd'] = Opd::find($opd);
        $nama_barang = request('nama_barang');
        $data['list_peralatan'] = Peralatan::where('nama_barang', 'like', "%$nama_barang%")->get();
        $data['nama_barang'] = $nama_barang;
        return view('web.peralatan', $data);
    }


    public function tanah($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_tanah'] = Tanah::orderBy('tahun_perolehan', 'DESC')->where('id_opd' , $opd)->get();
        return view('web.tanah', $data);
    }

    public function showTanah($tanah){
        $data['tanah'] = Tanah::find($tanah);
        $data['list_opd'] = Opd::all();
        $data['list_riwayat'] = Riwayat::where('id_aset', $tanah)->get();

        return view('web.show-tanah', $data);
    }

    function filterTanah($opd)
    {
        $data['list_opd'] = Opd::all();
        $data['opd'] = Opd::find($opd);
        $nama_barang = request('nama_barang');
        $data['list_tanah'] = Tanah::where('nama_barang', 'like', "%$nama_barang%")->get();
        $data['nama_barang'] = $nama_barang;
        return view('web.tanah', $data);
    }
}
