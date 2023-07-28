<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('opd/pegawai/create') }}" class="btn btn-primary float-right mb-10"> <span
                                    class="fa fa-plus"></span> Tambah Data</a>
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama Pegawai</th>
                                        <th>Username</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pegawai as $pegawai)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.info-button url="opd/pegawai" id="{{ $pegawai->id }}" />
                                                    <x-button.edit-button url="opd/pegawai" id="{{ $pegawai->id }}" />
                                                    <x-button.delete-button url="opd/pegawai"
                                                        id="{{ $pegawai->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $pegawai->nama }}</td>
                                            <td>{{ $pegawai->username }}</td>
                                            <td>
                                                <img src="{{ url("public/$pegawai->pegawai") }}"
                                                    style="width:40%; height:40%;"
                                                    onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                            </td>
                                        </tr>
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
