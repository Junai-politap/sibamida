<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="<?php echo e(url('page-admin')); ?>" class="brand-link">
        <img src="<?php echo e(url('public/admin')); ?>/logo.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">INFORMATIKA</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(url('public/admin')); ?>/logo.ico" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> Super Admin</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Profil Prodi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Profil Prodi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Visi Misi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Struktur Organisasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Profil Pimpinan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Profil Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Staff dan Teknisi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Akademik
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(url('page-kurikulum')); ?>" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Kurikulum</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('page-silabus')); ?>" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Silabus</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Informatika Dalam Angka</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Akreditasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Kalender Akademik</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Fasilitas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Workspace</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Ruang Sidang</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="<?php echo e(url('page-pelayanan')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Pelayanan
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Pedoman
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a href="<?php echo e(url('page-galeri')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-camera"></i>
                        <p>
                            Galeri
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a href="<?php echo e(url('page-berita')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="<?php echo e(url('logout')); ?>"
                        class="nav-link">
                        <i class="nav-icon fa fa-arrow-left spin"></i>
                        <p>
                            Loguot
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
    </div>
</aside>
<?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/layout/admin/sidebar.blade.php ENDPATH**/ ?>