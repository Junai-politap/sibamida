<?php $__env->startSection('title', 'Staff dan Teknisi Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Profil Staff dan Teknisi',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="site-section site-blocks-cover">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 mb-5 mb-lg-5">

                    <div class="feature-1 border person text-center">
                        <img src="<?php echo e(url('public/home')); ?>/frontend/images/dosen/rosi.jpeg" alt="Image"
                            class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Rosi Arrasyid, A.Md</h2>
                            <span class="position mb-3 d-block">Teknisi Laboratorium</span>
                            <span class="icon-envelope"></span> <a
                                href="mailto:rossiarrasyid@politap.ac.id">rossiarrasyid@politap.ac.id</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="<?php echo e(url('public/home')); ?>/frontend/images/dosen/nita.jpg" alt="Image"
                            class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Yunita, A.Md</h2>
                            <span class="position mb-3 d-block">Staff Administrasi</span>
                            <span class="icon-envelope"></span> <a
                                href="mailto:yunita@politap.ac.id">yunita@politap.ac.id</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .person img {
            width: 150px;
            height: 150px;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/home/profil/staff.blade.php ENDPATH**/ ?>