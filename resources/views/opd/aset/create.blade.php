<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Assets</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('opd/aset') }}" method="POST" enctype="multipart/form-data">
                            <x-button.back-button url="opd/aset" />
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Assets</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nama Assets" name="nama_aset">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Assets</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Kode Assets" name="kode_aset">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Assets</label>
                                            <select class="form-control" name="id_kategori">
                                                <option value=""> Pilih Kategori Assets</option>
                                                @foreach ($kategori as $kategori)
                                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Ruangan</label>
                                            <select class="form-control" name="id_ruangan">
                                                <option value=""> Pilih Ruangan Assets</option>
                                                @foreach ($ruangan as $ruangan)
                                                    <option value="{{ $ruangan->id }}">{{ $ruangan->nama_ruangan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputText">Foto</label>
                                    <input type="file" class="form-control" placeholder="Masukkan Foto Assets"
                                        name="foto">
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->

                <!-- /.card -->

            </div>
        </div>
        </div>
    </section>
</x-opd>
