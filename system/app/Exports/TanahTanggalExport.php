<?php

namespace App\Exports;

use App\Models\Bangunan;
use App\Models\Tanah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TanahTanggalExport implements WithMapping, WithHeadings, FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $tahunMulai;
    protected $tahunSelesai;

    public function __construct($tahunMulai,$tahunSelesai)
    {
        $this->tahunMulai = $tahunMulai;
        $this->tahunSelesai = $tahunSelesai;
    }

    public function query()
    {
        // Di sini Anda dapat menulis logika untuk mengambil data laporan berdasarkan tahun
        // Misalnya, menggunakan model atau data yang diperlukan
        return Tanah::query()->whereBetween('tahun_perolehan', [$this->tahunMulai,$this->tahunSelesai]);
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
