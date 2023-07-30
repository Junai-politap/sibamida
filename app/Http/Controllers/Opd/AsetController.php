<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use App\Models\Aset;
use App\Models\Kategori;
use App\Models\Pegawai;
use App\Models\Riwayat;
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
        $data['list_pegawai'] = Pegawai::all();
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
        $aset->id_opd               = request('id_opd');
        $aset->id_kategori          = request('id_kategori');
        $aset->id_pegawai          = request('id_pegawai');
        $aset->id_ruangan           = request('id_ruangan');
        $aset->kode_aset            = request('kode_aset');
        $aset->nama_aset            = request('nama_aset');
        $aset->no_register          = request('no_register');
        $aset->tahun_perolehan      = request('tahun_perolehan');
        $aset->harga_perolehan      = request('harga_perolehan');
        $aset->keterangan           = request('keterangan');
        $aset->alamat               = request('alamat');
        $aset->nama_kondisi         = request('nama_kondisi');
        $aset->nama_sumber_dana     = request('nama_sumber_dana');
        $aset->no_sppd              = request('no_sppd');
        $aset->no_spk               = request('no_spk');
        $aset->no_ba                = request('no_ba');
        $aset->tanggal_serah_terima = request('tanggal_serah_terima');
        $aset->kontruksi            = request('kontruksi');
        $aset->panjang              = request('panjang');
        $aset->lebar                = request('lebar');
        $aset->luas                 = request('luas');
        $aset->nomor_dokumen        = request('nomor_dokumen');
        $aset->tanggal_dokumen      = request('tanggal_dokumen');
        $aset->status_tanah         = request('status_tanah');
        $aset->nomor_tanah          = request('nomor_tanah');
        $aset->lokasi               = request('lokasi');
        $aset->header               = request('header');
        $aset->urut_kelompok        = request('urut_kelompok');
        $aset->kelompok             = request('kelompok');
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
        $data['kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['ruangan'] = Ruangan::all();
        $data['riwayat'] = Riwayat::where('id_aset', $aset)->get();
        return view('opd.aset.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $aset)
    {
        $data['aset'] = Aset::find($aset);
        $data['kategori'] = Kategori::all();
        $data['ruangan'] = Ruangan::all();
        return view('opd.aset.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Aset $aset)
    {
        $aset->id_pegawai               = request('id_pegawai');
        $aset->id_kategori          = request('id_kategori');
        $aset->id_ruangan           = request('id_ruangan');
        $aset->kode_aset            = request('kode_aset');
        $aset->nama_aset            = request('nama_aset');
        $aset->no_register          = request('no_register');
        $aset->tahun_perolehan      = request('tahun_perolehan');
        $aset->harga_perolehan      = request('harga_perolehan');
        $aset->keterangan           = request('keterangan');
        $aset->alamat               = request('alamat');
        $aset->nama_kondisi         = request('nama_kondisi');
        $aset->nama_sumber_dana     = request('nama_sumber_dana');
        $aset->no_sppd              = request('no_sppd');
        $aset->no_spk               = request('no_spk');
        $aset->no_ba                = request('no_ba');
        $aset->tanggal_serah_terima = request('tanggal_serah_terima');
        $aset->kontruksi            = request('kontruksi');
        $aset->panjang              = request('panjang');
        $aset->lebar                = request('lebar');
        $aset->luas                 = request('luas');
        $aset->nomor_dokumen        = request('nomor_dokumen');
        $aset->tanggal_dokumen      = request('tanggal_dokumen');
        $aset->status_tanah         = request('status_tanah');
        $aset->nomor_tanah          = request('nomor_tanah');
        $aset->lokasi               = request('lokasi');
        $aset->header               = request('header');
        $aset->urut_kelompok        = request('urut_kelompok');
        $aset->kelompok             = request('kelompok');

        if (request('foto')) $aset->handleUploadFoto();
        $aset->save();

        return redirect('opd/aset')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $aset)
    {
        $aset = Aset::find($aset);
        $aset->handleDelete();
        // return $aset;
        $aset->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
    }

    public function riwayat(Request $request)
    {
        $aset = new Riwayat();
        $aset->id_pegawai = request('id_pegawai');
        $aset->id_ruangan = request('id_ruangan');
        $aset->id_aset = request('id_aset');
        $aset->tanggal_mulai = request('tanggal_mulai');
        $aset->keterangan = request('keterangan');
        $aset->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function hapus(string $riwayat)
    {
        $riwayat = Riwayat::find($riwayat);
        // return $aset;
        $riwayat->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
    }
}
