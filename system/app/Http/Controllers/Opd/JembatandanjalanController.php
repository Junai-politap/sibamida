<?php

namespace App\Http\Controllers\Opd;

use App\Exports\JembatanExport;
use App\Exports\JembatanTanggalExport;
use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Jembatan;
use App\Models\Kategori;
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
use Maatwebsite\Excel\Facades\Excel;


class JembatandanjalanController extends Controller
{
    
    public function index()
    {
        $data['list_jembatan'] = Jembatan::orderBy('tahun_perolehan', 'DESC')->get();
        return view('opd.jembatan.index', $data);
    }

    
    public function create()
    {
        $data['list_pegawai'] = Pegawai::all();
        $data['kategori'] = Kategori::all();
        $data['list_bidang'] = Bidang::all();
        return view('opd.jembatan.create', $data);
    }

    
    public function store(Request $request)
    {
        $jembatan = new Jembatan();
        $jembatan->id_opd               = request('id_opd');
        $jembatan->id_kategori          = request('id_kategori');
        $jembatan->id_pegawai           = request('id_pegawai');
        $jembatan->id_bidang            = request('id_bidang');
        $jembatan->kode_aset            = request('kode_aset');
        $jembatan->nama_aset            = request('nama_aset');
        $jembatan->no_register          = request('no_register');
        $jembatan->tahun_perolehan      = request('tahun_perolehan');
        $jembatan->harga_perolehan      = request('harga_perolehan');
        $jembatan->keterangan           = request('keterangan');
        $jembatan->alamat       = request('alamat');
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

        return redirect('opd/master/jembatan-jalan')->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show(string $jembatan)
    {
        $data['jembatan'] = Jembatan::find($jembatan);
        $data['kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['riwayat'] = Riwayat::where('id_aset', $jembatan)->get();

        return view('opd.jembatan.show', $data);
    }

    
    public function edit(string $jembatan)
    {
        $data['jembatan'] = Jembatan::find($jembatan);
        $data['kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_bidang'] = Bidang::all();
        return view('opd.jembatan.edit', $data);
    }

    
    public function update($jembatan)
    {

        $jembatan = Jembatan::find($jembatan);
        $jembatan->id_opd               = request('id_opd');
        $jembatan->id_kategori          = request('id_kategori');
        $jembatan->id_pegawai           = request('id_pegawai');
        $jembatan->id_bidang            = request('id_bidang');
        $jembatan->kode_aset            = request('kode_aset');
        $jembatan->nama_aset            = request('nama_aset');
        $jembatan->no_register          = request('no_register');
        $jembatan->tahun_perolehan      = request('tahun_perolehan');
        $jembatan->harga_perolehan      = request('harga_perolehan');
        $jembatan->keterangan           = request('keterangan');
        $jembatan->alamat       = request('alamat');
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
        if (request('foto'))
            $jembatan->handleUploadFoto();
        $jembatan->save();

        return redirect('opd/master/jembatan-jalan')->with('success', 'Data Berhasil Diedit');
    }

    
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
        return Excel::download(new JembatanExport, 'jembatan.xlsx');
    }

    public function downloadLaporan(Request $request)
    {
        $tahunMulai = $request->input('tahun_mulai');
        $tahunSelesai = $request->input('tahun_selesai');

        return Excel::download(new JembatanTanggalExport($tahunMulai, $tahunSelesai), 'laporan jembatan.xlsx');
    }
}
