<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Slide
                        </button>
                        <h4 class="card-title">
                            <strong>Master Data Slide</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Label</th>
                                    <th class="text-center">Foto</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_slide as $slide)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-edit{{ $slide->id }}">
                                                <span class="fa fa-edit"></span>
                                            </button>
                                                <x-button.delete-button url="admin/master/slide" id="{{ $slide->id }}" />
                                            </div>
                                        </td>
                                        
                                        <td class="">{{ $slide->label }}</td>
                                        <td class="text-center" style="width: 20%">
                                            <img src="{{ url("public/$slide->foto") }}" style="width:30%; height:30%;" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-edit{{ $slide->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Slide</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/slide', $slide->id) }}" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card-body">

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Label Slide</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="label" value="{{ $slide->label }}">
                                                                </div>
                                                            </div>
                                
                                
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Foto</label>
                                                                <div class="col-md-4">
                                                                    <img src="{{ url("public/$slide->foto") }}" style="width:50%; ">
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" value="{{ $slide->foto }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default"
                                                            data-dismiss="modal">Batal</button>
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
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
                    <h4 class="modal-title">Tambah Data Slide</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/slide') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Label Slide</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Label Slide"
                                        name="label">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-admin>
