<?php $__env->startSection('title', 'Galeri Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Galeri',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $list_galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="course-1-item">
                            <figure class="thumnail">
                                <a href="<?php echo e(url("galeri-show/$galeri->id_galeri")); ?>"><img
                                        src="<?php echo e(url("public/$galeri->gambar")); ?>" alt="Image" class="img-fluid"></a>
                                <div class="price"><?php echo e($galeri->created_at->format('d F Y')); ?></div>
                                <div class="category">
                                    <h3><a href="<?php echo e(url("galeri-show/$galeri->id_galeri")); ?>"
                                            class="text-white"><?php echo e($galeri->nama_galeri); ?>

                                    </h3></a>
                                </div>
                            </figure>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/home/galeri/index.blade.php ENDPATH**/ ?>