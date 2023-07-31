<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/master/jembatan-jalan/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Master Data Aset</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Kode Aset</th>
                                    <th class="text-center">Nama Aset</th>
                                    <th class="text-center">Nama Penanggungjawab</th>
                                    <th class="text-center">Nama OPD</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_jembatan as $jembatan)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                                <x-button.edit-button url="admin/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                                <x-button.delete-button url="admin/master/jembatan-jalan" id="{{ $jembatan->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            {{ $jembatan->kode_aset }}

                                        </td>
                                        <td class="">{{ $jembatan->nama_aset }}</td>
                                        <td class="">{{ $jembatan->pegawai->nama }}</td>
                                        <td>
                                            {{ $jembatan->opd->nama_opd }}
                                            
                                        </td>
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
