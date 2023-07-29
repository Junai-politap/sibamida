<?php $__env->startSection('title', 'Lihat Berita Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Lihat Berita',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <img src="<?php echo e(url("public/$berita->gambar")); ?>" alt="" class="img-fluid">
                    <div class="title text-justify h4"><?php echo e($berita->title); ?></div>
                    <p>
                        <?php echo nl2br($berita->detail); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
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

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/home/berita/showberita.blade.php ENDPATH**/ ?>