<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aset;
use App\Models\Kategori;
use App\Models\Opd;
use App\Models\Pegawai;
use App\Models\Riwayat;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    
    public function index()
    {
        $data['list_aset'] = Aset::all();

        return view('admin/aset.index', $data);
    }

    
    public function create()
    {
        $data['list_opd'] = Opd::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['list_pegawai'] = Pegawai::all();
        
        return view('admin.aset.create', $data);
    }

    
    public function store(Request $request)
    {
        $aset = New Aset();
        $aset->id_opd = request('id_opd');
        $aset->id_kategori = request('id_kategori');
        $aset->id_ruangan = request('id_ruangan');
        $aset->id_pegawai = request('id_pegawai');
        $aset->kode_aset = request('kode_aset');
        $aset->nama_aset = request('nama_aset');
        $aset->handleUploadFoto();

        return redirect('admin/aset')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function show($aset)
    {
        $data['aset'] = Aset::find($aset);
        $data['riwayat'] = Riwayat::all();
        $data['pegawai'] = Pegawai::all();

        return view('admin.aset.show', $data);
    
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy($aset)
    {
        Aset::destroy($aset);

        return back()->with('danger', ' Data Berhasil Di Hapus');
    }
}
