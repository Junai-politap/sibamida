<?php $__env->startSection('title', 'Berita Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Berita',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $list_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 col-md-6 mb-4 mt-5">
                        <div class="course-1-item">
                            <figure class="thumnail">
                                <a href="<?php echo e(url("berita-show/$berita->id_berita")); ?>">
                                    <img src="<?php echo e(url("public/$berita->gambar")); ?>" alt="Image" class="img-fluid">
                                    <div class="price"><?php echo e($berita->created_at->format('d F Y')); ?></div>
                                    <br>
                                    <div class="category">
                                        <h3 class="text-white"><?php echo e($berita->nama_berita); ?></h3>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\informatika\system\resources\views/home/berita/index.blade.php ENDPATH**/ ?>