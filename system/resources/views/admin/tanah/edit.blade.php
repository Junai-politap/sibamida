<x-admin>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="admin/master/tanah" />
                            <h3 class="text-center title">Edit Data Aset Tanah</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('admin/master/tanah', $tanah->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama OPD</label>
                                            <select name="id_opd" class="form-control">
                                                @foreach ($list_opd as $opd)
                                                    <option @if ($opd->id == $tanah->id_opd) selected @endif
                                                        value="{{ $opd->id }}">
                                                        {{ $opd->nama_opd }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Penanggung Jawab</label>
                                            <select name="id_pegawai" class="form-control">
                                                @foreach ($list_pegawai as $pegawai)
                                                    <option @if ($pegawai->id == $tanah->id_pegawai) selected @endif
                                                        value="{{ $pegawai->id }}">
                                                        {{ $pegawai->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control" name="kode_barang"
                                                value="{{ $tanah->kode_barang }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang"
                                                value="{{ $tanah->nama_barang }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori">
                                                @foreach ($list_kategori as $kategori)
                                                    <option @if ($kategori->id == $tanah->id_kategori) selected @endif
                                                        value="{{ $kategori->id }}">
                                                        {{ $kategori->nama_kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control" name="register"
                                                value="{{ $tanah->register }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Cara Perolehan</label>
                                            <input type="year" class="form-control" name="cara_perolehan"
                                                value="{{ $tanah->cara_perolehan }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="text" class="form-control" name="tahun_perolehan"
                                                value="{{ $tanah->tahun_perolehan }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga</label>
                                            <input type="text" class="form-control" name="harga"
                                                value="{{ $tanah->harga }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Luas</label>
                                            <input type="text" class="form-control" name="luas"
                                                value="{{ $tanah->luas }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi"
                                                value="{{ $tanah->lokasi }}">
                                        </div>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan"
                                                value="{{ $tanah->keterangan }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Penggunaan</label>
                                            <input type="text" class="form-control" name="penggunaan"
                                                value="{{ $tanah->penggunaan }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Sertifikat</label>
                                            <input type="text" class="form-control" name="no_sertifikat"
                                                value="{{ $tanah->no_sertifikat }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ url("public/$tanah->foto") }}"
                                                        style="width: 100%">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="file" class="form-control" name="foto"
                                                        accept=".jpg, .png, .jpeg">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="footer">
                                    <button type="reset" class="btn btn-default "><span class="fa fa-times"></span>
                                        Batal</button>
                                    <button type="submit" class="btn btn-primary float-right"><span
                                            class="fa fa-save"></span>
                                        Simpan</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>
</x-admin>
