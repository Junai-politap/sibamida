<?php $__env->startSection('title', 'Lihat Berita Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Lihat Berita',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .text {
            text-align: left;
            font-family: roboto;
            font-size: 20px;
            color: black;
            text-indent: 50px;
            line-height: 155%;
        }
    </style>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="blog-area" class="blog-large-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-shop-content">
                        <div class="sec-title">
                            <p style="text-align: left; font-family: roboto; font-size: 24px; color: black">
                                <strong>
                                    <?php echo e($berita->nama_berita); ?>

                                </strong>
                            </p>
                            <div class="left">
                                <p>Tanggal Kegiatan : <?php echo e(date('d-M-Y', strtotime($berita->tanggal_kegiatan))); ?> </p>
                            </div>
                        </div>
                        <div class="row" style="margin-top:-5%;">
                            <div class="col-md-12">
                                <img src="<?php echo e(url("public/$berita->gambar")); ?>" alt="" class="img">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                <div class="title">
                                    <p class="text">
                                        <?php echo nl2br($berita->detail); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-8 col-md-7 col-sm-12 float-left">
                    <div class="sidebar-wrapper">
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Berita Terbaru</h3>
                            </div>
                            <ul class="latest-product">
                                <?php $__currentLoopData = $list_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($berita->status == 1): ?>
                                        <li>
                                            <div class="img-holder">
                                                <img src="<?php echo e(url("public/$berita->gambar")); ?>" alt="Awesome Image">
                                                <div class="overlay-style-one">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="<?php echo e(url("berita-show/$berita->id")); ?>"><i
                                                                    class="fa fa-link" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-holder">
                                                <a href="<?php echo e(url("berita-show/$berita->id")); ?>">
                                                    <h4><?php echo e($berita->nama_berita); ?></h4>
                                                </a>
                                                <h5>
                                                    <?php echo e(date('d-M-Y', strtotime($berita->tanggal_kegiatan))); ?>

                                                </h5>

                                            </div>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        function changePicture(url) {
            $("#img-container").attr("src", url);
        }
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .title {
            margin-top: 50px;
            font-size: 28px;
            color: black;
            font-weight: 800;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/berita/show-berita.blade.php ENDPATH**/ ?>