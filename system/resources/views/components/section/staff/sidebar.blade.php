@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ url("public", Auth::guard('staff')->user()->foto) }}"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"> SIBAMIDA</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url("public", Auth::guard('staff')->user()->foto) }}" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::guard('staff')->user()->nama }}
                </a>
            </div>
        </div>



        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('staff-administrasi') }}" class="nav-link {{ checkRouteActive('staff-administrasi') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ url('staff-administrasi/ruangan') }}" class="nav-link {{ checkRouteActive('staff-administrasi/ruangan') }}">
                        <i class="nav-icon fa fa-city"></i>
                        <p>Data Ruangan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('staff-administrasi/kategori') }}" class="nav-link {{ checkRouteActive('staff-administrasi/kategori') }}">
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
                            <a href="{{ url('staff-administrasi/master/jembatan-jalan') }}" class="nav-link {{ checkRouteActive('staff-administrasi/master/jembatan-jalan') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Jembatan dan Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('staff-administrasi/master/peralatan-mesin') }}" class="nav-link {{ checkRouteActive('staff-administrasi/master/peralatan-mesin') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Peralatan dan Mesin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('staff-administrasi/master/bangunan') }}" class="nav-link {{ checkRouteActive('staff-administrasi/master/bangunan') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Bangunan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('staff-administrasi/master/tanah') }}" class="nav-link {{ checkRouteActive('staff-administrasi/master/tanah') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tanah</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
