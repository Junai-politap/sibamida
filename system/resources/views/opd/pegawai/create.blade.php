<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Pegawai</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('opd/pegawai') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="text" name="id_opd" value="{{ Auth::guard('opd')->user()->id }}" hidden>
                                <div class="form-group">
                                    <label for="exampleInputText">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Pegawai"
                                        name="nama">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">NIK</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan NIK Pegawai" name="nik">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">NIP</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan NIP Pegawai" name="nip">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Username</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Username Pegawai" name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword">Password</label>
                                            <input type="password" class="form-control"
                                                placeholder="Masukkan Password Pegawai" name="password">
                                        </div>
                                    </div>
                                    
                                </div>

                               

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Alamat</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Alamat Pegawai" name="alamat">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Handphone</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Handphone Pegawai" name="nomor_hp">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Jabatan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Jabatan Pegawai" name="jabatan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <input type="file" class="form-control"
                                                placeholder="Masukkan Foto Pegawai" name="foto">
                                        </div>
                                    </div>
                                   
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
