<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="font-family: bold">Tambah Data Super Admin</h3>
                    </div>
                    <form action="{{ url('admin/admin') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label> Nama</label>
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Nama User">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username"
                                    placeholder="Username">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Password">
                            </div>

                           

                            <div class="form-group">
                                <label>Poto</label>
                                <input type="file" class="form-control" name="poto" accept=".png, .jpg, .jpeg">
                            </div>

                            <div class="footer mt-5">
                                
                                <button class="btn btn-primary float-right">Simpan</button>
                              </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin>
