<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use App\Models\Bangunan;
use App\Models\Kategori;
use App\Models\Opd;
use App\Models\Pegawai;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    public function index()
    {
        $data['list_bangunan'] = Bangunan::all();
        return view('opd.bangunan.index', $data);
    }

    public function create()
    {
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_kategori'] = Kategori::all();

        return view('opd.bangunan.create', $data);
    }

    public function store(Request $request)
    {
        $bangunan = new Bangunan();
        $bangunan->id_opd               = request('id_opd');
        $bangunan->id_kategori          = request('id_kategori');
        $bangunan->id_pegawai           = request('id_pegawai');
        $bangunan->kode_barang          = request('kode_barang');
        $bangunan->nama_barang          = request('nama_barang');
        $bangunan->no_register          = request('no_register');
        $bangunan->tahun_perolehan      = request('tahun_perolehan');
        $bangunan->harga_perolehan      = request('harga_perolehan');
        $bangunan->alamat               = request('alamat');
        $bangunan->keterangan           = request('keterangan');
        $bangunan->nama_sumber_dana     = request('nama_sumber_dana');
        $bangunan->no_sppd              = request('no_sppd');
        $bangunan->no_spk               = request('no_spk');
        $bangunan->no_ba                = request('no_ba');
        $bangunan->bertingkat           = request('bertingkat');
        $bangunan->beton                = request('beton');       
        $bangunan->kelompok             = request('kelompok');
        $bangunan->urut_kelompok        = request('urut_kelompok');
        $bangunan->handleUploadFoto();
        $bangunan->save();

        return redirect('opd/master/bangunan')->with('success', 'Data Berhasil Di Simpan');
    }

    public function show($bangunan)
    {
        $data['bangunan'] = Bangunan::find($bangunan);
        $data['riwayat'] = Riwayat::where('id_aset', $bangunan)->get();
        $data['list_pegawai'] = Pegawai::all();

        return view('opd.bangunan.show', $data);
    }

    public function edit($bangunan)
    {
        $data['bangunan'] = Bangunan::find($bangunan);
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_kategori'] = Kategori::all();

        return view('opd.bangunan.edit', $data);
    }

    public function update($bangunan)
    {
        $bangunan = Bangunan::find($bangunan);
        $bangunan->id_kategori          = request('id_kategori');
        $bangunan->id_pegawai           = request('id_pegawai');
        $bangunan->kode_barang          = request('kode_barang');
        $bangunan->nama_barang          = request('nama_barang');
        $bangunan->no_register          = request('no_register');
        $bangunan->tahun_perolehan      = request('tahun_perolehan');
        $bangunan->harga_perolehan      = request('harga_perolehan');
        $bangunan->alamat               = request('alamat');
        $bangunan->keterangan           = request('keterangan');
        $bangunan->nama_sumber_dana     = request('nama_sumber_dana');
        $bangunan->no_sppd              = request('no_sppd');
        $bangunan->no_spk               = request('no_spk');
        $bangunan->no_ba                = request('no_ba');
        $bangunan->bertingkat           = request('bertingkat');
        $bangunan->beton                = request('beton');       
        $bangunan->kelompok             = request('kelompok');
        $bangunan->urut_kelompok        = request('urut_kelompok');
        $bangunan->handleUploadFoto();
        $bangunan->save();

        return redirect('opd/master/bangunan')->with('success', 'Data Berhasil Di Simpan');
    }

    public function destroy($bangunan)
    {
        Bangunan::destroy($bangunan);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }

    public function riwayat(Request $request)
    {
        $jembatan = new Riwayat();
        $jembatan->id_pegawai = request('id_pegawai');
        $jembatan->id_aset = request('id_aset');
        $jembatan->tanggal_mulai = request('tanggal_mulai');
        $jembatan->keterangan = request('keterangan');
        $jembatan->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function riwayatUpdate($riwayat)
    {
        $jembatan = Riwayat::find($riwayat);
        $jembatan->id_pegawai = request('id_pegawai');
        $jembatan->tanggal_mulai = request('tanggal_mulai');
        $jembatan->keterangan = request('keterangan');
        $jembatan->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }


    public function hapus(string $riwayat)
    {
        $riwayat = Riwayat::find($riwayat);
        
        $riwayat->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
    }
}