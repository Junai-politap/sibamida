<x-staff>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('staff-administrasi/master/jembatan-jalan/create') }}" class="btn btn-primary float-right mb-10"> <span
                                    class="fa fa-plus"></span> Tambah Data</a>
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
