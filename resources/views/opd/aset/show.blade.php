<x-opd>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="font-family: bold">Info Assets</h3>
        </div>
        <div class="card-body">
            <x-button.back-button url="opd/aset" />
            <div class="row">
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="lead"><b>{{ $aset->nama_aset }}</b></h2>
                            <ul class="ml-0 mb-0 fa-ul text-muted">
                                <li class="small"> Kode Assets : {{ $aset->kode_aset }}</li>
                                <li class="small"> Kategori : {{ $aset->kategori->nama_kategori }}</li>
                                <li class="small"> Letak Ruangan : {{ $aset->ruangan->nama_ruangan }}</li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="{{ url("public/$aset->foto") }}" style="width:50%; height:auto"
                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-opd>
