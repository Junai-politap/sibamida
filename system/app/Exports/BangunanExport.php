<?php

namespace App\Exports;

use App\Models\Bangunan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BangunanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bangunan::all();
    }

    public function map($bangunan): array
    {
        return [
            $bangunan->opd->nama_opd,
            $bangunan->kategori->nama_kategori,
            $bangunan->pegawai->nama,
            $bangunan->kode_barang,
            $bangunan->nama_barang,
            $bangunan->no_registe,
            $bangunan->tahun_perolehan,
            $bangunan->harga_perolehan,
            $bangunan->alamat,
            $bangunan->kecamatan,
            $bangunan->kelurahan_desa,
            $bangunan->keterangan,
            $bangunan->bidang,
            $bangunan->nama_sumber_dana,
            $bangunan->no_sppd,
            $bangunan->no_spk,
            $bangunan->no_ba,
            $bangunan->bertingkat,
            $bangunan->beton,
            $bangunan->kelompok,
            $bangunan->urut_kelompok,
        ];
    }

    public function headings(): array
    {
        return [
            'Nama OPD',
            'Kategori',
            'Nama Penanggung Jawab',
            'Kode Barang',
            'Nama Barang',
            'Nomor Register',
            'Tahun Perolehan',
            'Harga Perolehan',
            'Alamat',
            'Keterangan',
            'Nama Sumber Dana',
            'Nomor SPPD',
            'Nomor SPK',
            'Nomor Berita Acara',
            'Bertingkat',
            'Beton',
            'Urut Kelompok',
            'Kelompok',
        ];
    }
}
