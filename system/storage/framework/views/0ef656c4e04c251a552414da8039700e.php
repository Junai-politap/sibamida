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
        <img src="<?php echo e(url('public')); ?>/logo.png" 
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"> SIBAMIDA</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(url('public')); ?>/logo.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo e(url('opd')); ?>" class="d-block">
                    <?php echo e(Auth::guard('opd')->user()->singkatan); ?>

                </a>
            </div>
        </div>



        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="<?php echo e(url('opd')); ?>" class="nav-link <?php echo e(checkRouteActive('opd')); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('opd/pegawai')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/pegawai')); ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('opd/kategori')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/kategori')); ?>">
                        <i class="nav-icon fa fa-list "></i>
                        <p>Data Kategori Aset</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('opd/bidang')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/bidang')); ?>">
                        <i class="nav-icon fa fa-list "></i>
                        <p>Data Bidang</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('opd/ruangan')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/ruangan')); ?>">
                        <i class="nav-icon fa fa-list "></i>
                        <p>Data Ruangan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?php echo e(url('opd/master/jembatan-jalan')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/master/jembatan-jalan')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Jembatan dan Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('opd/master/peralatan-mesin')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/master/peralatan-mesin')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Peralatan dan Mesin</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('opd/master/bangunan')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/master/bangunan')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Bangunan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('opd/master/tanah')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/master/tanah')); ?>">
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
<?php /**PATH E:\Sistem\sibamida\system\resources\views/components/section/opd/sidebar.blade.php ENDPATH**/ ?>