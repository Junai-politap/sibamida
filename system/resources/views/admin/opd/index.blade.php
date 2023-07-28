<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/opd/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data Organisasi Perangkat Daerah</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama OPD</th>
                                    <th>Alamat</th>
                                    <th>Logo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_opd as $opd)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/opd" id="{{ $opd->id }}" />
                                                <x-button.edit-button url="admin/opd" id="{{ $opd->id }}" />
                                                <x-button.delete-button url="admin/opd" id="{{ $opd->id }}" />
                                            </div>
                                        </td>
                                        <td>{{ $opd->nama_opd }}</td>
                                        <td>{{ $opd->alamat }}</td>
                                        <td>
                                            <img src="{{ url("public/$opd->logo") }}" style="width:40%; height:40%;" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
