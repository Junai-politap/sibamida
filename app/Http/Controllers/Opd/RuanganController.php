<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_ruangan'] = Ruangan::all();
        return view('opd.ruangan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('opd.ruangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ruangan = new Ruangan();
        $ruangan ->id_opd=request('id_opd');
        $ruangan ->kode_ruangan=request('kode_ruangan');
        $ruangan-> nama_ruangan=request('nama_ruangan');
        $ruangan->save();

        return redirect('opd/ruangan')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ruangan)
    {
        $data['ruangan']=Ruangan::find($ruangan);
        return view('opd.ruangan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Ruangan $ruangan)
    {
        $ruangan ->kode_ruangan=request('kode_ruangan');
        $ruangan-> nama_ruangan=request('nama_ruangan');
        $ruangan->save();

        return redirect('opd/ruangan')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $ruangan)
    {
        $ruangan = Ruangan::find($ruangan);
        $ruangan->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
