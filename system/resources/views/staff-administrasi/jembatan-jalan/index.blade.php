<x-staff>
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
                                <a href="{{ url('staff-administrasi/jembatan-export') }}" class="btn btn-success"> <span class="fa fa-file-export"></span> Export Excel</a>
                            <a href="{{ url('staff-administrasi/master/jembatan-jalan/create') }}" class="btn btn-primary float-right mb-10"> <span
                                    class="fa fa-plus"></span> Tambah Data</a></div>
                            <h3 class="card-title">Data Aset Jembatan dan Jalan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Kategori</th>
                                        <th>Kode Assets</th>
                                        <th>Nama Assets</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_jembatan as $jembatan)
                                    @if ( Auth::guard('staff')->user()->id_opd == $jembatan->id_opd)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.info-button url="staff-administrasi/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                                    <x-button.edit-button url="staff-administrasi/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                                    <x-button.delete-button url="staff-administrasi/master/jembatan-jalan"
                                                        id="{{ $jembatan->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $jembatan->kategori->nama_kategori }}</td>
                                            <td>{{ $jembatan->kode_aset }}</td>
                                            <td>{{ $jembatan->nama_aset }}</td>
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
            <form action="{{ url('staff-administrasi/jembatan-download-laporan') }}" method="get">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tahun_mulai">Tahun Mulai</label>
                        <input type="year" class="form-control" id="tahun_mulai" name="tahun_mulai" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_selesai">Tahun Selesai</label>
                        <input type="year" class="form-control" id="tahun_selesai" name="tahun_selesai" required>
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
