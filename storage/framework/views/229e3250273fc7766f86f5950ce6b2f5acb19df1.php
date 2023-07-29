
<?php $__env->startSection('title', 'Ruang Sidang Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Ruang Sidang',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="services-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title">Data Ruangan Sidang</div>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="row">
                
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="single-service-item">
                            <div class="inner-content">
                                <div class="img-holder">
                                    <img src="<?php echo e(url('public/home')); ?>/images/1.jpg" alt="Awesome Image">
                                </div>
                                <div class="title-holder">
                                    <div class="icon"><span class="icon-man thm-clr"></span></div>
                                    <h3>Laboratorium Programing</h3>
                                </div>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/home/fasilitas/ruang-sidang.blade.php ENDPATH**/ ?>