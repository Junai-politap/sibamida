<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Opd;
use App\Models\Pegawai;

class OpdController extends Controller
{

    public function index()
    {
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::orderBy('id', 'ASC')->take(1)->get();
        $data['data_pegawai'] = Pegawai::all();
        
        return view('admin.opd.index', $data);
    }


    public function create()
    {
        return view('admin.opd.create');
    }


    public function store(Request $request)
    {
        $opd = New Opd();
        $opd->nama_opd = request('nama_opd');
        $opd->singkatan = request('singkatan');
        $opd->username = request('username');
        $opd->password = request('password');
        $opd->alamat = request('alamat');
        $opd->no_telp = request('no_telp');
        $opd->handleUploadLogo();

        $opd->save();

        return redirect('admin/opd')->with('success', 'Data Berhasil Di Simpan');
    }


    public function show($opd)
    {
        $data['opd'] = Opd::find($opd);

        return view('admin.opd.show', $data);
    }


    public function edit($opd)
    {
        $data['opd'] = Opd::find($opd);

        return view('admin.opd.edit', $data);
    }


    public function update($opd)
    {
        $opd = Opd::find($opd);
        $opd->nama_opd = request('nama_opd');
        $opd->singkatan = request('singkatan');
        $opd->username = request('username');

        if(request('password')) $opd->password = request('password');

        $opd->alamat = request('alamat');
        $opd->no_telp = request('no_telp');
        $opd->handleUploadLogo();

        $opd->save();

        return redirect('admin/opd')->with('warning', 'Data Berhasil Di Simpan');
    }


    public function destroy($opd)
    {
        Opd::destroy($opd);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
