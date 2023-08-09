@php

    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<header class="header-area">
    <div class="top-bar-one dark-black-bg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 col-md-12 col-6">
                    <div class="top-left d-flex align-items-center">
                        <span class="text">Welcome to Sistem Infomasi Barang Milik Daerah</span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-6">
                    <div class="top-right">
                        <div id="jam" style="color: white; font-size: 150%"></div>
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container-1350">
            <div class="row align-items-center">
                <div class="col-xl-4 d-xl-block d-lg-none">
                    <div class="site-branding d-lg-block d-none">
                        <h3> SIBAMIDA </h3>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="contact-information">
                        <div class="information-item_one d-flex">
                            <div class="icon">
                                <i class="flaticon-placeholder"></i>
                            </div>
                            <div class="info">
                                <h5 class="mb-1">Locations</h5>
                                <p>Jl. Jend. Sudirman No.37, Mulia Baru, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78811</p>
                            </div>
                        </div>
                        <div class="information-item_one d-flex">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h5 class="mb-1">Email Us</h5>
                                <p><a href="mailto:hotlineinfo@gmial.com">hotlineinfo@gmial.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navigation navigation-one">
        <div class="nav-overlay"></div>
        <div class="container-1350">
            <div class="primary-menu">
                <div class="site-branding">
                    <a href="index.html" class="brand-logo"><img
                            src="{{ url('public/web') }}/assets/images/logo/ketapang.png" alt="Site Logo"></a>
                </div>
                <div class="nav-inner-menu">
                    <div class="nav-menu">

                        <div class="navbar-close"><i class="far fa-times"></i></div>
                        <nav class="main-menu">
                            <ul>
                                <li><a href="{{ url('/') }}"
                                        class="nav-link {{ checkRouteActive('/') }}">Dashboard</a></li>
                                <li class="menu-item has-children"><a href="#">Assets</a>
                                    @yield('menu')
                                </li>
                                <li><a href="{{ url('contact') }}"
                                        class="nav-link {{ checkRouteActive('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="nav-right-item">
                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script type="text/javascript">
    window.onload = function() {
        jam();
    }

    function jam() {
        var e = document.getElementById('jam'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h + ':' + m + ':' + s;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>
