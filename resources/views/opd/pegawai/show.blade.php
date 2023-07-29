<x-opd>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="font-family: bold">Info Pegawai</h3>
        </div>
        <div class="card-body">
            <x-button.back-button url="opd/pegawai" />
            <div class="row">
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="lead"><b>{{ $pegawai->nama }}</b></h2>
                            <p class="text-muted text-sm"><b>Jabatan: </b> {{ $pegawai->jabatan }} </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted">
                                <li class="small"> Username : {{ $pegawai->username }}</li>
                                <li class="small"> NIK : {{ $pegawai->nik }}</li>
                                <li class="small"> NIP : {{ $pegawai->nip }}</li>
                                <li class="small"> Adress : {{ $pegawai->alamat }}</li>
                                <li class="small"> Phone : {{ $pegawai->nomor_hp }}</li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="{{ url("public/$pegawai->foto") }}" style="width:50%; height:auto"
                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-opd>
