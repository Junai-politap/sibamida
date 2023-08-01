<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/master/tanah/create') }}" class="btn btn-primary float-right mb-10"> <span
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
                                @foreach ($list_tanah as $tanah)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/master/tanah" id="{{ $tanah->id }}" />
                                                <x-button.edit-button url="admin/master/tanah" id="{{ $tanah->id }}" />
                                                <x-button.delete-button url="admin/master/tanah" id="{{ $tanah->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            {{ $tanah->kode_barang }}

                                        </td>
                                        <td class="">{{ $tanah->nama_barang }}</td>
                                        <td class="">{{ $tanah->pegawai->nama }}</td>
                                        <td>
                                            {{ $tanah->opd->nama_opd }}
                                            
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
