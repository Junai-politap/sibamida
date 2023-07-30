<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="top-bar clearfix">
                    <!--Start top left content-->
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
                    <div class="header-left float-left" style="width: 20%;">
                        <div class="logo" >
                            <a href="index.html">
                                <img src="<?php echo e(url('home')); ?>/bg.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle clearfix float-left">
                        <!--Start mainmenu-->
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
                                    <li class="current"><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
                                    <li class="dropdown"><a href="#">Prodi</a>
                                        <ul>
                                            <li><a href="#">Teknik Informatika</a></li>
                                            <li><a href="#"> Teknik Elektro</a></li>
                                            
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
                                            <li><a href="">Akademik</a>
                                            </li>
                                            <li><a href="">Non Akademik</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo e(url('berita')); ?>">Berita</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!--End mainmenu-->    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header> <?php /**PATH C:\laragon\www\informatika\resources\views/layout/home/header.blade.php ENDPATH**/ ?>