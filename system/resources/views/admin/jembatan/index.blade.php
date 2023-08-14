<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/master/jembatan-jalan/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Master Data Aset</strong>
                        </h4>

                    </div>
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
                               
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                                <x-button.edit-button url="admin/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                                <x-button.delete-button url="admin/master/jembatan-jalan"
                                                    id="{{ $jembatan->id }}" />
                                            </div>
                                        </td>
                                        <td>{{ $jembatan->kategori->nama_kategori }}</td>
                                        <td>{{ $jembatan->kode_aset }}</td>
                                        <td>{{ $jembatan->nama_aset }}</td>
                                        <td>{{ $jembatan->tahun_perolehan }}</td>
                                        <td>Rp .{{$jembatan->harga_perolehan }}</td>
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
