<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opd;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.pegawai.index', $data);
    }

    
    public function create()
    {
        $data['list_opd'] = Opd::all();
        return view('admin.pegawai.create', $data);
    }

    
    public function store()
    {
        $pegawai = New Pegawai();
        $pegawai->id_opd = request('id_opd');
        $pegawai->nip = request('nip');
        $pegawai->nik = request('nik');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->password = request('password');
        $pegawai->jabatan = request('jabatan');
        $pegawai->alamat = request('alamat');
        $pegawai->nomor_hp = request('nomor_hp');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return redirect('admin/pegawai')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function show($pegawai)
    {
        $data['pegawai'] = Pegawai::find($pegawai);
        return view('admin.pegawai.show', $data);
    }

    
    public function edit($pegawai)
    {
        $data['list_opd'] = Opd::all();
        $data['pegawai'] = Pegawai::find($pegawai);
        return view('admin.pegawai.edit', $data);
    }

    
    public function update($pegawai)
    {
        $pegawai = Pegawai::find($pegawai);
        $pegawai->id_opd = request('id_opd');
        $pegawai->nip = request('nip');
        $pegawai->nik = request('nik');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        if(request('password')) $pegawai->password = request('password');    
        $pegawai->jabatan = request('jabatan');
        $pegawai->alamat = request('alamat');
        $pegawai->nomor_hp = request('nomor_hp');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return redirect('admin/pegawai')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function destroy($pegawai)
    {
        $pegawai = Pegawai::find($pegawai);
        $pegawai->handleDelete();
        $pegawai->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
