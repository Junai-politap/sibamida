<x-opd>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="opd/master/tanah" />
                            <h3 class="text-center title">Tambah Data Aset</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('opd/master/tanah') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="text" name="id_opd" value="{{ Auth::guard('opd')->user()->id }}" hidden>
                                <div class="row">
                                   

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Penanggung Jawab</label>
                                            <select name="id_pegawai" class="form-control" required>
                                                <option value=""> Pilih Penanggung Jawab Aset</option>
                                                @foreach ($list_pegawai as $pegawai)
                                                @if ( Auth::guard('opd')->user()->id == $pegawai->id_opd)
                                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori" required>
                                                <option value=""> Pilih Kategori Aset</option>
                                                @foreach ($list_kategori as $kategori)
                                                @if ( Auth::guard('opd')->user()->id == $kategori->id_opd)
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
                                            <label for="exampleInputText">Nama Bidang</label>
                                            <select class="form-control" name="id_bidang" required>
                                                <option value=""> Pilih Nama Bidang</option>
                                                @foreach ($list_bidang as $bidang)
                                                    @if (Auth::guard('opd')->user()->id == $bidang->id_opd)
                                                        <option value="{{ $bidang->id }}">
                                                            {{ $bidang->nama_bidang }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Kode Barang"
                                                name="kode_barang" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Barang</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Barang"
                                                name="nama_barang" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Register" name="register">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="year" class="form-control"
                                                placeholder="Masukkan Tahun Perolehan" name="tahun_perolehan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Cara Perolehan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Cara Perolehan" name="cara_perolehan">
                                        </div>
                                    </div>

                                    

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Harga"
                                                name="harga">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Luas</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Luas"
                                                name="luas">
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lokasi</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Lokasi" name="lokasi">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Keterangan" name="keterangan">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Penggunaan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Penggunaan" name="penggunaan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Sertifikat</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Sertifikat" name="no_sertifikat">
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <input type="file" class="form-control" name="foto"
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
