<?php

    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="<?php echo e(url('public/admin')); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"> SIBAMIDA</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(url('public/admin')); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php echo e(Auth::guard('admin')->user()->nama); ?>

                </a>
            </div>
        </div>



        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="<?php echo e(url('admin')); ?>" class="nav-link <?php echo e(checkRouteActive('admin')); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('admin/opd')); ?>" class="nav-link <?php echo e(checkRouteActive('admin/opd')); ?>">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Data OPD
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('admin/admin')); ?>" class="nav-link <?php echo e(checkRouteActive('admin/admin')); ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Admin
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('admin/pegawai')); ?>" class="nav-link <?php echo e(checkRouteActive('admin/pegawai')); ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('admin/kategori')); ?>" class="nav-link <?php echo e(checkRouteActive('admin/kategori')); ?>">
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
                            <a href="<?php echo e(url('admin/master/jembatan-jalan')); ?>"
                                class="nav-link <?php echo e(checkRouteActive('admin/master/jembatan-jalan')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Jembatan dan Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/master/peralatan-mesin')); ?>"
                                class="nav-link <?php echo e(checkRouteActive('admin/master/peralatan-mesin')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Peralatan dan Mesin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/master/bangunan')); ?>"
                                class="nav-link <?php echo e(checkRouteActive('admin/master/bangunan')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Bangunan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/master/tanah')); ?>"
                                class="nav-link <?php echo e(checkRouteActive('admin/master/tanah')); ?>">
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
<?php /**PATH D:\Github\sibamida\system\resources\views/components/section/admin/sidebar.blade.php ENDPATH**/ ?>