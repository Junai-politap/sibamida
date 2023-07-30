<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <?php echo csrf_field(); ?>
                <div class="col-12 col-sm-12">
                    <h3 class="my-3 text-center"><?php echo e($survei->judul); ?></h3>
                    <hr>
                </div>
                <div class="col-12 col-sm-12">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        <embed src="<?php echo e(url("public/$survei->file")); ?>" class="product-image" 
                            style="object-fit: cover; position: static; width: 100%; height: 700px;" type="application/pdf">
                    </div>

                </div>
               
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/survei/show.blade.php ENDPATH**/ ?>