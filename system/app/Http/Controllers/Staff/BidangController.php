<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
     public function index()
    {
        $data['list_bidang'] = Bidang::all();
        return view('staff-administrasi.bidang.index', $data);
    }

   
    public function store()
    {
        $bidang = New Bidang();
        $bidang->id_opd = request('id_opd');
        $bidang->nama_bidang = request('nama_bidang');
        $bidang->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($bidang)
    {
        $bidang = Bidang::find($bidang);
        $bidang->id_opd = request('id_opd');
        $bidang->nama_bidang = request('nama_bidang');
        $bidang->save();

        return back()->with('success', 'Data Berhasil di Edit');

    }

    
    public function destroy($bidang)
    {
        Bidang::destroy($bidang);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
