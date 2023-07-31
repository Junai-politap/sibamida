<x-staff>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="staff-administrasi/master/peralatan-mesin" />
                            <h3 class="text-center title">Tambah Data Aset</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('staff-administrasi/master/peralatan-mesin') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <input type="text" name="id_opd" value="{{ Auth::guard('staff')->user()->id_opd }}"
                                    hidden>
                                    <input type="text" name="id_pegawai" value="{{ Auth::guard('staff')->user()->id }}"
                                    hidden>
                               

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori" required>
                                                <option value=""> Pilih Kategori Aset</option>
                                                @foreach ($list_kategori as $kategori)
                                                    @if (Auth::guard('staff')->user()->id_opd == $kategori->id_opd)
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
                                                placeholder="Masukkan Nama Barang" name="nama_barang" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Kode Barang" name="kode_barang" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kelompok</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Kelompok" name="kelompok" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Register" name="no_register">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Merk Barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Merk Barang" name="merk">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="year" class="form-control"
                                                placeholder="Masukkan Tahun Perolehan" name="tahun_perolehan">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Harga Perolehan" name="harga_perolehan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">keterangan</label>
                                            <input type="text" class="form-control" placeholder="Masukkan keterangan"
                                                name="keterangan">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPPD</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nomor SPPD"
                                                name="no_sppd">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPK</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nomor SPK"
                                                name="no_spk">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor BA</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor BA" name="no_ba">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Serah Terima</label>
                                            <input type="date" class="form-control"
                                                placeholder="Masukkan Tanggal Serah Terima"
                                                name="tanggal_serah_terima">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Ekstrakomtable</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Ekstrakomtable" name="ekstrakomtable">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Ukuran</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Ukuran"
                                                name="ukuran">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Pabrik</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Pabrik" name="no_pabrik">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Mesin</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Mesin" name="no_mesin">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor BPKB </label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor BPKB " name="no_bpkb">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Polisi </label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Polisi " name="no_polisi">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Rangka</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Rangka" name="no_rangka">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan 1</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Keterangan 1" name="keterangan1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan 1</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Harga Perolehan 1" name="harga_perolehan1">
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
</x-staff>
