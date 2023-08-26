<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="btn-group float-right mb-10">
                                <a href="{{ url('opd/jembatan-export') }}" class="btn btn-success"> <span class="fa fa-file-export"></span> Export Excel</a>
                                <a href="{{ url('opd/master/jembatan-jalan/create') }}" class="btn btn-primary"> <span
                                        class="fa fa-plus"></span> Tambah Data</a>
                            </div>
                            <h3 class="card-title">Master Data Aset Jembatan dan Jalan</h3>
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
                                        <th>Tahun Perolehan</th>
                                        <th>Harga Perolehan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_jembatan as $jembatan)
                                    @if ( Auth::guard('opd')->user()->id == $jembatan->id_opd)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.info-button url="opd/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                                    <x-button.edit-button url="opd/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                                    <x-button.delete-button url="opd/master/jembatan-jalan"
                                                        id="{{ $jembatan->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $jembatan->kategori->nama_kategori }}</td>
                                            <td>{{ $jembatan->kode_aset }}</td>
                                            <td>{{ $jembatan->nama_aset }}</td>
                                            <td>{{ $jembatan->tahun_perolehan }}</td>
                                            <td>Rp .{{$jembatan->harga_perolehan }}</td>
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
