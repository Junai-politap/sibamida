<?php $__env->startSection('title', 'Lihat Berita Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Lihat Berita',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="blog-area" class="blog-large-area">
        <div class="container">
            <div class="sec-title text-center">
                <p class="title"><?php echo e($berita->nama_berita); ?></p>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="row">
                
                <div class="col-md-6 mx-auto">
                    <img src="<?php echo e(url("public/$berita->gambar")); ?>" alt="" class="img-fluid">                
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <h5 style="text-align: justify">
                        <?php echo nl2br($berita->detail); ?>

                    </h5>
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

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/teknologiinformasi/system/resources/views/home/berita/show-berita.blade.php ENDPATH**/ ?>