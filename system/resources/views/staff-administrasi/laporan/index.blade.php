<x-staff>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">

                        <h4 class="text-center title">
                            <strong>Buat Laporan Aset</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <form action="{{ url('staff-administrasi/laporan') }}" method="post">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="tanggal_mulai">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="date" class="form-control" name="tanggal_selesai">
                                    </div>
                                </div>

                            </div>
                            <div class="footer">

                                <button type="submit" class="btn btn-primary float-right"><span
                                        class="fa fa-check"></span>
                                    Buat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-staff>
