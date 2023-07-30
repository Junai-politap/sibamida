<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/aset') }}" />
                        <h3 class="text-center" style="font-family: bold">Tambah Master Data Aset</h3>
                    </div>
                    <form action="{{ url('admin/aset') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Organisasi Perangkat Daerah</label>
                                <div class="col-sm-10">
                                    <select name="id_opd" class="form-control" >
                                        <option value=""> Pilih Organisasi Perangkat Daerah</option>
                                        @foreach ($list_opd as $opd)
                                            <option value="{{ $opd->id }}">{{ $opd->nama_opd }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Penanggungjawab</label>
                                <div class="col-sm-10">
                                    <select name="id_pegawai" class="form-control">
                                    <option value="">Pilih Penanggungjawab Terlebih Dahulu</option>
                                    @foreach ($list_pegawai as $pegawai)
                                            <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                        @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ruangan</label>
                                <div class="col-sm-10">
                                    <select name="id_ruangan" class="form-control">
                                    <option value="">Pilih Ruangan Terlebih Dahulu</option>
                                    @foreach ($list_ruangan as $ruangan)
                                            <option value="{{ $ruangan->id }}">{{ $ruangan->nama_ruangan }}</option>
                                        @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select name="id_kategori" class="form-control">
                                    <option value="">Pilih Kategori Terlebih Dahulu</option>
                                    @foreach ($list_kategori as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kode Aset</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Aset-001"
                                        name="kode_aset">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aset</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Masukan Nama Aset"
                                        name="nama_aset">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Poto Aset</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="foto"
                                        accept=".png, .jpg, .jppeg">
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
