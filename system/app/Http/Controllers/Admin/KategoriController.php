<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Opd;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class KategoriController extends Controller
{
    
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_opd'] = Opd::all();
        
        return view('admin.kategori.index', $data);

    }
    
    
    public function store(Request $request)
    {
        $kategori = New Kategori();
        $kategori->id_opd = request('id_opd');
        $kategori->nama_kategori = request('nama_kategori');

        $kategori->save();

        return back()->with('success', 'Data Bserhasil Di Simpan');
    }

   
    
    public function update($kategori)
    {
        $kategori = Kategori::find($kategori);
        $kategori->id_opd = request('id_opd');
        $kategori->nama_kategori = request('nama_kategori');

        $kategori->save();

        return back()->with('success', 'Data Bserhasil Di Simpan');
    }

    
    public function destroy($kategori)
    {
        Kategori::destroy($kategori);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
