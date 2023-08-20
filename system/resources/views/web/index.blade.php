<x-web>

    @include('menu.menu')

    <section class="hero-area-one">
        <div class="hero-slider-one">
            @foreach ($list_slide as $slide)
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url({{ url("public/$slide->foto") }});"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s"></span>
                                <h1 style="font-size: 350%" data-animation="fadeInUp" data-delay=".5s">
                                    {{ $slide->label }}
                                </h1>
                                {{-- <div class="hero-button" data-animation="fadeInDown" data-delay=".6s">
                                    <a href="about.html" class="main-btn btn-yellow">Learn About Us</a>
                                    <a href="portfolio-grid.html" class="main-btn bordered-btn bordered-white">Latest Project</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
 
    <section class="fun-fact">
        <div class="big-text mb-105 wow fadeInUp"><h2>Statistics</h2></div>
        <div class="container">
            <div class="counter-wrap-one wow fadeInDown">
                <div class="counter-inner-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count">{{$list_jembatan->count()}}</span>+ <p style="font-size: 50%">Data Aset</p></h2>
                                    <p style="font-size: 120%">Jembatan dan Jalan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count">{{$list_peralatan->count()}}</span>+ <p style="font-size: 50%">Data Aset</p></h2>
                                    <p style="font-size: 120%">Peralatan dan Mesin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count">{{$list_bangunan->count()}}</span>+ <p style="font-size: 50%">Data Aset</p></h2>
                                    <p style="font-size: 120%">Bangunan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count">{{$list_tanah->count()}}</span>+ <p style="font-size: 50%">Data Aset</p></h2>
                                    <p style="font-size: 120%">Tanah</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-web>
