<x-staff>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Kondisi
                        </button>
                        <h4 class="title">
                            <strong>Data Kondisi</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama Kondisi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_kondisi as $kondisi)
                                @if ( Auth::guard('staff')->user()->id_opd == $kondisi->id_opd)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-edit{{ $kondisi->id }}">
                                                    <span class="fa fa-edit"></span>
                                                </button>

                                                <a href="{{ url("opd/kondisi/delete/$kondisi->id") }}"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Yakin Akan Menghapus Data Ini')"><span
                                                        class="fa fa-trash"></span></a>
                                            </div>
                                        </td>

                                        <td class="">{{ $kondisi->nama_kondisi }}</td>

                                    </tr>

                                    <div class="modal fade" id="modal-edit{{ $kondisi->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Kondisi</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('staff-administrasi/kondisi', $kondisi->id) }}" method="POST">
                                                    <div class="modal-body">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card-body">
                                                            <input type="text" name="id_opd" value="{{ Auth::guard('staff')->user()->id_opd }}" hidden>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama
                                                                    kondisi</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        name="nama_kondisi"
                                                                        value="{{ $kondisi->nama_kondisi }}">
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
                    <h4 class="modal-title">Tambah Data Kondisi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('staff-administrasi/kondisi') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <input type="text" name="id_opd" value="{{ Auth::guard('staff')->user()->id_opd }}" hidden>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Kondisi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Kondisi"
                                        name="nama_kondisi">
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
</x-staff>
