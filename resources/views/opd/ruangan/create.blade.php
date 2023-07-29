<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="opd/ruangan" />
                            <h3 class="title text-center">Tambah Data Ruangan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('opd/ruangan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="text" name="id_opd" value="{{ Auth::guard('opd')->user()->id }}" hidden>
                                <div class="form-group">
                                    <label for="exampleInputText">Kode Ruangan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Kode Ruangan"
                                        name="kode_ruangan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText">Nama Ruangan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Ruangan"
                                        name="nama_ruangan">
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
