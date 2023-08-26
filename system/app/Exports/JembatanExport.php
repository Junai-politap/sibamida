<?php

namespace App\Exports;

use App\Models\Jembatan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class JembatanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Jembatan::all();
    }


    public function map($jembatan): array
    {
        return [
            $jembatan->opd->nama_opd,
            $jembatan->kategori->nama_kategori,
            $jembatan->pegawai->nama,
            $jembatan->kode_aset,
            $jembatan->nama_aset,
            $jembatan->no_register,
            $jembatan->tahun_perolehan,
            $jembatan->harga_perolehan,
            $jembatan->keterangan,
            $jembatan->alamat,
            $jembatan->nama_kondisi,
            $jembatan->nama_sumber_dana,
            $jembatan->no_sppd,
            $jembatan->no_spk,
            $jembatan->no_ba,
            $jembatan->tanggal_serah_terima,
            $jembatan->kontruksi,
            $jembatan->panjang,
            $jembatan->lebar,
            $jembatan->luas,
            $jembatan->nomor_dokumen,
            $jembatan->tanggal_dokumen,
            $jembatan->status_tanah,
            $jembatan->nomor_tanah,
            $jembatan->lokasi,
            $jembatan->header,
            $jembatan->urut_kelompok,
            $jembatan->kelompok,
        ];
    }


    public function headings(): array
    {
        return [
            'Nama OPD',
            'Kategori',
            'Nama Penanggung Jawab',
            'Kode Aset',
            'Nama Aset',
            'Nomor Register',
            'Tahun Perolehan',
            'Harga Perolehan',
            'Keterangan',
            'Alamat',
            'Nama Kondisi',
            'Nama Sumber Dana',
            'Nomor SPPD',
            'Nomor SPK',
            'Nomor Berita Acara',
            'Tanggal Serah Terima',
            'Kontruksi',
            'Panjang',
            'Lebar',
            'Luas',
            'Nomor Dokumen',
            'Tanggal Dokumen',
            'Status Tanah',
            'Nomor Tanah',
            'Lokasi',
            'Header',
            'Urut Kelompok',
            'Kelompok',
        ];
    }
}
