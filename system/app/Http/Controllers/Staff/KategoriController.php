<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    
    public function index()
    {
        $data['list_kategori'] = Kategori::all();

        return view('staff-administrasi.kategori.index', $data);
    }

    
    public function create()
    {
        return view('staff-administrasi.kategori.create');
    }

    
    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->id_opd = request('id_opd');
        $kategori->nama_kategori=request('nama_kategori');
        $kategori->save();

        return redirect('staff-administrasi/kategori')->with('success','Data Berhasil Disimpan');
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit($kategori)
    {
        $data['kategori'] = Kategori::find($kategori);

        return view('staff-administrasi.kategori.edit', $data);
    }

    
    public function update($kategori)
    {
        $kategori = Kategori::find($kategori);
        $kategori->nama_kategori=request('nama_kategori');
        $kategori->save();

        return redirect('staff-administrasi/kategori')->with('success','Data Berhasil Disimpan');
    }

    
    public function destroy($kategori)
    {
        Kategori::destroy($kategori);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
