<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('opd/aset/create') }}" class="btn btn-primary float-right mb-10"> <span
                                    class="fa fa-plus"></span> Tambah Data</a>
                            <h3 class="card-title">Data Seluruh Assets</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Kategori</th>
                                        <th>Ruangan</th>
                                        <th>Kode Assets</th>
                                        <th>Nama Assets</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_aset as $aset)
                                    @if ( Auth::guard('opd')->user()->id == $aset->id_opd)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.info-button url="opd/aset" id="{{ $aset->id }}" />
                                                    <x-button.edit-button url="opd/aset" id="{{ $aset->id }}" />
                                                    <x-button.delete-button url="opd/aset"
                                                        id="{{ $aset->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $aset->kategori->nama_kategori }}</td>
                                            <td>{{ $aset->ruangan->nama_ruangan }}</td>
                                            <td>{{ $aset->kode_aset }}</td>
                                            <td>{{ $aset->nama_aset }}</td>
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
