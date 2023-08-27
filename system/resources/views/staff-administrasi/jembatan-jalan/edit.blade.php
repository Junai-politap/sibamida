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
                            <h3 class="text-center title">Edit Data Aset Jembatan dan Jalan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('staff-administrasi/master/jembatan-jalan', $jembatan->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <input type="text" name="id_opd" value="{{ Auth::guard('staff')->user()->id_opd }}"
                                    hidden>
                                <div class="form-group">
                                    <label for="exampleInputText">Nama Penanggung Jawab</label>
                                    <select name="id_pegawai" class="form-control" >
                                        <option value=""> Pilih Penanggung Jawab Aset</option>
                                        @foreach ($list_pegawai as $pegawai)
                                            @if (Auth::guard('staff')->user()->id_opd == $pegawai->id_opd)
                                            <option @if ($pegawai->id == $jembatan->id_pegawai) selected @endif
                                                value="{{ $pegawai->id }}">
                                                {{ $pegawai->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Bidang</label>
                                            <select class="form-control" name="id_bidang" >
                                                
                                                @foreach ($list_bidang as $bidang)
                                                    @if (Auth::guard('staff')->user()->id_opd == $bidang->id_opd)
                                                    <option @if ($bidang->id == $jembatan->id_bidang) selected @endif
                                                        value="{{ $bidang->id }}">
                                                        {{ $bidang->nama_bidang }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori" >
                                                
                                                @foreach ($list_kategori as $kategori)
                                                    @if (Auth::guard('staff')->user()->id_opd == $kategori->id_opd)
                                                    <option @if ($kategori->id == $jembatan->id_kategori) selected @endif
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
                                            <label for="exampleInputText">Kode Aset</label>
                                            <input type="text" class="form-control" value="{{$jembatan->kode_aset}}" placeholder="Masukkan Kode Aset"
                                                name="kode_aset" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Aset</label>
                                            <input type="text" class="form-control" value="{{$jembatan->nama_aset}}" placeholder="Masukkan Nama Aset"
                                                name="nama_aset" >
                                        </div>
                                    </div>
                                </div>
                               

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->no_register}}" placeholder="Masukkan Nomor Register" name="no_register">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="year" class="form-control"
                                                value="{{$jembatan->tahun_perolehan}}" placeholder="Masukkan Tahun Perolehan" name="tahun_perolehan">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->harga_perolehan}}" placeholder="Masukkan Harga Perolehan" name="harga_perolehan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Alamat</label>
                                            <input type="text" class="form-control" value="{{$jembatan->alamat}}" placeholder="Masukkan Alamat"
                                                name="alamat">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control" value="{{$jembatan->keterangan}}" placeholder="Masukkan Keterangan"
                                                name="keterangan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Kondisi</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->nama_kondisi}}" placeholder="Masukkan Nama Kondisi" name="nama_kondisi">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Sumber Dana</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->nama_sumber_dana}}" placeholder="Masukkan Nama Sumber Dana" name="nama_sumber_dana">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPPD</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->no_sppd}}" placeholder="Masukkan Nomor SPPD" name="no_sppd">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPK</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->no_spk}}" placeholder="Masukkan Nomor SPK" name="no_spk">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Berita Acara</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->no_ba}}" placeholder="Masukkan Nomor Berita Acara" name="no_ba">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Serah Terima</label>
                                            <input type="date" class="form-control"
                                                value="{{$jembatan->tanggal_serah_terima}}" placeholder="Masukkan Tanggal Serah Terima"
                                                name="tanggal_serah_terima">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Jenis Kontruksi</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->kontruksi}}" placeholder="Masukkan Jenis Kontruksi" name="kontruksi">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Panjang </label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->panjang}}" placeholder="Masukkan Panjang " name="panjang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lebar </label>
                                            <input type="text" class="form-control" value="{{$jembatan->lebar}}" placeholder="Masukkan Lebar "
                                                name="lebar">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Luas</label>
                                            <input type="text" class="form-control" value="{{$jembatan->luas}}" placeholder="Masukkan Luas"
                                                name="luas">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Dokumen</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->nomor_dokumen}}" placeholder="Masukkan Nomor Dokumen" name="nomor_dokumen">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Dokumen</label>
                                            <input type="date" class="form-control"
                                                value="{{$jembatan->tanggal_dokumen}}" placeholder="Masukkan Tanggal Dokumen" name="tanggal_dokumen">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Status Tanah</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->status_tanah}}" placeholder="Masukkan Status Tanah" name="status_tanah">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Tanah</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->nomor_tanah}}" placeholder="Masukkan Nomor Tanah" name="nomor_tanah">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lokasi</label>
                                            <input type="text" class="form-control" value="{{$jembatan->lokasi}}" placeholder="Masukkan Lokasi"
                                                name="lokasi">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Header</label>
                                            <input type="text" class="form-control" value="{{$jembatan->header}}" placeholder="Masukkan Header"
                                                name="header">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Urut Kelompok</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->urut_kelompok}}" placeholder="Masukkan Urut Kelompok" name="urut_kelompok">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kelompok</label>
                                            <input type="text" class="form-control"
                                                value="{{$jembatan->kelompok}}" placeholder="Masukkan Kelompok" name="kelompok">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="{{ url("public/$jembatan->foto") }}"
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
