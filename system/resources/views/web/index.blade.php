<x-web>

    @include('menu.menu')

    <section class="hero-area-one">
        <div class="hero-slider-one">
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url({{ url('public/web') }}/assets/images/hero/hero_one-slider-1.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Organic Farms</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Agriculture &
                                    Organic Farms</h1>
                                {{-- <div class="hero-button" data-animation="fadeInDown" data-delay=".6s">
                                    <a href="about.html" class="main-btn btn-yellow">Learn About Us</a>
                                    <a href="portfolio-grid.html" class="main-btn bordered-btn bordered-white">Latest Project</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url({{ url('public/web') }}/assets/images/hero/hero_one-slider-2.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Organic Farms</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Welcome to
                                    Organic Farms</h1>
                                {{-- <div class="hero-button" data-animation="fadeInDown" data-delay=".6s">
                                    <a href="about.html" class="main-btn btn-yellow">Learn About Us</a>
                                    <a href="portfolio-grid.html" class="main-btn bordered-btn bordered-white">Latest Project</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url({{ url('public/web') }}/assets/images/hero/hero_one-slider-3.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Organic Farms</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Organic & Fresh
                                    Testy Foods</h1>
                                {{-- <div class="hero-button" data-animation="fadeInDown" data-delay=".6s">
                                    <a href="about.html" class="main-btn btn-yellow">Learn About Us</a>
                                    <a href="portfolio-grid.html" class="main-btn bordered-btn bordered-white">Latest Project</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url({{ url('public/web') }}/assets/images/hero/hero_one-slider-4.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Organic Farms</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Welcome to
                                    Organic Farms</h1>
                                {{-- <div class="hero-button" data-animation="fadeInDown" data-delay=".6s">
                                    <a href="about.html" class="main-btn btn-yellow">Learn About Us</a>
                                    <a href="portfolio-grid.html" class="main-btn bordered-btn bordered-white">Latest Project</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <h2 class="number"><span class="count">{{$list_peralatan->count()}}</span>+</h2>
                                    <p>Peralatan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count">{{$list_bangunan->count()}}</span>+</h2>
                                    <p>Bangunan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count">{{$list_tanah->count()}}</span>+</h2>
                                    <p>Tanah</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count">{{$list_jembatan->count()}}</span>+</h2>
                                    <p>Jembatan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-web>
