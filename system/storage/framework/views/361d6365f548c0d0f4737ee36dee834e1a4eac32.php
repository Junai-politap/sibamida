<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="top-bar clearfix">
                    <div class="top-left-content clearfix float-left">
                        <p><span class="fa fa-graduation-cap"></span>Selamat Datang di Prodi Teknologi Informasi</a></p>
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
                    <div class="header-left float-left" style="width: 13%;">
                        <div class="logo" >
                            <a href="#">
                                <img src="<?php echo e(url('public/home')); ?>/bg.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle clearfix float-left">
                        <nav class="main-menu clearfix float-left">
                            <div class="navbar-header clearfix">   	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="<?php echo e(url('/')); ?>/">Dashboard</a></li>
                                    <li class="dropdown"><a href="#">Profil</a>
                                        <ul>
                                            <li><a href="<?php echo e(url('pimpinan')); ?>"> Pimpinan</a></li>
                                            <li><a href="<?php echo e(url('dosen')); ?>"> Dosen</a></li>
                                            <li><a href="<?php echo e(url('staff')); ?>"> Teknisi / Administrasi</a></li>

                                            <li><a href="<?php echo e(url('visi-misi')); ?>"> Visi & Misi</a></li>
                                            <li><a href="<?php echo e(url('profil-lulusan')); ?>"> Profil Lulusan</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Akademik</a>
                                        <ul>
                                            <li><a href="<?php echo e(url('kurikulum')); ?>"> Kurikulum</a></li>
                                            <li><a href="<?php echo e(url('akreditasi')); ?>"> Akreditasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="blog.html">Pelayanan</a>
                                        <ul>
                                            <?php echo $__env->yieldContent('menu'); ?>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pedoman</a>
                                        <ul>
                                            <?php echo $__env->yieldContent('pedoman'); ?>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Fasilitas</a>
                                        <ul>
                                            <li><a href="<?php echo e(url('workspace')); ?>"> Workspace</a>
                                               
                                            </li>
                                            <li><a href="<?php echo e(url('ruang-riset')); ?>"> Research and Development</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Project</a>
                                        <ul>
                                            <li><a href="<?php echo e(url('#')); ?>"> PBL</a></li>
                                            <li><a href="<?php echo e(url('#')); ?>"> Tugas Akhir</a></li>
                                            <li><a href="<?php echo e(url('#')); ?>"> Penelitian Dosen</a></li>
                                            <li><a href="<?php echo e(url('#')); ?>"> Pengabdian Dosen</a></li>
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
<?php /**PATH /data/teknologiinformasi/system/resources/views/layout/home/header.blade.php ENDPATH**/ ?>