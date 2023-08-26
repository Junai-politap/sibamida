<?php

namespace App\Exports;

use App\Models\Tanah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TanahExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Tanah::all();
    }

    public function map($tanah): array
    {
        return [
            $tanah->opd->nama_opd,
            $tanah->kategori->nama_kategori,
            $tanah->pegawai->nama,
            $tanah->kode_barang,
            $tanah->nama_barang,
            $tanah->register,
            $tanah->cara_perolehan,
            $tanah->tahun_perolehan,
            $tanah->harga,
            $tanah->luas,
            $tanah->lokasi,
            $tanah->keterangan,
            $tanah->penggunaan,
            $tanah->no_sertifikat,
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
            'Cara Perolehan',
            'Tahun Perolehan',
            'Harga Perolehan',
            'Luas',
            'Lokasi',
            'Keterangan',
            'Penggunaan',
            'Nomor Sertifikat',
        ];
    }
}
