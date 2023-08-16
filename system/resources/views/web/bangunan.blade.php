<x-web>

    @include('menu.menu')


    <section class="page-banner bg_cover p-r z-1"
    style="background-image: url({{ url('public/web') }}/assets/images/bg/page-bg-1.jpg);">
    <div class="brand-card text-center">

        <h3>{{ $opd->singkatan }}</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h2 style="color: white">Data Aset Bangunan</h2>
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
                        <h2>Info Seluruh Data Bangunan</h2>
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
                                    @foreach ($list_bangunan as $bangunan)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-left"> {{ $bangunan->kode_barang }}</td>
                                            <td class="">{{ $bangunan->nama_barang }}</td>
                                            <td class="">{{ $bangunan->pegawai->nama }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#Qrcode">Lihat QrCode</button>
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

<div class="modal fade" id="Qrcode" tabindex="-1" role="dialog"
    aria-labelledby="Qrcode" aria-hidden="true">
    <div class="modal-dialog modal-md " role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <button class="btn btn-warning float-right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times; Close</span>
                </button>
            </div>
            <div class="modal-body">
               <div class="card">
                <div class="card-body">
                    <div id="test" style="width: 60%; margin-left:20%"></div>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        let 
        @foreach($list_bangunan as $bangunan)
        
        card = "Nama OPD: {{ $bangunan->opd->nama_opd }}\r\n";
        card += "Nama Penanggungjawab: {{ $bangunan->pegawai->nama }}\r\n";
        card += "Kategori Barang : {{ $bangunan->kategori->nama_kategori }}\r\n";
        card += "Kode Barang : {{ $bangunan->kode_barang }}\r\n";
        card += "Nama Barang : {{ $bangunan->nama_barang }}\r\n";
        card += "Nomor Register : {{ $bangunan->no_register }}\r\n";
        card += "Tahun Perolehan : {{ $bangunan->tahun_perolehan }}\r\n";
        card += "Harga Perolehan :Rp. {{ $bangunan->harga_perolehan }}\r\n";
        card += "Keterangan : {{ $bangunan->keterangan }}\r\n";
        card += "Alamat : {{ $bangunan->alamat }}\r\n";
        card += "Kecamatan : {{ $bangunan->kecamatan }}\r\n";
        card += "Kelurahan Desa : {{ $bangunan->kelurahan_desa }}\r\n";
        card += "Nomor SPPD : {{ $bangunan->no_sppd }}\r\n";
        card += "Nomor SPK : {{ $bangunan->no_spk }}\r\n";
        card += "Nomor Berita Acara : {{ $bangunan->no_ba }}\r\n";
        
        @endforeach
        new QRCode(document.getElementById("test"), card);
    </script>