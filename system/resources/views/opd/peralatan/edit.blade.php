<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="opd/master/peralatan-mesin" />
                            <h3 class="text-center title">Tambah Data Aset</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('opd/master/peralatan-mesin', $peralatan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <input type="text" name="id_opd" value="{{ Auth::guard('opd')->user()->id }}"
                                    hidden>
                                <div class="form-group">
                                    <label for="exampleInputText">Nama Penanggung Jawab</label>
                                    <select name="id_pegawai" class="form-control" required>
                                        <option value=""> Pilih Penanggung Jawab Aset</option>
                                        @foreach ($list_pegawai as $pegawai)
                                            @if (Auth::guard('opd')->user()->id == $pegawai->id_opd)
                                                <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori" required>
                                                <option value=""> Pilih Kategori Aset</option>
                                                @foreach ($kategori as $kategori)
                                                    @if (Auth::guard('opd')->user()->id == $kategori->id_opd)
                                                        <option value="{{ $kategori->id }}">
                                                            {{ $kategori->nama_kategori }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nama Barang" value="{{ $peralatan->nama_barang }}"
                                                name="nama_barang" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Kode Barang" value="{{ $peralatan->kode_barang }}"
                                                name="kode_barang" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">kelompok</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan kelompok" value="{{ $peralatan->kelompok }}"
                                                name="kelompok" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Register"
                                                value="{{ $peralatan->no_register }}" name="no_register">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Merk Barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Merk Barang" value="{{ $peralatan->merk }}"
                                                name="merk">
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
                                            <label for="exampleInputText">keterangan</label>
                                            <input type="text" class="form-control" placeholder="Masukkan keterangan"
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
                                            <input type="file" class="form-control"
                                                placeholder="Masukkan Foto Aset" name="foto"
                                                accept=".jpg, .png, .jpeg">
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
</x-opd>
