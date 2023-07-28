<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('opd.pegawai.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('opd.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pegawai = new Pegawai();
        $pegawai->nama=request('nama');
        $pegawai->username=request('username');
        $pegawai->jabatan=request('jabatan');
        $pegawai->nik=request('nik');
        $pegawai->nip=request('nip');
        $pegawai->nomor_hp=request('nomor_hp');
        $pegawai->password=request('password');
        $pegawai->handleUploadFoto();
        $pegawai->save();

        return redirect('opd/pegawai')->with('success', ' Data Berhasil Disimpan');

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
