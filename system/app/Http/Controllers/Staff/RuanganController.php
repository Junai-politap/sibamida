<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    
    public function index()
    {
        $data['list_ruangan'] = Ruangan::all();

        return view('staff-administrasi.ruangan.index', $data);
    }

    
    public function create()
    {
        return view('staff-administrasi.ruangan.create');
    }

    
    public function store(Request $request)
    {
        $ruangan = New Ruangan();
        $ruangan->id_opd = request('id_opd');
        $ruangan->kode_ruangan = request('kode_ruangan');
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->save();

        return redirect('staff-administrasi/ruangan')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit($ruangan)
    {
        $data['ruangan'] = Ruangan::find($ruangan);

        return view('staff-administrasi.ruangan.edit', $data);
    }

    
    public function update($ruangan)
    {
        $ruangan = Ruangan::find($ruangan);
        $ruangan->kode_ruangan = request('kode_ruangan');
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->save();

        return redirect('staff-administrasi/ruangan')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function destroy($ruangan)
    {
        Ruangan::destroy($ruangan);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
