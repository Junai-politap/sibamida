<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                                
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/pegawai') }}" />
                        <a href="{{ url("admin/pegawai/$pegawai->id") }}/edit" class="btn btn-primary btn-sm float-right"><span class="fa fa-edit"></span> Edit OPD</a>
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ url("public/$pegawai->foto") }}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">
                            {{ $pegawai->nama }}
                        </h3>

                        <p class="text-muted text-center">
                            {{ $pegawai->nip }} <br>
                            {{ $pegawai->nik }}
                        </p>

                        
                    </div>
                    
                </div>
                

                
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    
                    <div class="card-body">
                        

                        <strong>Jabatan</strong>
                        <p class="text-muted">{{ $pegawai->jabatan }}</p>
                        <hr>

                        <strong> Alamat</strong>
                        <p class="text-muted">{{ $pegawai->jabatan }}</p>
                        <hr>

                        <strong>No Hp</strong>
                        <p class="text-muted">{{ $pegawai->nomor_hp }}</p>
                        <hr>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>
</x-admin>
