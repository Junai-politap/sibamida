
<?php $__env->startSection('title', 'Visi Misi Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Visi & Misi',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="choosing-area">
        <div class="container">
            <div class="approach-content-box">
                <div class="row">
                    <?php $__currentLoopData = $list_visimisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visimisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-12">
                            <div class="text">

                            </div>
                            <div class="accordion-holder style-one">
                                <article class="accordion">
                                    <div class="acc-btn active">
                                        <div class="toggle-icon"><span class="icon-layers"></span></div>
                                        <h3><?php echo e($visimisi->label); ?></h3>
                                    </div>
                                    <div class="acc-content">
                                        <div class="inner">
                                            <p>
                                                <?php echo nl2br($visimisi->isi); ?>

                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/profil/visi-misi.blade.php ENDPATH**/ ?>