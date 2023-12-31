<x-staff>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <div class="btn-group float-right mb-10">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                <i class="fa fa-print"> CetakLaporan</i>
                            </button>
                            <a href="{{ url('staff-administrasi/tanah-export') }}" class="btn btn-success"> <span
                                    class="fa fa-file-export"></span> Export Excel</a>
                        <a href="{{ url('staff-administrasi/master/tanah/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a></div>
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
                                    <th class="text-center">Tahun Perolehan</th>
                                    <th class="text-center"> Harga</th>
                                    <th class="text-center">Keterangan</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_tanah as $tanah)
                                @if ( Auth::guard('staff')->user()->id_opd == $tanah->id_opd)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="staff-administrasi/master/tanah" id="{{ $tanah->id }}" />
                                                <x-button.edit-button url="staff-administrasi/master/tanah" id="{{ $tanah->id }}" />
                                                <x-button.delete-button url="staff-administrasi/master/tanah" id="{{ $tanah->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            {{ $tanah->kode_barang }}

                                        </td>
                                        <td class="">{{ $tanah->nama_barang }}</td>
                                        <td class="">{{ $tanah->pegawai->jabatan }}</td>
                                        <td class="">{{ $tanah->tahun_perolehan }}</td>
                                        <td class="">Rp .{{ $tanah->harga }}</td>
                                        <td>
                                            {{ $tanah->keterangan }}

                                        </td>
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
</x-staff>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('staff-administrasi/tanah-download-laporan') }}" method="get">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tahun_mulai">Tahun Mulai</label>
                        <input type="year" class="form-control" id="tahun_mulai" name="tahun_mulai" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_selesai">Tahun Selesai</label>
                        <input type="year" class="form-control" id="tahun_selesai" name="tahun_selesai" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Download Laporan Excel</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
