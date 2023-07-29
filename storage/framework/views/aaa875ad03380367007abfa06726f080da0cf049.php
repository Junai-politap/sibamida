
<?php $__env->startSection('title', 'Pedoman - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => ' Pedoman Akademik',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="single-service-area">
        <div class="pattern-box"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="content-box">
                        <?php
                            $no = 1;
                        ?>
                        <div class="planning-strategies-content">
                            <?php $__currentLoopData = $list_pedoman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedoman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>

                                    <p style="color: black"><?php echo e($no++); ?>.
                                        <a style="color: black"
                                            href="<?php echo e(url("public/$pedoman->file_word")); ?>"><?php echo e($pedoman->nama_pedoman); ?></a>
                                        | <a style="color: black" href="<?php echo e(url("public/$pedoman->file_pdf")); ?>"
                                            target="_blank">File PDF</a>
                                    </p>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/home/pedoman/akademik.blade.php ENDPATH**/ ?>