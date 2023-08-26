<x-admin>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="admin/master/peralatan-mesin" />
                            <h3 class="text-center title">Edit Data Aset Peralatan dan Mesin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('admin/master/peralatan-mesin', $peralatan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama OPD</label>
                                            <select name="id_opd" class="form-control">
                                                @foreach ($list_opd as $opd)
                                                    <option @if ($opd->id == $peralatan->id_opd) selected @endif
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
                                                    <option @if ($pegawai->id == $peralatan->id_pegawai) selected @endif
                                                        value="{{ $pegawai->id }}">
                                                        {{ $pegawai->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Bidang</label>
                                            <select class="form-control" name="id_bidang">
                                                @foreach ($list_bidang as $bidang)
                                                    <option @if ($bidang->id == $peralatan->id_bidang) selected @endif
                                                        value="{{ $bidang->id }}">
                                                        {{ $bidang->nama_bidang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori">
                                                @foreach ($list_kategori as $kategori)
                                                    <option @if ($kategori->id == $peralatan->id_kategori) selected @endif
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
                                            <label for="exampleInputText">Nama Barang</label>
                                            <input type="text" class="form-control"
                                                value="{{ $peralatan->nama_barang }}" name="nama_barang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control"
                                                value="{{ $peralatan->kode_barang }}" name="kode_barang">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Ruangan</label>
                                            <select class="form-control" name="id_ruangan">
                                                @foreach ($list_ruangan as $ruangan)
                                                    <option @if ($ruangan->id == $peralatan->id_ruangan) selected @endif
                                                        value="{{ $ruangan->id }}">
                                                        {{ $ruangan->nama_ruangan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kelompok</label>
                                            <input type="text" class="form-control"
                                                value="{{ $peralatan->kelompok }}" name="kelompok">
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Register"
                                                value="{{ $peralatan->no_register }}" name="no_register">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Merk Barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Merk Barang" value="{{ $peralatan->merk }}"
                                                name="merk">
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kondisi</label>
                                            <select class="form-control" name="id_kondisi">
                                                @foreach ($list_kondisi as $kondisi)
                                                    <option @if ($kondisi->id == $peralatan->id_kondisi) selected @endif
                                                        value="{{ $kondisi->id }}">
                                                        {{ $kondisi->nama_kondisi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="year" class="form-control"
                                                placeholder="Masukkan Tahun Perolehan"
                                                value="{{ $peralatan->tahun_perolehan }}" name="tahun_perolehan">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Harga Perolehan"
                                                value="{{ $peralatan->harga_perolehan }}" name="harga_perolehan">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Keterangan"
                                                value="{{ $peralatan->keterangan }}" name="keterangan">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPPD</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor SPPD" value="{{ $peralatan->no_sppd }}"
                                                name="no_sppd">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPK</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor SPK" value="{{ $peralatan->no_spk }}"
                                                name="no_spk">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor BA</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor BA" value="{{ $peralatan->no_ba }}"
                                                name="no_ba">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Serah Terima</label>
                                            <input type="date" class="form-control"
                                                placeholder="Masukkan Tanggal Serah Terima"
                                                value="{{ $peralatan->tanggal_serah_terima }}"
                                                name="tanggal_serah_terima">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Ekstrakomtable</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Ekstrakomtable"
                                                value="{{ $peralatan->ekstrakomtable }}" name="ekstrakomtable">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Ukuran</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Ukuran"
                                                value="{{ $peralatan->ukuran }}" name="ukuran">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Pabrik</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Pabrik"
                                                value="{{ $peralatan->no_pabrik }}" name="no_pabrik">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Mesin</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Mesin" value="{{ $peralatan->no_mesin }}"
                                                name="no_mesin">
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor BPKB </label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor BPKB " value="{{ $peralatan->no_bpkb }}"
                                                name="no_bpkb">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Polisi </label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Polisi "
                                                value="{{ $peralatan->no_polisi }}" name="no_polisi">
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Rangka</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Rangka"
                                                value="{{ $peralatan->no_rangka }}" name="no_rangka">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan 1</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Keterangan 1"
                                                value="{{ $peralatan->keterangan1 }}" name="keterangan1">
                                        </div>
                                    </div>

                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan 1</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Harga Perolehan 1"
                                                value="{{ $peralatan->harga_perolehan1 }}" name="harga_perolehan1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ url("public/$peralatan->foto") }}"
                                                        style="width: 50%">
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
