@php

    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('admin') }}" class="brand-link">
        <img src="{{ url('public') }}/logo.png"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"> SIBAMIDA</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public') }}/logo.png" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="{{ url('admin') }}" class="d-block">
                    {{ Auth::guard('admin')->user()->nama }}
                </a>
            </div>
        </div>



        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('admin') }}" class="nav-link {{ checkRouteActive('admin') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/opd') }}" class="nav-link {{ checkRouteActive('admin/opd') }}">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Data OPD
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/admin') }}" class="nav-link {{ checkRouteActive('admin/admin') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Admin
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/pegawai') }}" class="nav-link {{ checkRouteActive('admin/pegawai') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/kategori') }}" class="nav-link {{ checkRouteActive('admin/kategori') }}">
                        <i class="nav-icon fa fa-list "></i>
                        <p>Data Kategori Aset</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Master Data Aset
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('admin/master/jembatan-jalan') }}"
                                class="nav-link {{ checkRouteActive('admin/master/jembatan-jalan') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Jembatan dan Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/master/peralatan-mesin') }}"
                                class="nav-link {{ checkRouteActive('admin/master/peralatan-mesin') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Peralatan dan Mesin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/master/bangunan') }}"
                                class="nav-link {{ checkRouteActive('admin/master/bangunan') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Bangunan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/master/tanah') }}"
                                class="nav-link {{ checkRouteActive('admin/master/tanah') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tanah</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/slide') }}" class="nav-link {{ checkRouteActive('admin/slide') }}">
                        <i class="nav-icon fa fa-list "></i>
                        <p>Data Slide</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
