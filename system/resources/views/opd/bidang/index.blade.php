<x-opd>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Bidang
                        </button>
                        <h4 class="title">
                            <strong>Data Bidang</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama Bidang</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_bidang as $bidang)
                                @if ( Auth::guard('opd')->user()->id == $bidang->id_opd)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-edit{{ $bidang->id }}">
                                                    <span class="fa fa-edit"></span>
                                                </button>

                                                <a href="{{ url("opd/bidang/delete/$bidang->id") }}"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Yakin Akan Menghapus Data Ini')"><span
                                                        class="fa fa-trash"></span></a>
                                            </div>
                                        </td>

                                        <td class="">{{ $bidang->nama_bidang }}</td>

                                    </tr>

                                    <div class="modal fade" id="modal-edit{{ $bidang->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data bidang</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('opd/bidang', $bidang->id) }}" method="POST">
                                                    <div class="modal-body">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card-body">
                                                            <input type="text" name="id_opd" value="{{ Auth::guard('opd')->user()->id }}" hidden>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama
                                                                    bidang</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        name="nama_bidang"
                                                                        value="{{ $bidang->nama_bidang }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-info"
                                                            data-dismiss="modal"><span class="fa fa-times"></span> Batal</button>
                                                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data bidang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('opd/bidang') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <input type="text" name="id_opd" value="{{ Auth::guard('opd')->user()->id }}" hidden>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama bidang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama bidang"
                                        name="nama_bidang">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-info" data-dismiss="modal"><span class="fa fa-times"></span> Batal</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-opd>
