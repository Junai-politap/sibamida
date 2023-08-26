<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="btn-group float-right mb-10">
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                    <i class="fa fa-print"> CetakLaporan</i>
                                </button>
                                <a href="{{ url('opd/peralatan-export') }}" class="btn btn-success"> <span class="fa fa-file-export"></span> Export Excel</a>
                                <a href="{{ url('opd/master/peralatan-mesin/create') }}" class="btn btn-primary float-right mb-10"> <span
                                        class="fa fa-plus"></span> Tambah Data</a>
                            </div>
                            <h3 class="card-title">Master Data Aset Peralatan dan Mesin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Kategori</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Tahun Perolehan</th>
                                        <th>Harga Perolehan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_peralatan as $peralatan)
                                    @if ( Auth::guard('opd')->user()->id == $peralatan->id_opd)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.info-button url="opd/master/peralatan-mesin" id="{{ $peralatan->id }}" />
                                                    <x-button.edit-button url="opd/master/peralatan-mesin" id="{{ $peralatan->id }}" />
                                                    <x-button.delete-button url="opd/master/peralatan-mesin"
                                                        id="{{ $peralatan->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $peralatan->kategori->nama_kategori }}</td>
                                            <td>{{ $peralatan->kode_barang }}</td>
                                            <td>{{ $peralatan->nama_barang }}</td>
                                            <td>{{ $peralatan->tahun_perolehan }}</td>
                                            <td>Rp .{{ $peralatan->harga_perolehan }}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-opd>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('opd/peralatan-download-laporan') }}" method="get">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tahun_perolehan">Tahun</label>
                        <input type="year" class="form-control" id="tahun_perolehan" name="tahun_perolehan" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Download Laporan Excel</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
