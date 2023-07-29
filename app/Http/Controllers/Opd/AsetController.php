<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use App\Models\Aset;
use App\Models\Kategori;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_aset'] = Aset::all();
        return view('opd.aset.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['kategori'] = Kategori::all();
        $data['ruangan'] = Ruangan::all();
        // return $data;
        return view('opd.aset.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aset = new Aset();
        $aset->id_kategori = request('id_kategori');
        $aset->id_ruangan = request('id_ruangan');
        $aset->nama_aset=request('nama_aset');
        $aset->kode_aset=request('kode_aset');
        $aset->handleUploadFoto();
        $aset->save();

        return redirect('opd/aset')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $aset)
    {
        $data['aset'] = Aset::find($aset);
        return view('opd.aset.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $aset)
    {
        $data['aset']=Aset::find($aset);
        $data['kategori'] = Kategori::all();
        $data['ruangan'] = Ruangan::all();
        return view('opd.aset.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Aset $aset)
    {
        $aset->id_kategori = request('id_kategori');
        $aset->id_ruangan = request('id_ruangan');
        $aset->nama_aset=request('nama_aset');
        $aset->kode_aset=request('kode_aset');
        if (request('foto')) $aset->handleUploadFoto();
        $aset->save();

        return redirect('opd/aset')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $aset)
    {
        $aset= Aset::find($aset);
        $aset->handleDelete();
        // return $aset;
        $aset->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
    }
}
