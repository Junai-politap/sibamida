<x-opd>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Info Assets</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ url("public/$aset->foto") }}" style="width:50%; height:auto"
                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                        </div>
                        <ul class="ml-0 mb-0 fa-ul text-muted">
                            <h3 class="small"> Nama Assets : {{ $aset->nama_aset }}</h3>
                            <h3 class="small"> Kode Assets : {{ $aset->kode_aset }}</h3>
                            <h3 class="small"> Kategori Assets : {{ $aset->kategori->nama_kategori }}</h3>
                            <h3 class="small"> Lokasi Assets : {{ $aset->ruangan->nama_ruangan }}</h3>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
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
                            <a href="{{url("opd/delete-riwayat/$riwayat->id")}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            <div class="card">
                              </td>
                                <div class="card-body">
                                    <strong>Tanggal Mulai</strong>
                                    <p class="text-muted">
                                        {{ $riwayat->created_at->format('d F Y') }}
                                    </p>
                                    <hr>
                                    <strong>Nama Penanggung Jawab</strong>
                                    <p class="text-muted">{{ $riwayat->pegawai->nama }}</p>
                                    <hr>
                                    <strong>Keterangan</strong>
                                    <p class="text-muted">
                                    <p>
                                        {{ $riwayat->keterangan }}
                                    </p>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
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
                        <form action="{{ url('opd/riwayat') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="text" value="{{ $aset->id }}" name="id_aset" hidden>
                                <input type="text" value="{{ $aset->id_ruangan }}" name="id_ruangan" hidden>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputText">Nama Pegawai</label>
                                        <select class="form-control" name="id_pegawai">
                                            <option value=""> Pilih Nama Pegawai</option>
                                            @foreach ($pegawai as $pegawai)
                                                <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputText">Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="tanggal_mulai">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputText">Keterangan</label>

                                <textarea class="form-control" id="" cols="30" rows="10" name="keterangan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
</x-opd>
