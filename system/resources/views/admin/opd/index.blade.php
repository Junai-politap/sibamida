<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/opd/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data Organisasi Perangkat Daerah</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama OPD</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Jumlah Pegawai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_opd as $opd)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/opd" id="{{ $opd->id }}" />
                                                <x-button.edit-button url="admin/opd" id="{{ $opd->id }}" />
                                                <x-button.delete-button url="admin/opd" id="{{ $opd->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $opd->nama_opd }}</td>
                                        <td class="text-center">{{ $opd->alamat }}</td>
                                        <td class="text-center" style="width: 20%">
                                            @foreach ($list_pegawai as $pegawai)
                                                {{ $data_pegawai->filter(function ($q) use ($opd) {
                                                        return $opd->id == $q->id_opd;
                                                    })->count('id_opd') }}
                                            @endforeach
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
