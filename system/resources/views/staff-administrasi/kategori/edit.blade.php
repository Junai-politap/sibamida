<x-staff>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="staff-administrasi/kategori" />
                            <h3 class="text-center title">Tambahh Data Kategori</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('staff-administrasi/kategori', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputText">Nama Kategori</label>
                                    <input type="text" class="form-control" value="{{$kategori->nama_kategori}}"
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
</x-staff>