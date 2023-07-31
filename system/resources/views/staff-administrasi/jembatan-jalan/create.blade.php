<x-staff>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="staff-administrasi/master/jembatan-jalan" />
                            <h3 class="text-center title">Tambah Data Aset Jembatan dan Jalan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('staff-administrasi/master/jembatan-jalan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="text" name="id_opd" value="{{ Auth::guard('staff')->user()->id_opd }}" class="form-control" hidden>
                                    <input type="text" name="id_pegawai" value="{{ Auth::guard('staff')->user()->id }}" class="form-control" hidden>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Aset</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Kode Aset"
                                                name="kode_aset" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Aset</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Aset"
                                                name="nama_aset" required>
                                        </div>
                                    </div>

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
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Register" name="no_register">
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
                                            <label for="exampleInputText">Alamat</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Alamat"
                                                name="alamat">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Keterangan"
                                                name="keterangan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Kondisi</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nama Kondisi" name="nama_kondisi">
                                        </div>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Sumber Dana</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nama Sumber Dana" name="nama_sumber_dana">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPPD</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor SPPD" name="no_sppd">
                                        </div>
                                    </div>



                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPK</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor SPK" name="no_spk">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Berita Acara</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Berita Acara" name="no_ba">
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Serah Terima</label>
                                            <input type="date" class="form-control"
                                                placeholder="Masukkan Tanggal Serah Terima"
                                                name="tanggal_serah_terima">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Jenis Kontruksi</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Jenis Kontruksi" name="kontruksi">
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Panjang </label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Panjang " name="panjang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lebar </label>
                                            <input type="text" class="form-control" placeholder="Masukkan Lebar "
                                                name="lebar">
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Luas</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Luas"
                                                name="luas">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Dokumen</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Dokumen" name="nomor_dokumen">
                                        </div>
                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Dokumen</label>
                                            <input type="date" class="form-control"
                                                placeholder="Masukkan Tanggal Dokumen" name="tanggal_dokumen">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Status Tanah</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Status Tanah" name="status_tanah">
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Tanah</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Tanah" name="nomor_tanah">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lokasi</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Lokasi"
                                                name="lokasi">
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Header</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Header"
                                                name="header">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Urut Kelompok</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Urut Kelompok" name="urut_kelompok">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kelompok</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Kelompok" name="kelompok">
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
