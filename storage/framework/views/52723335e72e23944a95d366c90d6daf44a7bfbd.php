<?php $__env->startSection('title', 'Akreditasi Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Akreditasi',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p>
                        <img src="<?php echo e(url('public/home')); ?>/frontend/images/sertifikat_akreditasi.jpg" alt="Image"
                            class="img-fluid" id="img-container">
                    </p>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-title-underline mb-5">
                        <span>Akreditasi Program Studi <br>DII Teknologi Informasi</span>
                    </h2>

                    <p><strong class="text-black d-block"></strong></p>
                    <p><strong class="text-black d-block">Tanggal Akreditasi</strong> 30 Oktober 2018 </p>
                    <p class="mb-5"><strong class="text-black d-block">Masa Berlaku</strong> 30 Oktober 2023 </p>

                    <a href="<?php echo e(url('public/home')); ?>/frontend/file/sertifikat_akreditasi.pdf" class="btn btn-primary"><i
                            class="fa fa-download"></i> Download</a>
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

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/home/akademik/akreditasi.blade.php ENDPATH**/ ?>