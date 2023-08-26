<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Kategori;
use App\Models\Kondisi;
use App\Models\Opd;
use App\Models\Pegawai;
use App\Models\Peralatan;
use App\Models\Riwayat;
use App\Models\Ruangan;
use Illuminate\Http\Request;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class PeralatanDanMesinController extends Controller
{

    public function index()
    {
        $data['list_opd'] = Opd::all();
        $data['list_peralatan'] = Peralatan::orderBy('tahun_perolehan', 'DESC')->get();
        return view('admin.peralatan-mesin.index', $data);
    }

    public function create()
    {
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_kategori'] = Kategori::all();
        return view('admin.peralatan-mesin.create', $data);
    }


    public function store(Request $request)
    {
        $peralatan = new Peralatan();
        $peralatan->id_opd = request('id_opd');
        $peralatan->id_kategori = request('id_kategori');
        $peralatan->id_pegawai = request('id_pegawai');
        $peralatan->id_bidang = request('id_bidang');
        $peralatan->id_ruangan = request('id_ruangan');
        $peralatan->kode_barang = request('kode_barang');
        $peralatan->nama_barang = request('nama_barang');
        $peralatan->no_register = request('no_register');
        $peralatan->merk = request('merk');
        $peralatan->id_kondisi = request('id_kondisi');
        $peralatan->tahun_perolehan = request('tahun_perolehan');
        $peralatan->harga_perolehan = request('harga_perolehan');
        $peralatan->keterangan = request('keterangan');
        $peralatan->no_sppd = request('no_sppd');
        $peralatan->no_spk = request('no_spk');
        $peralatan->no_ba = request('no_ba');
        $peralatan->tanggal_serah_terima = request('tanggal_serah_terima');
        $peralatan->ekstrakomtable = request('ekstrakomtable');
        $peralatan->ukuran = request('ukuran');
        $peralatan->no_pabrik = request('no_pabrik');
        $peralatan->no_mesin = request('no_mesin');
        $peralatan->no_bpkb = request('no_bpkb');
        $peralatan->no_polisi = request('no_polisi');
        $peralatan->no_rangka = request('no_rangka');
        $peralatan->kelompok = request('kelompok');
        $peralatan->keterangan1 = request('keterangan1');
        $peralatan->harga_perolehan1 = request('harga_perolehan1');
        $peralatan->handleUploadFoto();
        $peralatan->save();

        return redirect('admin/master/peralatan-mesin')->with('success', 'Data Berhasil Disimpan');
    }


    public function show(string $peralatan)
    {
        $data['peralatan'] = Peralatan::find($peralatan);
        $data['list_kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['riwayat'] = Riwayat::where('id_aset', $peralatan)->get();

        $peralatan = Peralatan::find($peralatan);

        return view('admin.peralatan-mesin.show', $data);
    }


    public function edit(string $peralatan)
    {
        $data['peralatan'] = Peralatan::find($peralatan);
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_bidang'] = Bidang::all();
        $data['list_kondisi'] = Kondisi::all();
        $data['list_ruangan'] = Ruangan::all();
        return view('admin.peralatan-mesin.edit', $data);
    }


    public function update($peralatan)
    {
        $peralatan = Peralatan::find($peralatan);
        $peralatan->id_opd = request('id_opd');
        $peralatan->id_pegawai = request('id_pegawai');
        $peralatan->id_kategori = request('id_kategori');
        $peralatan->id_bidang = request('id_bidang');
        $peralatan->id_ruangan = request('id_ruangan');
        $peralatan->kode_barang = request('kode_barang');
        $peralatan->nama_barang = request('nama_barang');
        $peralatan->no_register = request('no_register');
        $peralatan->merk = request('merk');
        $peralatan->id_kondisi = request('id_kondisi');
        $peralatan->tahun_perolehan = request('tahun_perolehan');
        $peralatan->harga_perolehan = request('harga_perolehan');
        $peralatan->keterangan = request('keterangan');
        $peralatan->no_sppd = request('no_sppd');
        $peralatan->no_spk = request('no_spk');
        $peralatan->no_ba = request('no_ba');
        $peralatan->tanggal_serah_terima = request('tanggal_serah_terima');
        $peralatan->ekstrakomtable = request('ekstrakomtable');
        $peralatan->ukuran = request('ukuran');
        $peralatan->no_pabrik = request('no_pabrik');
        $peralatan->no_mesin = request('no_mesin');
        $peralatan->no_bpkb = request('no_bpkb');
        $peralatan->no_polisi = request('no_polisi');
        $peralatan->no_rangka = request('no_rangka');
        $peralatan->kelompok = request('kelompok');
        $peralatan->keterangan1 = request('keterangan1');
        $peralatan->harga_perolehan1 = request('harga_perolehan1');
        if (request('foto')) $peralatan->handleUploadFoto();
        $peralatan->save();

        return redirect('admin/master/peralatan-mesin')->with('success', 'Data Berhasil Diedit');
    }


    public function destroy(string $peralatan)
    {
        Peralatan::destroy($peralatan);
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

    public function storeKondisi()
    {
        $kondisi = new Kondisi();
        $kondisi->id_opd = request('id_opd');
        $kondisi->nama_kondisi = request('nama_kondisi');
        $kondisi->save();

        return back()->with('success', 'Data Berhasil Di Simpan');
    }


}
