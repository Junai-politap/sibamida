<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/pegawai/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data Pegawai Daerah</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">NIP/NIK Pegawai</th>
                                    <th class="text-center">Nama Pegawai</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_pegawai as $pegawai)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/pegawai" id="{{ $pegawai->id }}" />
                                                <x-button.edit-button url="admin/pegawai" id="{{ $pegawai->id }}" />
                                                <x-button.delete-button url="admin/pegawai" id="{{ $pegawai->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            NIP : {{ $pegawai->nip }}
                                            <br>
                                           NIK : {{ $pegawai->nik }}

                                        </td>
                                        <td class="">{{ $pegawai->nama }}</td>
                                        
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
