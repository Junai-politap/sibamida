<x-web>

    @include('menu.menu')


    <!--====== Start Page-Banner Section ======-->
    <section class="page-banner bg_cover p-r z-1"
        style="background-image: url({{ url('public/web') }}/assets/images/bg/page-bg-1.jpg);">
        <div class="brand-card text-center">
            <img src="{{ url('public/web') }}/assets/images/icon/wheat.png" alt="icon">
            <h3>Orgarium</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1>Assets</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">{{ $opd->singkatan }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Page-Banner Section ======-->
    <section class="project-grid-page p-r z-1 pt-170 pb-130" id="project-filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">Master Aset</span>
                        <h2>Info Seluruh Data Jembatan</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Aset</th>
                                        <th class="text-center">Nama Aset</th>
                                        <th class="text-center">Nama Penanggungjawab</th>
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
                                            <td>
                                                <a href="" data-toggle="modal"
                                                data-target="#Qrcode"><p>Lihat QrCode</p></a>
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
</x-web>


<div class="modal fade" id="Qrcode" tabindex="-1" role="dialog"
    aria-labelledby="Qrcode" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img class="img-responsive" src="{{ url('public/admin') }}/logo.png"
                    style="width: 100%; height: 50%; object-fit: cover" alt="" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="single-blog-list">
                    <li>
                        <div class="post-wrap">
                            <div class="post-text">
                                <h3></h3>
                                <p>

                                </p>
                            </div>
                        </div>
                </ul>
            </div>
        </div>
    </div>
</div>
