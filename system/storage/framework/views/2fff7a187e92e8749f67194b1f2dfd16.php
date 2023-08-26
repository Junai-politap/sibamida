<?php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo e(url('staff-administrasi')); ?>" class="brand-link">
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
                <a href="<?php echo e(url('staff-administrasi')); ?>" class="d-block">
                    <?php echo e(Auth::guard('staff')->user()->nama); ?>

                </a>
            </div>
        </div>



        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="<?php echo e(url('staff-administrasi')); ?>" class="nav-link <?php echo e(checkRouteActive('staff-administrasi')); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('staff-administrasi/kategori')); ?>" class="nav-link <?php echo e(checkRouteActive('staff-administrasi/kategori')); ?>">
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
                            <a href="<?php echo e(url('staff-administrasi/master/jembatan-jalan')); ?>" class="nav-link <?php echo e(checkRouteActive('staff-administrasi/master/jembatan-jalan')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Jembatan dan Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('staff-administrasi/master/peralatan-mesin')); ?>" class="nav-link <?php echo e(checkRouteActive('staff-administrasi/master/peralatan-mesin')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Peralatan dan Mesin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('staff-administrasi/master/bangunan')); ?>" class="nav-link <?php echo e(checkRouteActive('staff-administrasi/master/bangunan')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Bangunan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('staff-administrasi/master/tanah')); ?>" class="nav-link <?php echo e(checkRouteActive('staff-administrasi/master/tanah')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tanah</p>
                            </a>
                        </li>

                    </ul>
    
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('staff-administrasi/laporan')); ?>" class="nav-link <?php echo e(checkRouteActive('staff-administrasi/laporan')); ?>">
                        <i class="nav-icon fa fa-list "></i>
                        <p> Laporan</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<?php /**PATH D:\Github\sibamida\system\resources\views/components/section/staff/sidebar.blade.php ENDPATH**/ ?>