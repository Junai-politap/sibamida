<x-admin>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('admin/master/peralatan-mesin/create') }}" class="btn btn-primary float-right mb-10"> <span
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
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Tahun Perolehan</th>
                                        <th>Harga Perolehan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_peralatan as $peralatan)
                                   
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.info-button url="admin/master/peralatan-mesin" id="{{ $peralatan->id }}" />
                                                    <x-button.edit-button url="admin/master/peralatan-mesin" id="{{ $peralatan->id }}" />
                                                    <x-button.delete-button url="admin/master/peralatan-mesin"
                                                        id="{{ $peralatan->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $peralatan->kategori->nama_kategori }}</td>
                                            <td>{{ $peralatan->kode_barang }}</td>
                                            <td>{{ $peralatan->nama_barang }}</td>
                                            <td>{{ $peralatan->tahun_perolehan }}</td>
                                            <td>Rp .{{ $peralatan->harga_perolehan }}</td>
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
</x-admin>
