<x-admin>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <a href="{{ url('admin/master/peralatan-mesin/create') }}"
                                class="btn btn-primary float-right mb-10"> <span class="fa fa-plus"></span> Tambah
                                Data</a>
                            <button class="btn btn-primary float-right" style="margin-right: 1%" data-toggle="modal" data-target="#modal-lg">
                                <span class="fa fa-plus"></span> Tambah Kondisi
                            </button>

                            <h3 class="card-title">Data Seluruh Aset Peralatan dan Mesin</h3>
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
                                        <th>Nama Ruangan</th>
                                        <th>Kondisi Barang</th>
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
                                                    <x-button.info-button url="admin/master/peralatan-mesin"
                                                        id="{{ $peralatan->id }}" />
                                                    <x-button.edit-button url="admin/master/peralatan-mesin"
                                                        id="{{ $peralatan->id }}" />
                                                    <x-button.delete-button url="admin/master/peralatan-mesin"
                                                        id="{{ $peralatan->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $peralatan->kategori->nama_kategori }}</td>
                                            <td>{{ $peralatan->kode_barang }}</td>
                                            <td>{{ $peralatan->nama_barang }}</td>
                                            <td>
                                                @isset($peralatan->ruangan->nama_ruangan )
                                                {{ $peralatan->ruangan->nama_ruangan }}
                                                @else
                                                <strong>TIDAK ADA RUANGAN</strong>
                                                @endisset    
                                            </td>
                                            <td>
                                                @isset($peralatan->kondisi->nama_kondisi )
                                                {{ $peralatan->kondisi->nama_kondisi }}
                                                @else
                                                <strong>TIDAK ADA KONDISI</strong>
                                                @endisset    
                                            </td>
                                            <td>{{ $peralatan->tahun_perolehan }}</td>
                                            <td>Rp .{{ $peralatan->harga_perolehan }}
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
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Kondisi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/kondisi') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama OPD</label>
                                <div class="col-sm-9">
                                    <select name="id_opd" class="form-control" required>
                                        <option value=""> Pilih Organisasi Perangkat Daerah</option>
                                        @foreach ($list_opd as $opd)
                                            <option value="{{ $opd->id }}">{{ $opd->nama_opd }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Kondisi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Kondisi"
                                        name="nama_kondisi">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-admin>