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
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(url('opd/ruangan')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/ruangan')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Data Ruangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('opd/kategori')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/kategori')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Data Kategori Aset</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('opd/aset')); ?>" class="nav-link <?php echo e(checkRouteActive('opd/aset')); ?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Data Aset</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<?php /**PATH E:\Sistem\sibamida\resources\views/components/section/opd/sidebar.blade.php ENDPATH**/ ?>