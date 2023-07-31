<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use App\Models\Jembatan;
use App\Models\Kategori;
use App\Models\Pegawai;
use App\Models\Riwayat;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class JembatandanjalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_jembatan'] = Jembatan::all();
        return view('opd.jembatan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_pegawai'] = Pegawai::all();
        $data['kategori'] = Kategori::all();
        // return $data;
        return view('opd.jembatan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jembatan = new Jembatan();
        $jembatan->id_opd               = request('id_opd');
        $jembatan->id_kategori          = request('id_kategori');
        $jembatan->id_pegawai          = request('id_pegawai');
        $jembatan->kode_aset            = request('kode_aset');
        $jembatan->nama_aset            = request('nama_aset');
        $jembatan->no_register          = request('no_register');
        $jembatan->tahun_perolehan      = request('tahun_perolehan');
        $jembatan->harga_perolehan      = request('harga_perolehan');
        $jembatan->keterangan           = request('keterangan');
        $jembatan->alamat               = request('alamat');
        $jembatan->nama_kondisi         = request('nama_kondisi');
        $jembatan->nama_sumber_dana     = request('nama_sumber_dana');
        $jembatan->no_sppd              = request('no_sppd');
        $jembatan->no_spk               = request('no_spk');
        $jembatan->no_ba                = request('no_ba');
        $jembatan->tanggal_serah_terima = request('tanggal_serah_terima');
        $jembatan->kontruksi            = request('kontruksi');
        $jembatan->panjang              = request('panjang');
        $jembatan->lebar                = request('lebar');
        $jembatan->luas                 = request('luas');
        $jembatan->nomor_dokumen        = request('nomor_dokumen');
        $jembatan->tanggal_dokumen      = request('tanggal_dokumen');
        $jembatan->status_tanah         = request('status_tanah');
        $jembatan->nomor_tanah          = request('nomor_tanah');
        $jembatan->lokasi               = request('lokasi');
        $jembatan->header               = request('header');
        $jembatan->urut_kelompok        = request('urut_kelompok');
        $jembatan->kelompok             = request('kelompok');
        $jembatan->handleUploadFoto();
        $jembatan->save();

        return redirect('opd/jembatan')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $jembatan)
    {
        $data['jembatan'] = Jembatan::find($jembatan);
        $data['kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['ruangan'] = Ruangan::all();
        $data['riwayat'] = Riwayat::where('id_jembatan', $jembatan)->get();
        return view('opd.jembatan.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $jembatan)
    {
        $data['jembatan'] = Jembatan::find($jembatan);
        $data['kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        return view('opd.jembatan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Jembatan $jembatan)
    {
        $jembatan->id_opd               = request('id_opd');
        $jembatan->id_kategori          = request('id_kategori');
        $jembatan->id_pegawai          = request('id_pegawai');
        $jembatan->kode_aset            = request('kode_aset');
        $jembatan->nama_aset            = request('nama_aset');
        $jembatan->no_register          = request('no_register');
        $jembatan->tahun_perolehan      = request('tahun_perolehan');
        $jembatan->harga_perolehan      = request('harga_perolehan');
        $jembatan->keterangan           = request('keterangan');
        $jembatan->alamat               = request('alamat');
        $jembatan->nama_kondisi         = request('nama_kondisi');
        $jembatan->nama_sumber_dana     = request('nama_sumber_dana');
        $jembatan->no_sppd              = request('no_sppd');
        $jembatan->no_spk               = request('no_spk');
        $jembatan->no_ba                = request('no_ba');
        $jembatan->tanggal_serah_terima = request('tanggal_serah_terima');
        $jembatan->kontruksi            = request('kontruksi');
        $jembatan->panjang              = request('panjang');
        $jembatan->lebar                = request('lebar');
        $jembatan->luas                 = request('luas');
        $jembatan->nomor_dokumen        = request('nomor_dokumen');
        $jembatan->tanggal_dokumen      = request('tanggal_dokumen');
        $jembatan->status_tanah         = request('status_tanah');
        $jembatan->nomor_tanah          = request('nomor_tanah');
        $jembatan->lokasi               = request('lokasi');
        $jembatan->header               = request('header');
        $jembatan->urut_kelompok        = request('urut_kelompok');
        $jembatan->kelompok             = request('kelompok');
        if (request('foto')) $jembatan->handleUploadFoto();
        $jembatan->save();

        return redirect('opd/jembatan')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $jembatan)
    {
        $jembatan = Jembatan::find($jembatan);
        $jembatan->handleDelete();
        // return $aset;
        $jembatan->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
    }

    public function riwayat(Request $request)
    {
        $jembatan = new Riwayat();
        $jembatan->id_pegawai = request('id_pegawai');
        $jembatan->id_jembatan = request('id_jembatan');
        $jembatan->tanggal_mulai = request('tanggal_mulai');
        $jembatan->keterangan = request('keterangan');
        $jembatan->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function hapus(string $riwayat)
    {
        $riwayat = Riwayat::find($riwayat);
        // return $jembatan;
        $riwayat->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
    }
}
