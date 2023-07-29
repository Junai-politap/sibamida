<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/pegawai') }}" />
                        <h3 class="text-center" style="font-family: bold">Tambah Data OPD</h3>
                    </div>
                    <form action="{{ url('admin/pegawai',$pegawai->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $pegawai->nip }}"
                                        name="nip">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $pegawai->nik }}"
                                        name="nik">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Pegawai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $pegawai->nama }}"
                                        name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Organisasi Perangkat Daerah</label>
                                <div class="col-sm-10">
                                    <select name="id_opd" class="form-control">
                                        @foreach ($list_opd as $opd)
                                        <option @if ($opd->id == $pegawai->id_opd) selected @endif
                                            value="{{ $opd->id }}">
                                            {{ $opd->nama_opd }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $pegawai->username }}"
                                        name="username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan Pegawai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $pegawai->jabatan }}"
                                        name="jabatan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Pegawai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $pegawai->alamat }}"
                                        name="alamat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Hp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $pegawai->nomor_hp }}"
                                        name="nomor_hp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Poto</label>
                                <div class="col-sm-4">
                                    
                                    <img src="{{ url("public/$pegawai->foto") }}" style="width: 50%; height: 100%">
                                </div>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" name="foto"
                                        accept=".png, .jpg, .jppeg" value="{{ $pegawai->foto }}">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 2%">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-10">
                                    <div class="footer">
                                        <button type="reset" class="btn btn-default float-left"><span class="fa fa-times"></span> Batal</button>

                                        <button class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin>
