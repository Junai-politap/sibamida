<x-opd>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <div class="btn-group float-right mb-10">
                            <a href="{{ url('opd/bangunan-export') }}" class="btn btn-success"> <span
                                    class="fa fa-file-export"></span> Export Excel</a>
                            <a href="{{ url('opd/master/bangunan/create') }}" class="btn btn-primary"> <span
                                    class="fa fa-plus"></span> Tambah Data</a>
                        </div>
                        <h4 class="card-title">
                            <strong>Master Data Aset Bangunan</strong>
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
                                    <th class="text-center">Tahun Perolehan</th>
                                    <th class="text-center">Harga Perolehan</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_bangunan as $bangunan)
                                @if ( Auth::guard('opd')->user()->id == $bangunan->id_opd)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="opd/master/bangunan" id="{{ $bangunan->id }}" />
                                                <x-button.edit-button url="opd/master/bangunan" id="{{ $bangunan->id }}" />
                                                <x-button.delete-button url="opd/master/bangunan" id="{{ $bangunan->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            {{ $bangunan->kode_barang }}

                                        </td>
                                        <td class="">{{ $bangunan->nama_barang }}</td>
                                        <td class="">{{ $bangunan->pegawai->nama }}</td>
                                        <td>{{ $bangunan->tahun_perolehan }}</td>
                                        <td>Rp .{{ $bangunan->harga_perolehan }}</td>
                                    </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-opd>
