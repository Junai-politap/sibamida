<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opd;
use App\Models\Ruangan;
use Illuminate\Http\Request;


class RuanganController extends Controller
{
    public function index(){
        $data['list_ruangan'] = Ruangan::all();
        $data['list_opd'] = Opd::all();

        return view('admin.ruangan.index', $data);
    }
    public function store()
    {
        $ruangan = New Ruangan();
        $ruangan->id_opd = request('id_opd');
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->save();

        return back()->with('success', 'Data Ruangan Berhasil di Simpan');
    }

    public function update($ruangan)
    {
        $ruangan = Ruangan::find($ruangan);
        $ruangan->id_opd = request('id_opd');
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->save();

        return back()->with('success', 'Data Ruangan Berhasil di Simpan');
    }

    public function destroy($ruangan)
    {
        Ruangan::destroy($ruangan);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
