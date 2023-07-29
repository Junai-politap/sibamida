<x-admin>
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-md-12 col-sm-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            <x-button.back-button url="{{ url('admin/pegawai') }}" />

                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class=""><b>{{ $pegawai->nama }} </b>
                                        
                                    </h2>
                                     {{ $pegawai->opd->nama_opd }}
                                    <p class="text-muted text-sm mt-2"><b>NIP/NIK: </b> {{ $pegawai->nip }} / {{ $pegawai->nik }} 
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        
                                        <li class="">
                                            <span class="fa-li">
                                                <i class="fas fa-check"></i>
                                            </span> 
                                            Jabatan:
                                            {{ $pegawai->jabatan }}
                                        </li>

                                        <li class="">
                                            <span class="fa-li">
                                                <i class="fas fa-check"></i>
                                            </span> 
                                            Alamat : 
                                            {{ $pegawai->alamat }}
                                        </li>

                                        <li class="">
                                            <span class="fa-li">
                                                <i class="fas fa-check"></i>
                                            </span> 
                                            Nomor Hp : 
                                            {{ $pegawai->nomor_hp }}
                                        </li>


                                       
                                    </ul>
                                </div>
                                <div class="col-md-6 text-left">
                                    <img style="width: 30%" src="{{ url("public/$pegawai->foto") }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                               
                                <a href="{{ url("admin/pegawai/$pegawai->id") }}/edit" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
