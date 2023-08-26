<x-web>
    @include('menu.menu')

    <section class="page-banner bg_cover position-relative z-1"
        style="background-image: url({{ url('public') }}/kantor.jpg);">
        <div class="brand-card text-center">

            <h3>{{ $tanah->opd->singkatan }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="cat-btn" style="font-size: 300%">Detail {{ $tanah->nama_aset }}</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="active"><a href="{{ url("tanah/$tanah->id_opd") }}"> Data Aset tanah dan
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
                                <img src="{{ url("public/$tanah->foto") }}"
                                    style="object-fit: cover; position: static; width: 100%; height: 30%;">
                            </div>
                            <div class="post-content">
                                <div class="entry-content" style="text-align: center">
                                    <p class="cat-btn">{{ $tanah->pegawai->nama }}</p>
                                    <h3 class="title">
                                        {{ $tanah->nama_barang }}
                                    </h3>

                                    <h3 style="font-size: 120%; margin-top: -2%">
                                         @isset($tanah->bidang->nama_bidang )
                                        BIDANG {{ $tanah->bidang->nama_bidang }}
                                        @else
                                        <strong>DATA TIDAK ADA NAMA BIDANG</strong>
                                        @endisset
                                    </h3>

                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i>{{ $tanah->kategori->nama_kategori }}
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i>{{ $tanah->kode_barang }}
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
                                                            <td> : {{ $tanah->register }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Cara Perolehan</td>
                                                            <td> : {{ $tanah->cara_perolehan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Tahun Perolehan</td>
                                                            <td> : {{ $tanah->tahun_perolehan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Harga Perolehan</td>
                                                            <td> : {{ $tanah->harga }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Luas</td>
                                                            <td> : {{ $tanah->luas }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Lokasi</td>
                                                            <td> : {{ $tanah->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Keterangan</td>
                                                            <td> : {{ $tanah->keterangan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Penggunaan</td>
                                                            <td> : {{ $tanah->penggunaan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor Sertifikat</td>
                                                            <td> : {{ $tanah->no_sertifikat }}</td>
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
    
    card = "Nama OPD: {{ $tanah->opd->nama_opd }}\r\n";
        card += "Nama Penanggungjawab: {{ $tanah->pegawai->nama }}\r\n";
        card += "Nama Bidang: @isset($tanah->bidang->nama_bidang ){{ $tanah->bidang->nama_bidang }}@else DATA TIDAK ADA NAMA BIDANG @endisset\r\n";
        card += "Kategori Barang : {{ $tanah->kategori->nama_kategori }}\r\n";
        card += "Kode Barang : {{ $tanah->kode_barang }}\r\n";
        card += "Nama Barang : {{ $tanah->nama_barang }}\r\n";
        card += "Nomor Register : {{ $tanah->no_register }}\r\n";
        card += "Harga Perolehan : {{ $tanah->cara_perolehan }}\r\n";
        card += "Tahun Perolehan : {{ $tanah->tahun_perolehan }}\r\n";
        card += "Harga : Rp. {{ $tanah->harga }}\r\n";
        card += "Luas : {{ $tanah->luas }}\r\n";
        card += "Keterangan : {{ $tanah->keterangan }}\r\n";
        card += "Penggunaan : {{ $tanah->penggunaan }}\r\n";
        card += "Nomor Sertifikat : {{ $tanah->no_sertifikat }}\r\n";
   
    new QRCode(document.getElementById("test"), card);
</script>