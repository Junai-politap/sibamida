<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('opd.kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('opd.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new kategori();
        $kategori->nama_kategori=request('nama_kategori');
        $kategori->save();

        return redirect('opd/kategori')->with('success','Data Berhasil Disimpan');
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
    public function edit(string $kategori)
    {
        $data['kategori'] = Kategori::find($kategori);
        return view ('opd.kategori.edit', $data);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Kategori $kategori)
    {
        $kategori->nama_kategori=request('nama_kategori');
        $kategori->save();

        return redirect('opd/kategori')->with('success','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kategori)
    {
        $kategori= Kategori::find($kategori);
        $kategori->delete();

        return back()->with('danger','Data Berhasil Dihapus');
    }
}
