<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="admin/opd" />
                        <h3 class="card-title" style="font-family: bold">
                            <h2 class="text-center">Edit Data OPD</h2></h3>
                    </div>
                    <form action="{{ url('admin/opd', $opd->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label> Nama OPD</label>
                                <input type="text" class="form-control" name="nama_opd" value="{{ $opd->nama_opd }}">
                            </div>  

                            <div class="form-group">
                                <label> Singkatan OPD</label>
                                <input type="text" class="form-control" name="singkatan" value="{{ $opd->singkatan }}">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="{{ $opd->username }}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $opd->alamat }}">
                            </div>

                            <div class="form-group">
                                <label>Nomor Telp</label>
                                <input type="text" class="form-control" name="no_telp" value="{{ $opd->no_telp }}">
                            </div>

                            <div class="form-group">
                                <label>Logo OPD</label>
                                <div class="row">
                                    <div class="col-md-6">

                                        <img src="{{ url("public/$opd->logo") }}" style="width:50%; ">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="logo" accept=".png, .jpg, .jpeg" value="{{ $opd->logo }}">

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
