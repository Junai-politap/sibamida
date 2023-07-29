<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="py-2"></div>
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="d-flex align-items-center" style="width: 115%; margin-left: -10%">
            <div class="site-logo">
                <a href="<?php echo e(url('/')); ?>" class="d-block">
                    <img src="<?php echo e(url('public/home')); ?>/frontend/images/logo.png" alt="Image" class="img-fluid"
                        width="200">
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li>
                            <a href="<?php echo e(url('/')); ?>" class="nav-link text-left">Beranda</a>
                        </li>
                        <li class="has-children">
                            <a href="#" class="nav-link text-left">Profil Prodi</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="<?php echo e(url('prodi')); ?>">
                                        Profil Prodi
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('visi-misi')); ?>">
                                        Visi Misi
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('struktur-organisasi')); ?>">
                                        Struktur Organisasi
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('profil-pimpinan')); ?>">
                                        Profil Pimpinan
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('profil-dosen')); ?>">
                                        Profil Dosen
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('staff')); ?>">
                                        Staff dan Teknisi
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#" class="nav-link text-left">Akademik</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="<?php echo e(url('kurikulum')); ?>">
                                        Kurikulum
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('informatika-dalam-angka')); ?>">
                                        Informatika Dalam Angka
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('akreditasi')); ?>">
                                        Akreditasi
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('kalender-akademik')); ?>">
                                        Kalender Akademik
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="has-children">
                            <a href="#" class="nav-link text-left">Pelayanan</a>
                            <ul class="dropdown">
                                <?php echo $__env->yieldContent('menu'); ?>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="#" class="nav-link text-left">Fasilitas</a>
                            <ul class="dropdown">
                                <li class="has-children">
                                    <a href="#">
                                        Workspace
                                    </a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href=""> Rekayasa Perangkat Lunak</a>
                                        </li>
                                        <li>
                                            <a href=""> Web Programming</a>
                                        </li>
                                        <li>
                                            <a href=""> Web & Mobile Programming</a>
                                        </li>
                                        <li>
                                            <a href=""> PBL 1</a>
                                        </li>
                                        <li>
                                            <a href=""> PBL 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">
                                        Ruang Sidang
                                    </a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href=""> Rekayasa Perangkat Lunak</a>
                                        </li>
                                        <li>
                                            <a href=""> PBL 1</a>
                                        </li>
                                        <li>
                                            <a href=""> Web & Mobile Programming</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="#" class="nav-link text-left">Pedoman</a>
                            <ul class="dropdown">
                                <li class="has-children">
                                    <a href="">
                                        Akademik
                                    </a>
                                    <ul class=" dropdown">
                                        <li>
                                            <a href=""> Pedoman Tugas Akhir</a>
                                        </li>
                                        <li>
                                            <a href=""> Pedoman PKL</a>
                                        </li>
                                        <li>
                                            <a href=""> Pedoman PBL</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('informatika-dalam-angka')); ?>">
                                        Non Akademik
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li>
                            <a href="<?php echo e(url('galeri')); ?>" class="nav-link text-left">Galeri</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('berita')); ?>" class="nav-link text-left">Berita</a>
                        </li>
                        <li class="d-lg-none d-block">
                            <a href="https://www.facebook.com/informatikapolitap" target="_blank"
                                class="nav-link text-left"><i class="icon-facebook"></i> Facebook</a>
                        </li>
                        <li class="d-lg-none d-block">
                            <a href="https://www.instagram.com/informatika.politap" target="_blank"
                                class="nav-link text-left"><i class="icon-instagram"></i> Instagram</a>
                        </li>
                        <li class="d-lg-none d-block">
                            <a href="<?php echo e(url('berita')); ?>" class="nav-link text-left"><i class="icon-unlock-alt"></i>
                                Login</a>
                        </li>
                    </ul>
                    </ul>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="social-wrap">
                    <a href="https://www.facebook.com/informatikapolitap" target="_blank" title="Facebook"
                        class="d-none d-lg-inline-block"><span class="icon-facebook"></span></a>
                    <a href="https://www.instagram.com/informatika.politap" target="_blank" title="Instagram"
                        class="d-none d-lg-inline-block"><span class="icon-instagram"></span></a>
                    <a href="#" title="Menu"
                        class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH D:\xampp\htdocs\informatika\system\resources\views/layout/home/header.blade.php ENDPATH**/ ?>