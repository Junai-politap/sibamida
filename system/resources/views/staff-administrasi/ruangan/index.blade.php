<x-staff>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('staff-administrasi/ruangan/create') }}" class="btn btn-primary float-right mb-10"> <span
                                    class="fa fa-plus"></span> Tambah Data</a>
                            <h3 class="card-title">Data Ruangan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Kode Ruangan</th>
                                        <th>Nama Ruangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_ruangan as $ruangan)
                                    @if ( Auth::guard('staff')->user()->id_opd == $ruangan->id_opd)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    
                                                    <x-button.edit-button url="staff-administrasi/ruangan" id="{{ $ruangan->id }}" />
                                                    <x-button.delete-button url="staff-administrasi/ruangan"
                                                        id="{{ $ruangan->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $ruangan->kode_ruangan }}</td>
                                            <td>{{ $ruangan->nama_ruangan }}</td>
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
</x-staff>
