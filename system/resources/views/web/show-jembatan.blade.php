<x-web>
    @include('menu.menu')

    <section class="page-banner bg_cover position-relative z-1"
        style="background-image: url({{ url('public') }}/kantor.jpg);">
        <div class="brand-card text-center">

            <h3>{{ $jembatan->opd->singkatan }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="cat-btn" style="font-size: 300%">Detail {{ $jembatan->nama_aset }}</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="active"><a href="{{ url("jembatan/$jembatan->id_opd") }}"> Data Aset Jembatan dan
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
                                <img src="{{ url("public/$jembatan->foto") }}"
                                    style="object-fit: cover; position: static; width: 100%; height: 30%;">
                            </div>
                            <div class="post-content">
                                <div class="entry-content" style="text-align: center">
                                    <p class="cat-btn">{{ $jembatan->pegawai->nama }}</p>
                                    <h3 class="title">
                                        {{ $jembatan->nama_aset }}
                                    </h3>
                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i>{{ $jembatan->kategori->nama_kategori }}
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i>{{ $jembatan->kode_aset }}
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
                                                            <td> : {{ $jembatan->no_register }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Tahun Perolehan</td>
                                                            <td> : {{ $jembatan->tahun_perolehan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Harga Perolehan</td>
                                                            <td> : {{ $jembatan->harga_perolehan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Keterangan</td>
                                                            <td> : {{ $jembatan->keterangan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Alamat</td>
                                                            <td> : {{ $jembatan->alamat }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nama Kondisi</td>
                                                            <td> : {{ $jembatan->nama_kondisi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nama Sumber Dana</td>
                                                            <td> : {{ $jembatan->nama_sumber_dana }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor SPPD</td>
                                                            <td> : {{ $jembatan->no_sppd }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor SPK</td>
                                                            <td> : {{ $jembatan->no_spk }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor Berita Acara</td>
                                                            <td> : {{ $jembatan->no_ba }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Tanggal Serah Terima</td>
                                                            <td> : {{ $jembatan->tanggal_serah_terima }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Kontruksi</td>
                                                            <td> : {{ $jembatan->kontruksi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Panjang / Lebar / Luas</td>
                                                            <td> : {{ $jembatan->panjang }} /
                                                                {{ $jembatan->lebar }} /
                                                                {{ $jembatan->luas }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor Dokumen</td>
                                                            <td> : {{ $jembatan->nomor_dokumen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Tanggal Dokumen</td>
                                                            <td> : {{ $jembatan->tanggal_dokumen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Status Tanah</td>
                                                            <td> : {{ $jembatan->status_tanah }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor Tanah</td>
                                                            <td> : {{ $jembatan->nomor_tanah }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Lokasi</td>
                                                            <td> : {{ $jembatan->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Header</td>
                                                            <td> : {{ $jembatan->header }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Urut Kelompok</td>
                                                            <td> : {{ $jembatan->urut_kelompok }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Kelompok</td>
                                                            <td> : {{ $jembatan->kelompok }}</td>
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
    
    card = "Nama OPD: {{ $jembatan->opd->nama_opd }}\r\n";
    card += "Nama Penanggungjawab: {{ $jembatan->pegawai->nama }}\r\n";
    card += "Kategori Aset : {{ $jembatan->kategori->nama_kategori }}\r\n";
    card += "Kode Aset : {{ $jembatan->kode_aset }}\r\n";
    card += "Nama Aset : {{ $jembatan->nama_aset }}\r\n";
    card += "Nomor Register : {{ $jembatan->no_register }}\r\n";
    card += "Tahun Perolehan : {{ $jembatan->tahun_perolehan }}\r\n";
    card += "Harga Perolehan : Rp.{{ $jembatan->harga_perolehan }}\r\n";
    card += "Keterangan : {{ $jembatan->keterangan }}\r\n";
    card += "Alamat : {{ $jembatan->alamat }}\r\n";
    card += "Nama Kondisi : {{ $jembatan->nama_kondisi }}\r\n";
    card += "Sumber Dana : {{ $jembatan->nama_sumber_dana }}\r\n";
    card += "Nomor SPPD : {{ $jembatan->no_sppd }}\r\n";
    card += "Nomor SPK : {{ $jembatan->no_spk }}\r\n";
    card += "Nomor Berita Acara : {{ $jembatan->no_ba }}\r\n";
    card += "Tanggal Serah Terima : {{ $jembatan->tanggal_serah_terima }}\r\n";
    card += "Kontruksi : {{ $jembatan->kontruksi }}\r\n";
    card += "Panjang/Lebar/Luas : {{ $jembatan->panjang }}/{{ $jembatan->lebar }}/{{ $jembatan->luas }}\r\n";
    
    new QRCode(document.getElementById("test"), card);
</script>