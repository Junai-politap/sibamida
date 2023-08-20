<x-web>

    @include('menu.menu')


    <section class="page-banner bg_cover p-r z-1"
    style="background-image: url({{ url('public') }}/kantor.jpg);">
    <div class="brand-card text-center">

        <h3>{{ $opd->singkatan }}</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h2 style="color: white"> Data Aset Peralatan dan Mesin</h2>
                    <ul class="breadcrumbs-link">
                        <li><a href="{{ url('/') }}">Dashboard</a></li>
                        <li class="active"><a href="{{ url("master-aset/$opd->id") }}">Data Aset</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="project-grid-page p-r z-1 pt-170 pb-130" id="project-filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">Master Aset</span>
                        <h2>Info Seluruh Data Peralatan</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Aset</th>
                                        <th class="text-center">Nama Aset</th>
                                        <th class="text-center">Nama Penanggungjawab</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_peralatan as $peralatan)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-left"> {{ $peralatan->kode_barang }}</td>
                                            <td class="">{{ $peralatan->nama_barang }}</td>
                                            <td class="">{{ $peralatan->pegawai->nama }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#Qrcode{{ $peralatan->id }}">Lihat QrCode</button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web>


@foreach ($list_peralatan as $peralatan)
    <div class="modal fade" id="Qrcode{{ $peralatan->id }}" tabindex="-1" role="dialog" aria-labelledby="Qrcode"
        aria-hidden="true">
        <div class="modal-dialog modal-md " role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button class="btn btn-warning float-right" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times; Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <p class="text-center">{{ $peralatan->nama_barang }}</p>
                        <div class="card-body">
                            <div id="test{{ $peralatan->id }}" style="width: 60%; margin-left:20%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script>
    let
    @foreach ($list_peralatan as $peralatan)

        card = "Nama OPD: {{ $peralatan->opd->nama_opd }}\r\n";
        card += "Nama Penanggungjawab: {{ $peralatan->pegawai->nama }}\r\n";
        card += "Kategori Barang : {{ $peralatan->kategori->nama_kategori }}\r\n";
        card += "Kode Barang : {{ $peralatan->kode_barang }}\r\n";
        card += "Nama Barang : {{ $peralatan->nama_barang }}\r\n";
        card += "Nomor Register : {{ $peralatan->no_register }}\r\n";
        card += "Tahun Perolehan : {{ $peralatan->tahun_perolehan }}\r\n";
        card += "Harga Perolehan :Rp. {{ $peralatan->harga_perolehan }}\r\n";
        card += "Keterangan : {{ $peralatan->keterangan }}\r\n";
        card += "Alamat : {{ $peralatan->alamat }}\r\n";
        card += "Kecamatan : {{ $peralatan->kecamatan }}\r\n";
        card += "Kelurahan Desa : {{ $peralatan->kelurahan_desa }}\r\n";
        card += "Nomor SPPD : {{ $peralatan->no_sppd }}\r\n";
        card += "Nomor SPK : {{ $peralatan->no_spk }}\r\n";
        card += "Nomor Berita Acara : {{ $peralatan->no_ba }}\r\n";

        new QRCode(document.getElementById("test{{ $peralatan->id }}"), card);
    @endforeach
</script>