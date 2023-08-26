<?php

namespace App\Http\Controllers\Opd;

use App\Exports\TanahExport;
use App\Exports\TanahTanggalExport;
use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Kategori;
use App\Models\Opd;
use App\Models\Pegawai;
use App\Models\Riwayat;
use App\Models\Tanah;
use Illuminate\Http\Request;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Maatwebsite\Excel\Facades\Excel;

class TanahController extends Controller
{
    public function index()
    {
        $data['list_tanah'] = Tanah::orderBy('tahun_perolehan', 'DESC')->get();
        return view('opd.tanah.index', $data);
    }

    public function create()
    {
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_bidang'] = Bidang::all();
        return view('opd.tanah.create', $data);
    }

    public function store(Request $request)
    {
        $tanah = New Tanah();
        $tanah->id_opd               = request('id_opd');
        $tanah->id_kategori          = request('id_kategori');
        $tanah->id_pegawai           = request('id_pegawai');
        $tanah->id_bidang           = request('id_bidang');
        $tanah->kode_barang          = request('kode_barang');
        $tanah->nama_barang          = request('nama_barang');
        $tanah->register             = request('register');
        $tanah->cara_perolehan       = request('cara_perolehan');
        $tanah->tahun_perolehan      = request('tahun_perolehan');
        $tanah->harga                = request('harga');
        $tanah->luas                 = request('luas');
        $tanah->lokasi               = request('lokasi');
        $tanah->keterangan           = request('keterangan');
        $tanah->penggunaan           = request('penggunaan');
        $tanah->no_sertifikat        = request('no_sertifikat');
        $tanah->handleUploadFoto();
        $tanah->save();
        return redirect('opd/master/tanah')->with('success', 'Data Berhasil Di Simpan');
    }

    public function show($tanah)
    {
        $data['tanah'] = Tanah::find($tanah);
        $data['riwayat'] = Riwayat::where('id_aset', $tanah)->get();
        $data['list_pegawai'] = Pegawai::all();

        return view('opd.tanah.show', $data);
    }

    public function edit($tanah)
    {
        $data['tanah'] = Tanah::find($tanah);
        $data['list_opd'] = Opd::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_bidang'] = Bidang::all();
        return view('opd.tanah.edit', $data);
    }

    public function update($tanah)
    {
        $tanah = Tanah::find($tanah);
        $tanah->id_kategori          = request('id_kategori');
        $tanah->id_pegawai           = request('id_pegawai');
        $tanah->id_bidang           = request('id_bidang');
        $tanah->kode_barang          = request('kode_barang');
        $tanah->nama_barang          = request('nama_barang');
        $tanah->register             = request('register');
        $tanah->cara_perolehan       = request('cara_perolehan');
        $tanah->tahun_perolehan      = request('tahun_perolehan');
        $tanah->harga                = request('harga');
        $tanah->luas                 = request('luas');
        $tanah->lokasi               = request('lokasi');
        $tanah->keterangan           = request('keterangan');
        $tanah->penggunaan           = request('penggunaan');
        $tanah->no_sertifikat        = request('no_sertifikat');
        $tanah->handleUploadFoto();
        $tanah->save();

        return redirect('opd/master/tanah')->with('success', 'Data Berhasil Di Simpan');
    }

    public function destroy($tanah)
    {
        Tanah::destroy($tanah);

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

    public function export()
    {
        return Excel::download(new TanahExport, 'tanah.xlsx');
    }

    public function downloadLaporan(Request $request)
    {
        return Excel::download(new TanahTanggalExport($request->tahun_perolehan), 'laporan tanah.xlsx');
    }
}
