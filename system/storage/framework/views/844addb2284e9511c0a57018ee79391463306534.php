<?php $__env->startSection('title', 'Detail Galeri Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Detail Galeri',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p>
                        <img src="<?php echo e(url("public/$galeri->gambar")); ?>" alt="Image" class="img-fluid"
                            id="img-container">
                    </p>
                    <div class="row">
                        <?php $__currentLoopData = $list_dt_galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt_galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-4 mb-5">
                                <img src="<?php echo e(url("public/$dt_galeri->gambar")); ?>" alt="" class="img-fluid"
                                    onclick="changePicture('<?php echo e(url("public/$dt_galeri->gambar")); ?>')">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-title-underline mb-5">
                        <span>Detail Kegiatan</span>
                    </h2>

                    <p class="text-justify"><strong class="text-black d-block">Nama Kegiatan:</strong>
                        <?php echo e($galeri->nama_galeri); ?></p>
                    <p class="mb-5"><strong class="text-black d-block">Waktu Kegiatan:</strong>
                        <?php echo e(date('d-m-Y', strtotime($galeri->created_at))); ?> </p>

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

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/home/galeri/show-galeri.blade.php ENDPATH**/ ?>