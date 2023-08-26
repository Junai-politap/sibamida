<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bangunan;
use App\Models\Bidang;
use App\Models\Kategori;
use App\Models\Opd;
use App\Models\Pegawai;
use App\Models\Riwayat;
use Illuminate\Http\Request;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class BangunanController extends Controller
{
    public function index()
    {
        $data['list_bangunan'] = Bangunan::orderBy('tahun_perolehan', 'DESC')->get();
        return view('admin.bangunan.index', $data);
    }

    public function create()
    {
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_kategori'] = Kategori::all();

        return view('admin.bangunan.create', $data);
    }

    public function store(Request $request)
    {
        $bangunan = new Bangunan();
        $bangunan->id_opd               = request('id_opd');
        $bangunan->id_kategori          = request('id_kategori');
        $bangunan->id_pegawai           = request('id_pegawai');
        $bangunan->id_bidang           = request('id_bidang');
        $bangunan->kode_barang          = request('kode_barang');
        $bangunan->nama_barang          = request('nama_barang');
        $bangunan->no_register          = request('no_register');
        $bangunan->tahun_perolehan      = request('tahun_perolehan');
        $bangunan->harga_perolehan      = request('harga_perolehan');
        $bangunan->alamat               = request('alamat');
        $bangunan->kecamatan            = request('kecamatan');
        $bangunan->kelurahan_desa       = request('kelurahan_desa');
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

        return redirect('admin/master/bangunan')->with('success', 'Data Berhasil Di Simpan');
    }

    public function show($bangunan)
    {
        $data['bangunan'] = Bangunan::find($bangunan);
        $data['riwayat'] = Riwayat::where('id_aset', $bangunan)->get();
        $data['list_pegawai'] = Pegawai::all();

        return view('admin.bangunan.show', $data);
    }

    public function edit($bangunan)
    {
        $data['bangunan'] = Bangunan::find($bangunan);
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_bidang'] = Bidang::all();
        return view('admin.bangunan.edit', $data);
    }

    public function update($bangunan)
    {
        $bangunan = Bangunan::find($bangunan);
        $bangunan->id_opd               = request('id_opd');
        $bangunan->id_kategori          = request('id_kategori');
        $bangunan->id_pegawai           = request('id_pegawai');
        $bangunan->id_bidang           = request('id_bidang');
        $bangunan->kode_barang          = request('kode_barang');
        $bangunan->nama_barang          = request('nama_barang');
        $bangunan->no_register          = request('no_register');
        $bangunan->tahun_perolehan      = request('tahun_perolehan');
        $bangunan->harga_perolehan      = request('harga_perolehan');
        $bangunan->alamat               = request('alamat');
        $bangunan->kecamatan            = request('kecamatan');
        $bangunan->kelurahan_desa       = request('kelurahan_desa');
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

        return redirect('admin/master/bangunan')->with('success', 'Data Berhasil Di Simpan');
    }

    public function destroy($bangunan)
    {
        Bangunan::destroy($bangunan);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }

    public function riwayat(Request $request)
    {
        $riwayat = new Riwayat();
        $riwayat->id_pegawai = request('id_pegawai');
        $riwayat->id_aset = request('id_aset');
        $riwayat->tanggal_mulai = request('tanggal_mulai');
        $riwayat->keterangan = request('keterangan');
        $riwayat->handleUploadSK();
        $riwayat->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function riwayatUpdate($riwayat)
    {
        $riwayat = Riwayat::find($riwayat);
        $riwayat->id_pegawai = request('id_pegawai');
        $riwayat->tanggal_mulai = request('tanggal_mulai');
        $riwayat->keterangan = request('keterangan');
        $riwayat->handleUploadSK();
        $riwayat->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }


    public function hapus(string $riwayat)
    {
        $riwayat = Riwayat::find($riwayat);
        
        $riwayat->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
    }
}
