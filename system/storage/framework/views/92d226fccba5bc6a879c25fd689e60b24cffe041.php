<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <?php echo csrf_field(); ?>
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        <img src="<?php echo e(url("public/$berita->gambar")); ?>" class="product-image" alt="Product Image"
                            style="object-fit: cover; position: static; width: 100%; height: 80%;">
                    </div>

                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?php echo e($berita->nama_berita); ?></h3>
                    <hr>
                    <p>
                        <?php echo nl2br($berita->detail); ?>

                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/admin/berita/show.blade.php ENDPATH**/ ?>