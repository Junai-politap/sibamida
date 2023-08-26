<?php

namespace App\Http\Controllers\Staff;

use App\Exports\PeralatanExport;
use App\Exports\PeralatanTanggalExport;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Pegawai;
use App\Models\Peralatan;
use App\Models\Riwayat;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Maatwebsite\Excel\Facades\Excel;

class PeralatanDanMesinController extends Controller
{
    public function index()
    {
        $data['list_peralatan'] = Peralatan::orderBy('tahun_perolehan', 'DESC')->get();
        return view('staff-administrasi.peralatan-mesin.index', $data);
    }

    public function create()
    {
        $data['list_kategori'] = Kategori::all();
        return view('staff-administrasi.peralatan-mesin.create', $data);

    }

    public function store(Request $request)
    {
        $peralatan = new Peralatan();
        $peralatan->id_opd = request('id_opd');
        $peralatan->id_kategori = request('id_kategori');
        $peralatan->id_pegawai = request('id_pegawai');
        $peralatan->kode_barang = request('kode_barang');
        $peralatan->nama_barang = request('nama_barang');
        $peralatan->no_register = request('no_register');
        $peralatan->merk = request('merk');
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

        return redirect('staff-administrasi/master/peralatan-mesin')->with('success', 'Data Berhasil Disimpan');
    }

    public function show(string $peralatan)
    {
        $data['peralatan'] = Peralatan::find($peralatan);
        $data['list_kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['riwayat'] = Riwayat::where('id_aset', $peralatan)->get();

        return view('staff-administrasi.peralatan-mesin.show', $data);
    }

    public function edit(string $peralatan)
    {
        $data['peralatan'] = Peralatan::find($peralatan);
        $data['list_kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        return view('staff-administrasi.peralatan-mesin.edit', $data);
    }

    public function update($peralatan)
    {
        $peralatan = Peralatan::find($peralatan);
        $peralatan->id_opd = request('id_opd');
        $peralatan->id_pegawai = request('id_pegawai');
        $peralatan->id_kategori = request('id_kategori');
        $peralatan->kode_barang = request('kode_barang');
        $peralatan->nama_barang = request('nama_barang');
        $peralatan->no_register = request('no_register');
        $peralatan->merk = request('merk');
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

        return redirect('staff-administrasi/master/peralatan-mesin')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(string $peralatan)
    {
        $peralatan = Peralatan::find($peralatan);
        $peralatan->handleDelete();
        // return $peralatan;
        $peralatan->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
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
        // return $jembatan;
        $riwayat->delete();

        return back()->with('danger', 'Data Berhasiil Dihapus');
    }

    public function export()
    {
        return Excel::download(new PeralatanExport, 'peralatan.xlsx');
    }

    public function downloadLaporan(Request $request)
    {
        return Excel::download(new PeralatanTanggalExport($request->tahun_perolehan), 'laporan peralatan.xlsx');
    }
}
