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
    <!--====== Start Portfolio Grid Page ======-->
    <section class="project-grid-page p-r z-1 pt-170 pb-130" id="project-filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">Master Aset</span>
                        <h2>We’ve Done Many Other Projects
                            Let’s See Gallery Insights</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="portfolio-filter-button text-center mb-60 wow fadeInDown">
                        <ul class="filter-btn">
                            <li class="active" data-filter="*">Show All</li>
                            <li data-filter=".cat-1">Peralatan</li>
                            <li data-filter=".cat-2">Jembatan</li>
                            <li data-filter=".cat-3">Tanah</li>
                            <li data-filter=".cat-4">Bangunan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row project-row">
                @foreach ($list_peralatan as $peralatan)
                    <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-1">
                        <div class="project-item-three mb-30 wow fadeInUp">
                            <div class="img-holder">
                                <img src="{{ $img }}" style="object-fit: cover; position: static; width: 100%;">
                                <div class="hover-portfolio">
                                   
                                    <div class="hover-content">
                                        <h3 class="title">{{ $peralatan->opd->singkatan }}</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($list_jembatan as $jembatan)
                    <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-2">
                        <div class="project-item-three mb-30 wow fadeInDown">
                            <div class="img-holder">
                                <img src="{{ $img }}" style="object-fit: cover; position: static; width: 100%;">
                                <div class="hover-portfolio">
                                   
                                    <div class="hover-content">
                                        <h3 class="title">{{ $jembatan->opd->singkatan }}</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($list_tanah as $tanah)
                <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-3">
                    <div class="project-item-three mb-30 wow fadeInUp">
                        <div class="img-holder">
                            <img src="{{ url("public/$tanah->foto") }}" style="object-fit: cover; position: static; width: 100%; height: 300px;">
                            <div class="hover-portfolio">
                                <div class="icon-btn">
                                <div class="hover-content">
                                    <h3 class="title">{{ $tanah->opd->singkatan }}</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($list_bangunan as $bangunan)
                <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-4">
                    <div class="project-item-three mb-30 wow fadeInDown">
                        <div class="img-holder">
                            <img src="{{ url("public/$bangunan->foto") }}" style="object-fit: cover; position: static; width: 100%; height: 300px;">
                            <div class="hover-portfolio">
                                <div class="icon-btn">
                                <div class="hover-content">
                                    <h3 class="title">{{ $bangunan->opd->singkatan }}</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!--====== End Portfolio Grid Page ======-->
</x-web>
