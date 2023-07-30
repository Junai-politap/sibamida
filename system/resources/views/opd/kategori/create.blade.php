<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="opd/kategori" />
                            <h3 class="text-center title">Tambahh Data Kategori</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('opd/kategori') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="text" name="id_opd" value="{{ Auth::guard('opd')->user()->id }}" hidden>
                                <div class="form-group">
                                    <label for="exampleInputText">Nama Kategori</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Kode kategori"
                                        name="nama_kategori">
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
