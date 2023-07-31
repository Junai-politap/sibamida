<x-staff>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <x-button.back-button url="staff-administrasi/ruangan" />
                            <h3 class="title text-center">Tambah Data Ruangan</h3>
                        </div>
                        <form action="{{ url('staff-administrasi/ruangan') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="text" name="id_opd" value="{{ Auth::guard('staff')->user()->id_opd }}"
                                    hidden>
                                <div class="form-group">
                                    <label for="exampleInputText">Kode Ruangan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Kode Ruangan"
                                        name="kode_ruangan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText">Nama Ruangan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Ruangan"
                                        name="nama_ruangan">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-staff>