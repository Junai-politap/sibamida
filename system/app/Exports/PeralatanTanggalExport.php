<?php

namespace App\Exports;

use App\Models\Bangunan;
use App\Models\Peralatan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PeralatanTanggalExport implements WithMapping, WithHeadings, FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $tahun_perolehan;

    public function __construct($tahun_perolehan,)
    {
        $this->tahun_perolehan = $tahun_perolehan;
    }

    public function query()
    {
        // Di sini Anda dapat menulis logika untuk mengambil data laporan berdasarkan tahun
        // Misalnya, menggunakan model atau data yang diperlukan
        return Peralatan::query()->where('tahun_perolehan', [$this->tahun_perolehan]);
    }

    public function map($peralatan): array
    {
        return [
            $peralatan->opd->nama_opd,
            $peralatan->kategori->nama_kategori,
            $peralatan->pegawai->nama,
            $peralatan->kelompok,
            $peralatan->kode_barang,
            $peralatan->nama_barang,
            $peralatan->no_register,
            $peralatan->merk,
            $peralatan->tahun_perolehan,
            $peralatan->harga_perolehan,
            $peralatan->keterangan,
            $peralatan->no_sppd,
            $peralatan->no_spk,
            $peralatan->no_ba,
            $peralatan->tanggal_serah_terima,
            $peralatan->ekstrakomtable,
            $peralatan->ukuran,
            $peralatan->no_pabrik,
            $peralatan->no_mesin,
            $peralatan->no_bpkb,
            $peralatan->no_polisi,
            $peralatan->no_rangka,
            $peralatan->keterangan1,
            $peralatan->harga_perolehan1,
        ];
    }


    public function headings(): array
    {
        return [
            'Nama OPD',
            'Kategori',
            'Nama Penanggung Jawab',
            'Kelompok',
            'Kode Barang',
            'Nama Barang',
            'Nomor Register',
            'Merk Barang',
            'Tahun Perolehan',
            'Keterangan',
            'Harga Perolehan',
            'Nomor SPPD',
            'Nomor SPK',
            'Nomor Berita Acara',
            'Tanggal Serah Terima',
            'Ekstrakomtable',
            'Ukuran',
            'Nomor Pabrik',
            'Mesin',
            'BPKB',
            'Polisi',
            'Rangka',
            'keterangan 1',
            'Harga Perolehan 1',
        ];
    }
}
