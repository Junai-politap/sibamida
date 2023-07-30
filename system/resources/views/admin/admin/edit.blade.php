<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="admin/admin" />
                        <h3 class="card-title" style="font-family: bold">
                            <h2 class="text-center">Edit Data Suoer Admin</h2></h3>
                    </div>
                    <form action="{{ url('admin/admin', $admin->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label> Nama </label>
                                <input type="text" class="form-control" name="nama" value="{{ $admin->nama }}">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="{{ $admin->username }}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                           
                            <div class="form-group">
                                <label>Poto</label>
                                <div class="row">
                                    <div class="col-md-6">

                                        <img src="{{ url("public/$admin->poto") }}" style="width:50%; ">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="poto" accept=".png, .jpg, .jpeg" value="{{ $admin->poto }}">

                                    </div>
                                </div>
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
