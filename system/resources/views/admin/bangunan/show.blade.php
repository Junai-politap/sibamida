<x-admin>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="admin/master/bangunan" />
                        <h3 class="text-center title">Info Assets</h3>


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6  text-center">
                                <img src="{{ url("public/$bangunan->foto") }}" style="width:80%; height:auto"
                                    onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                            </div>

                            <div class="col-md-3 text-center">
                                <div id="test" style="width: 10%"></div>

                            </div>
                        </div>

                        <div class="row invoice-info mt-5">
                            <div class="col-sm-12 invoice-col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Nama OPD</td>
                                            <td> : {{ $bangunan->opd->nama_opd }}</td>
                                        </tr>

                                        <tr>
                                            <td>Kategori</td>
                                            <td> : {{ $bangunan->kategori->nama_kategori }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Penanggung Jawab</td>
                                            <td> : {{ $bangunan->pegawai->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Barang</td>
                                            <td> : {{ $bangunan->kode_barang }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Barang</td>
                                            <td> : {{ $bangunan->nama_barang }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Register</td>
                                            <td> : {{ $bangunan->no_register }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Perolehan</td>
                                            <td> : {{ $bangunan->tahun_perolehan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Harga Perolehan</td>
                                            <td> : {{ $bangunan->harga_perolehan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td> : {{ $bangunan->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td> : {{ $bangunan->keterangan }}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Nama Sumber Dana</td>
                                            <td> : {{ $bangunan->nama_sumber_dana }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor SPPD</td>
                                            <td> : {{ $bangunan->no_sppd }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor SPK</td>
                                            <td> : {{ $bangunan->no_spk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Berita Acara</td>
                                            <td> : {{ $bangunan->no_ba }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bertingkat</td>
                                            <td> : {{ $bangunan->bertingkat }}</td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Beton</td>
                                            <td> : {{ $bangunan->beton }}</td>
                                        </tr>
                                        <tr>
                                            <td>Urut Kelompok</td>
                                            <td> : {{ $bangunan->urut_kelompok }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kelompok</td>
                                            <td> : {{ $bangunan->kelompok }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>

                    </div> 

                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Assets</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    @foreach ($riwayat as $riwayat)
                        <div class="card-body p-0">
                            <div class="card">
                                <div class="card-header">
                                    <div class="btn-group float-right">
                                        <button class="btn btn-warning" data-toggle="modal"
                                            data-target="#modal-edit{{ $riwayat->id }}">
                                            <span class="fa fa-edit"></span>
                                        </button>

                                        <a onclick="return confirm('Yakin ingin menghapus data ini?')"
                                            href="{{ url("admin/bangunan/delete-riwayat/$riwayat->id") }}"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>


                                    </div>
                                </div>


                                <div class="card-body">
                                    <strong>Tanggal Mulai</strong>
                                    <p class="text-muted">
                                        {{date("Y-m-d", strtotime($riwayat->tanggal_mulai)) }}
                                    </p>
                                    <hr>
                                    <strong>Nama Penanggung Jawab</strong>
                                    <p class="text-muted">{{ $riwayat->pegawai->nama }}</p>
                                    <hr>
                                    <strong>Keterangan</strong>
                                    <p class="text-muted">
                                    <p>
                                        {!! nl2br($riwayat->keterangan )!!}
                                    </p>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal-edit{{ $riwayat->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Data Kategori</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('admin/bangunan/update-riwayat', $riwayat->id) }}" method="POST">
                                        <div class="modal-body">

                                            @csrf
                                            @method('PUT')
                                            <div class="card-body">

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Nama OPD</label>
                                                    <div class="col-sm-9">
                                                        <select name="id_pegawai" class="form-control">
                                                            @foreach ($list_pegawai as $pegawai)
                                                                @if ($pegawai->id_opd == $bangunan->opd->id)
                                                                    <option
                                                                        @if ($pegawai->id == $riwayat->id_pegawai) selected @endif
                                                                        value="{{ $pegawai->id }}">
                                                                        {{ $pegawai->nama }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">
                                                        Tanggal Mulai
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" name="tanggal_mulai"
                                                            value="{{date("Y-m-d", strtotime($riwayat->tanggal_mulai)) }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">
                                                        Keterangan
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <textarea class="summernote" name="keterangan">{{ $riwayat->keterangan }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <button class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>

                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Riwayat </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/bangunan/riwayat') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="text" value="{{ $bangunan->id }}" name="id_aset" hidden>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputText">Nama Pegawai</label>
                                        <select class="form-control" name="id_pegawai" required>
                                            <option value=""> Pilih Nama Pegawai</option>
                                            @foreach ($list_pegawai as $pegawai)
                                                @if ($pegawai->id_opd == $bangunan->opd->id)
                                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputText">Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="tanggal_mulai" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputText">Keterangan</label>

                                <textarea class="summernote" name="keterangan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        let 
        
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
        
        new QRCode(document.getElementById("test"), card);
      
    </script>
</x-admin>
