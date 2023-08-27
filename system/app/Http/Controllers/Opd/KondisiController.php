<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use App\Models\Kondisi;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    public function index()
    {
        $data['list_kondisi'] = Kondisi::all();
        return view('opd.kondisi.index', $data);
    }

   
    public function store()
    {
        $kondisi = New Kondisi();
        $kondisi->id_opd = request('id_opd');
        $kondisi->nama_kondisi = request('nama_kondisi');
        $kondisi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($kondisi)
    {
        $kondisi = Kondisi::find($kondisi);
        $kondisi->id_opd = request('id_opd');
        $kondisi->nama_kondisi = request('nama_kondisi');
        $kondisi->save();

        return back()->with('success', 'Data Berhasil di Edit');

    }

    
    public function destroy($kondisi)
    {
        Kondisi::destroy($kondisi);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
