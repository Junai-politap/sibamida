<x-web>
    @include('menu.menu')

    <section class="page-banner bg_cover position-relative z-1"
        style="background-image: url({{ url('public') }}/kantor.jpg);">
        <div class="brand-card text-center">

            <h3>{{ $bangunan->opd->singkatan }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="cat-btn" style="font-size: 300%">Detail {{ $bangunan->nama_barang }}</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="active"><a href="{{ url("bangunan/$bangunan->id_opd") }}"> Data Aset bangunan dan
                                    Jalan </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-details-page pt-170 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-details-wrapper mb-40 wow fadeInUp">
                        <div class="blog-post-item">
                            <div class="post-thumbnail">
                                <img src="{{ url("public/$bangunan->foto") }}"
                                    style="object-fit: cover; position: static; width: 100%; height: 30%;">
                            </div>
                            <div class="post-content">
                                <div class="entry-content" style="text-align: center">
                                    <p class="cat-btn">{{ $bangunan->pegawai->nama }}</p>
                                    <h3 class="title">
                                        {{ $bangunan->nama_barang }}
                                    </h3>

                                    <h3 style="font-size: 120%; margin-top: -2%">
                                        Bidang {{ $bangunan->bidang->nama_bidang }}
                                    </h3>
                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i>{{ $bangunan->kategori->nama_kategori }}
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i>{{ $bangunan->kode_barang }}
                                                </span>
                                            </li>
                                        </ul>
                                        <div id="test" style="width: 50%; margin-left: 32%"></div>
                                    </div>
                                </div>

                                <div class="post-thumbnail">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">

                                                <table class="table" style="width: 100%">
                                                    <thead>

                                                        <tr>
                                                            <td style="width: 40%">Nomor Register</td>
                                                            <td> : {{ $bangunan->no_register }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Tahun Perolehan</td>
                                                            <td> : {{ $bangunan->tahun_perolehan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Harga Perolehan</td>
                                                            <td> : {{ $bangunan->harga_perolehan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Alamat</td>
                                                            <td> : {{ $bangunan->alamat }}</td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 40%">Kecamatan</td>
                                                            <td> : {{ $bangunan->kecamatan }}</td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 40%">Kelurahan Desa</td>
                                                            <td> : {{ $bangunan->kelurahan_desa }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Keterangan</td>
                                                            <td> : {{ $bangunan->keterangan }}</td>
                                                        </tr>
                                                        

                                                        <tr>
                                                            <td style="width: 40%">Nama Sumber Dana</td>
                                                            <td> : {{ $bangunan->nama_sumber_dana }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor SPPD</td>
                                                            <td> : {{ $bangunan->no_sppd }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor SPK</td>
                                                            <td> : {{ $bangunan->no_spk }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor Berita Acara</td>
                                                            <td> : {{ $bangunan->no_ba }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Bertingkat</td>
                                                            <td> : {{ $bangunan->bertingkat }}</td>
                                                        </tr>
                                                        
                                                        
                                                        <tr>
                                                            <td style="width: 40%">Beton</td>
                                                            <td> : {{ $bangunan->beton }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Urut Kelompok</td>
                                                            <td> : {{ $bangunan->urut_kelompok }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Kelompok</td>
                                                            <td> : {{ $bangunan->kelompok }}</td>
                                                        </tr>
                                                    </thead>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-widget-area">
                        <div class="widget search-widget mb-0 wow fadeInUp">
                            <p style="text-align: center; font-size: 140%"><strong>Data Riwayat Aset </strong></p>
                        </div>
                        <div class="sidebar-widget-area">
                            @foreach ($list_riwayat as $riwayat)
                                <div class="widget author-widget mb-10 wow fadeInUp">
                                    <div class="author-content">
                                        <img src="{{ url('public/', $riwayat->pegawai->foto) }}" alt="User Image">
                                        <h4>
                                            {{ $riwayat->pegawai->nama }}
                                        </h4>
                                        <p>
                                            {!! nl2br($riwayat->keterangan) !!}
                                        </p>
                                        <ul class="social-link" style="color: white; font-size: 80%">
                                            <li>Tanggal Mulai</li>
                                            <li>: {{ date('d-m-Y', strtotime($riwayat->tanggal_mulai)) }}</li>

                                        </ul>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web>

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        let 
        
        card = "Nama OPD: {{ $bangunan->opd->nama_opd }}\r\n";
        card += "Nama Penanggungjawab: {{ $bangunan->pegawai->nama }}\r\n";
        card += "Kategori Barang : {{ $bangunan->kategori->nama_kategori }}\r\n";
        card += "Nama Bidang : {{ $bangunan->bidang->nama_bidang }}\r\n";
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
        
        new QRCode(document.getElementById("test"), card);
      
    </script>