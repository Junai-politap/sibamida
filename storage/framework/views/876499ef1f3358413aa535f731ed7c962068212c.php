<?php $__env->startSection('title', 'Pelayanan Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Pelayanan',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $list_pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelayanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($pelayanan->id_jenis_pelayanan == $jenis_pelayanan->id): ?>
                        <div class="col-md-8 mb-4">
                            <p>
                                <embed src="<?php echo e(url("public/$pelayanan->file")); ?>" type=""
                                    style="object-fit: cover; position: static; width: 100%;" height="350px">
                            </p>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <h2 class="section-title-underline mb-5">
                                <span><?php echo e($pelayanan->nama_pelayanan); ?></span>
                            </h2>

                            <p><strong class="text-black d-block"></strong></p>
                            <p><strong class="text-black d-block"> <?php echo nl2br($pelayanan->detail); ?></strong> </p>

                            <a href="<?php echo e(url("public/$pelayanan->file")); ?>" class="btn btn-primary" target="_blank"><i
                                    class="fa fa-download"></i> Download</a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/teknologiinformasi/system/resources/views/home/pelayanan/show-pelayanan.blade.php ENDPATH**/ ?>