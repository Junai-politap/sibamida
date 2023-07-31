<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jembatan;
use App\Models\Kategori;
use App\Models\Opd;
use App\Models\Pegawai;
use App\Models\Riwayat;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class JembatanController extends Controller
{
    
    public function index()
    {
        $data['list_jembatan'] = Jembatan::all();

        return view('admin.jembatan.index', $data);
    }

    
    public function create()
    {
        $data['list_opd'] = Opd::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['list_pegawai'] = Pegawai::all();
        
        return view('admin.jembatan.create', $data);
    }

    
    public function store(Request $request)
    {
        $jembatan = new Jembatan();
        $jembatan->id_opd               = request('id_opd');
        $jembatan->id_kategori          = request('id_kategori');
        $jembatan->id_pegawai           = request('id_pegawai');
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

        return redirect('admin/master/jembatan-jalan')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function show($jembatan)
    {
        $data['jembatan'] = Jembatan::find($jembatan);
        $data['riwayat'] = Riwayat::all();
        $data['list_pegawai'] = Pegawai::all();

        return view('admin.jembatan.show', $data);
    
    }

    
    public function edit($jembatan)
    {
        $data['list_opd'] = Opd::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['jembatan'] = Jembatan::find($jembatan);

        return view('admin.jembatan.edit', $data);

    }

    
    public function update($jembatan)
    {
        $jembatan = Jembatan::find($jembatan);
        $jembatan->id_opd               = request('id_opd');
        $jembatan->id_kategori          = request('id_kategori');
        $jembatan->id_pegawai           = request('id_pegawai');
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

        return redirect('admin/master/jembatan-jalan')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function destroy($jembatan)
    {
        Jembatan::destroy($jembatan);

        return back()->with('danger', ' Data Berhasil Di Hapus');
    }
}