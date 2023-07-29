<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="top-bar clearfix">
                    <div class="top-left-content clearfix float-left">
                        <p><span class="fa fa-graduation-cap"></span>Selamat Datang di Prodi Teknologi Informasi</a></p>
                    </div>
                    <div class="top-right-content clearfix float-right">
                        <div class="top-social-box">
                            <ul class="social-links">
                                <li><a href="https://www.youtube.com/@teknikinformatikapolitap9268/" target="_blank"
                                        title="Youtube Prodi"><span class="fa fa-youtube" aria-hidden="true"></span></a></li>
                                <li><a href="https://www.instagram.com/informatika.politap/" target="_blank"
                                        title="Instagram Prodi"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                                </li>

                            </ul>
                        </div>

                        <div class="language-switcher float-right">
                            <div id="jam" style="color: white; font-size: 150%">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<header class="header-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="inner-content clearfix">
                    <div class="header-left float-left" style="width: 17%;">
                        <div class="logo">
                            <a href="<?php echo e(url('/')); ?>">
                                <img src="<?php echo e(url('public')); ?>/home/bg.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle clearfix float-left">
                        <nav class="main-menu clearfix float-left">
                            <div class="navbar-header clearfix">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current" style="color: black"><a href="<?php echo e(url('/')); ?>">Dashboard</a>
                                    </li>

                                    <li class="dropdown"><a href="#">Profil</a>
                                        <ul>
                                            <li><a href="<?php echo e(url('profil-pimpinan')); ?>"> Pimpinan</a></li>
                                            <li><a href="<?php echo e(url('profil-dosen')); ?>"> Dosen</a></li>
                                            <li><a href="<?php echo e(url('profil-staff')); ?>"> Teknisi / Administrasi</a></li>
                                            <li><a href="<?php echo e(url('profil-lulusan')); ?>"> Profil Lulusan</a></li>
                                            <li><a href="<?php echo e(url('visi-misi')); ?>"> Visi & Misi</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Akademik</a>
                                        <ul>
                                            <li><a href="<?php echo e(url('kurikulum')); ?>"> Kurikulum</a></li>
                                            <li><a href="<?php echo e(url('akreditasi')); ?>"> Akreditasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pelayanan</a>
                                        <ul>
                                            <?php echo $__env->yieldContent('menu'); ?>

                                            <li><a href="<?php echo e(url('pelayanan/survei')); ?>"> Survei Kepuasan</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pedoman</a>
                                        <ul>
                                            <?php echo $__env->yieldContent('pedoman'); ?>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Fasilitas</a>
                                        <ul>
                                            <?php echo $__env->yieldContent('fasilitas'); ?>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Project</a>
                                        <ul>
                                            <li><a href="<?php echo e(url('project/pbl')); ?>"> PBL</a></li>
                                            <li><a href="<?php echo e(url('project/tugas-akhir')); ?>"> Tugas Akhir</a></li>
                                            <li><a href="<?php echo e(url('project/penelitian')); ?>"> Penelitian Dosen</a></li>
                                            <li><a href="<?php echo e(url('project/pengabdian')); ?>"> Pengabdian Dosen</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo e(url('berita')); ?>">Berita</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<?php $__env->startPush('script'); ?>
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
<?php $__env->stopPush(); ?>
<?php /**PATH /data/www/teknologiinformasi/system/resources/views/layout/home/header.blade.php ENDPATH**/ ?>