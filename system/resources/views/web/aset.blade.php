<x-web>

    @include('menu.menu')

    <section class="page-banner bg_cover p-r z-1"
        style="background-image: url({{ url('public/web') }}/assets/images/bg/page-bg-1.jpg);">
        <div class="brand-card text-center">

            <h3>{{ $opd->singkatan }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h2 style="color: white">Master Data Aset</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="shaop-page pt-170 pb-70">
        <div class="container">
            <div class="products-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="single-product-item mb-60 wow fadeInUp">
                            <div class="product-img">
                                <img src="{{ url('public') }}/jembatan.png" style="width: 50%">
                                <div class="pc-btn">{{$list_jembatan->count()}} Data Aset</div>
                                <div class="cart-button">
                                    <a href="{{url("jembatan/$opd->id")}}" class="main-btn btn-yellow">
                                        Lihat Detail Aset
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">

                                <h3 class="title">
                                    <a href="{{url("jembatan/$opd->id")}}">
                                        Jembatan dan Jalan
                                    </a>
                                </h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="single-product-item mb-60 wow fadeInUp">
                            <div class="product-img">
                                <img src="{{ url('public') }}/alat.png" style="width: 50%">
                                <div class="pc-btn">{{$list_bangunan->count()}} Data Aset</div>
                                <div class="cart-button">
                                    <a href="{{url("peralatan/$opd->id")}}" class="main-btn btn-yellow">
                                        Lihat Detail Aset
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">

                                <h3 class="title">
                                    <a href="{{url("peralatan/$opd->id")}}">
                                        Peralatan dan Mesin
                                    </a>
                                </h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="single-product-item mb-60 wow fadeInUp">
                            <div class="product-img">
                                <img src="{{ url('public') }}/bangunan.png" style="width: 50%">
                                <div class="pc-btn">{{$list_peralatan->count()}}</div>
                                <div class="cart-button">
                                    <a href="{{url("bangunan/$opd->id")}}" class="main-btn btn-yellow">
                                        Lihat Detail Aset
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">

                                <h3 class="title">
                                    <a href="{{url("bangunan/$opd->id")}}">
                                        Bangunan
                                    </a>
                                </h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="single-product-item mb-60 wow fadeInUp">
                            <div class="product-img">
                                <img src="{{ url('public') }}/tanah.png" style="width: 50%">
                                <div class="pc-btn">{{$list_tanah->count()}} Data Aset</div>
                                <div class="cart-button">
                                    <a href="{{url("tanah/$opd->id")}}" class="main-btn btn-yellow">
                                        Lihat Detail Aset
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">

                                <h3 class="title">
                                    <a href="{{url("tanah/$opd->id")}}">
                                        Tanah
                                    </a>
                                </h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web>
