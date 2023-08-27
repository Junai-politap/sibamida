<x-staff>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="staff-administrasi/master/bangunan" />
                            <h3 class="text-center title">Data Data Aset Bangunan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('staff-administrasi/master/bangunan', $bangunan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="card-body">
                                <div class="row">
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Penanggung Jawab</label>
                                            <select name="id_pegawai" class="form-control">
                                                @foreach ($list_pegawai as $pegawai)
                                                @if ( Auth::guard('staff')->user()->id_opd == $pegawai->id_opd)
                                                    <option @if ($pegawai->id == $bangunan->id_pegawai) selected @endif
                                                        value="{{ $pegawai->id }}">
                                                        {{ $pegawai->nama }}</option>
                                                        @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori</label>
                                            <select class="form-control" name="id_kategori">
                                                @foreach ($list_kategori as $kategori)
                                                @if ( Auth::guard('staff')->user()->id_opd == $kategori->id_opd)
                                                    <option @if ($kategori->id == $bangunan->id_kategori) selected @endif
                                                        value="{{ $kategori->id }}">
                                                        {{ $kategori->nama_kategori }}</option>
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
                                            <select class="form-control" name="id_bidang">
                                                @foreach ($list_bidang as $bidang)
                                                @if ( Auth::guard('staff')->user()->id_opd == $bidang->id_opd)
                                                    <option @if ($bidang->id == $bangunan->id_bidang) selected @endif
                                                        value="{{ $bidang->id }}">
                                                        {{ $bidang->nama_bidang }}</option>
                                                        @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control" name="kode_barang"
                                                value="{{ $bangunan->kode_barang }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang"
                                                value="{{ $bangunan->nama_barang }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control" name="no_register"
                                                value="{{ $bangunan->no_register }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="year" class="form-control" name="tahun_perolehan"
                                                value="{{ $bangunan->tahun_perolehan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan</label>
                                            <input type="text" class="form-control" name="harga_perolehan"
                                                value="{{ $bangunan->harga_perolehan }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Alamat</label>
                                            <input type="text" class="form-control" name="alamat"
                                                value="{{ $bangunan->alamat }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan"
                                                value="{{ $bangunan->keterangan }}">
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Sumber Dana</label>
                                            <input type="text" class="form-control" name="nama_sumber_dana"
                                                value="{{ $bangunan->nama_sumber_dana }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPPD</label>
                                            <input type="text" class="form-control" name="no_sppd"
                                                value="{{ $bangunan->no_sppd }}">
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPK</label>
                                            <input type="text" class="form-control" name="no_spk"
                                                value="{{ $bangunan->no_spk }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Berita Acara</label>
                                            <input type="text" class="form-control" name="no_ba"
                                                value="{{ $bangunan->no_ba }}">
                                        </div>
                                    </div>

                                </div>

                               

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Bertingkat</label>
                                            <input type="text" class="form-control" name="bertingkat"
                                                value="{{ $bangunan->bertingkat }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Beton</label>
                                            <input type="text" class="form-control" name="beton"
                                                value="{{ $bangunan->beton }}">
                                        </div>
                                    </div>
                                   


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Urut Kelompok</label>
                                            <input type="text" class="form-control" name="urut_kelompok"
                                                value="{{ $bangunan->urut_kelompok }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kelompok</label>
                                            <input type="text" class="form-control" name="kelompok"
                                                value="{{ $bangunan->kelompok }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ url("public/$bangunan->foto") }}"
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
</x-staff>
