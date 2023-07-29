<?php $__env->startSection('title', 'Struktur Organisasi Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Struktur Organisasi',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5">
                    <img src="<?php echo e(url('public/home')); ?>/frontend/images/struktur-organisasi.jpg" alt="Image"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/home/profil/struktur-organisasi.blade.php ENDPATH**/ ?>