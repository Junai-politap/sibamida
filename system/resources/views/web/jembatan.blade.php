<x-web>

    {{-- @include('menu.menu')
 --}}

    <section class="page-banner bg_cover p-r z-1" style="background-image: url({{ url('public') }}/kantor.jpg);">
        <div class="brand-card text-center">

            <h3>{{ $opd->singkatan }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h2 style="color: white">Data Aset Jembatan dan Jalan</h2>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="active"><a href="{{ url("master-aset/$opd->id") }}">Data Aset</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project-grid-page p-r z-1 pt-170 pb-130" id="project-filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">Master Aset</span>
                        <h2>Info Seluruh Data Jembatan dan Jalan</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="body">
                        <div class="header">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><span
                                    class="fa fa-search"></span> Filter Aset Investasi Daerah</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Aset</th>
                                        <th class="text-center">Nama Aset</th>
                                        <th class="text-center">Nama Penanggungjawab</th>
                                        <th class="text-center">Harga Perolehan</th>
                                        <th class="text-center" style="width: 30%">Keterangan</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_jembatan as $jembatan)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-left"> {{ $jembatan->kode_aset }}</td>
                                            <td class="">{{ $jembatan->nama_aset }}</td>
                                            <td class="">{{ $jembatan->pegawai->nama }}</td>
                                            <td class="">Rp. {{ $jembatan->harga_perolehan }}</td>
                                            <td class="">{{ $jembatan->keterangan }}</td>
                                            <td class="text-center">


                                                <a href="{{ url("detail-jembatan/$jembatan->id") }}"
                                                    class="btn btn-info"><span class="fa fa-info"></span> Detail
                                                    Aset</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Filter Data Aset Investasi Daerah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url("jembatan/$jembatan->id_opd") }}/filter-jembatan" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Aset</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_aset" value="{{ $nama_aset ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-warning" data-dismiss="modal"><span class="fa fa-times"></span> Batal</button>
                        <button class="btn btn-primary"><span class="fa fa-search"></span> Cari</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-web>
