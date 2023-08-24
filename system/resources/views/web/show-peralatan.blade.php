<x-web>
    @include('menu.menu')

    <section class="page-banner bg_cover position-relative z-1"
        style="background-image: url({{ url('public') }}/kantor.jpg);">
        <div class="brand-card text-center">

            <h3>{{ $peralatan->opd->singkatan }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="cat-btn" style="font-size: 300%">Detail {{ $peralatan->nama_aset }}</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="active"><a href="{{ url("peralatan/$peralatan->id_opd") }}"> Data Aset peralatan dan
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
                                <img src="{{ url("public/$peralatan->foto") }}"
                                    style="object-fit: cover; position: static; width: 100%; height: 30%;">
                            </div>
                            <div class="post-content">
                                <div class="entry-content" style="text-align: center">
                                    <p class="cat-btn">{{ $peralatan->pegawai->nama }}</p>
                                    <h3 class="title">
                                        {{ $peralatan->nama_barang }}
                                    </h3>
                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i>{{ $peralatan->kategori->nama_kategori }}
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i>{{ $peralatan->kode_barang }}
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
                                                            <td> : {{ $peralatan->no_register }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Merk Barang</td>
                                                            <td> : {{ $peralatan->merk }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Tahun Perolehan</td>
                                                            <td> : {{ $peralatan->harga_perolehan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Keterangan</td>
                                                            <td> : {{ $peralatan->keterangan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Harga Perolehan</td>
                                                            <td> : {{ $peralatan->harga_perolehan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor SPPD</td>
                                                            <td> : {{ $peralatan->no_sppd }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor SPK</td>
                                                            <td> : {{ $peralatan->no_spk }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor Berita Acara</td>
                                                            <td> : {{ $peralatan->no_ba }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Tanggal Serah Terima</td>
                                                            <td> : {{ $peralatan->tanggal_serah_terima }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Ekstrakomtable</td>
                                                            <td> : {{ $peralatan->ekstrakomtable }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Ukuran</td>
                                                            <td> : {{ $peralatan->ukuran }} </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor Pabrik / Mesin / BPKB / Polisi / Rangka</td>
                                                            <td> : {{ $peralatan->no_pabrik }} / {{ $peralatan->no_mesin }} /
                                                                {{ $peralatan->no_bpkb }} / {{ $peralatan->no_polisi }} /
                                                                {{ $peralatan->no_rangka }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">keterangan 1</td>
                                                            <td> : {{ $peralatan->keterangan1 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Harga Perolehan 1</td>
                                                            <td> : {{ $peralatan->harga_perolehan1 }}</td>
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
        
        card = "Nama OPD: {{ $peralatan->opd->nama_opd }}\r\n";
        card += "Nama Penanggungjawab: {{ $peralatan->pegawai->nama }}\r\n";
        card += "Kategori Barang : {{ $peralatan->kategori->nama_kategori }}\r\n";
        card += "Kode Barang : {{ $peralatan->kode_barang }}\r\n";
        card += "Nama Barang : {{ $peralatan->nama_barang }}\r\n";
        card += "Nomor Register : {{ $peralatan->no_register }}\r\n";
        card += "Tahun Perolehan : {{ $peralatan->tahun_perolehan }}\r\n";
        card += "Harga Perolehan : {{ $peralatan->harga_perolehan }}\r\n";
        card += "Keterangan : {{ $peralatan->keterangan }}\r\n";
        card += "Alamat : {{ $peralatan->alamat }}\r\n";
        card += "Kecamatan : {{ $peralatan->kecamatan }}\r\n";
        card += "Kelurahan Desa : {{ $peralatan->kelurahan_desa }}\r\n";
        card += "Nomor SPPD : {{ $peralatan->no_sppd }}\r\n";
        card += "Nomor SPK : {{ $peralatan->no_spk }}\r\n";
        card += "Nomor Berita Acara : {{ $peralatan->no_ba }}\r\n";
        
        
        new QRCode(document.getElementById("test"), card);
    </script>