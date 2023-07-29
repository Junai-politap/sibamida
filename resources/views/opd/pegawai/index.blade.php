<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('opd/pegawai/create') }}" class="btn btn-primary float-right mb-10"> <span
                                    class="fa fa-plus"></span> Tambah Data</a>
                            <h3 class="card-title">Data Seluruh Pegawai</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>NIP / NIK</th>
                                        <th>Nama Pegawai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pegawai as $pegawai)
                                    @if ( Auth::guard('opd')->user()->id == $pegawai->id_opd)
                                    
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.info-button url="opd/pegawai" id="{{ $pegawai->id }}" />
                                                    <x-button.edit-button url="opd/pegawai" id="{{ $pegawai->id }}" />
                                                    <x-button.delete-button url="opd/pegawai"
                                                        id="{{ $pegawai->id }}" />
                                                </div>
                                            </td>
                                            <td>
                                                NIP : {{ $pegawai->nip }}
                                                <br>
                                                NIK : {{ $pegawai->nik }}
                                            </td>
                                            <td>{{ $pegawai->nama }}</td>

                                        </tr>
                                            
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-opd>
