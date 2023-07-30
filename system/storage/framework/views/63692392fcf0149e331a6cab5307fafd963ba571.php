<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <?php echo csrf_field(); ?>
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        <img src="<?php echo e(url("public/$galeri->gambar")); ?>" class="product-image" alt="Product Image"
                            style="object-fit: cover; position: static; width: 100%; height: 80%;">
                    </div>
                    <div class="col-12 product-image-thumbs">
                        <?php $__currentLoopData = $list_dt_galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt_galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($dt_galeri->id_galeri == $galeri->id_galeri): ?>
                                <div class="product-image-thumb active"><img src="<?php echo e(url("public/$dt_galeri->gambar")); ?>"
                                        alt="Product Image">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?php echo e($galeri->nama_galeri); ?></h3>
                    <hr>
                    <p>
                        <?php echo nl2br($galeri->detail); ?>

                    </p>
                    <hr>
                    <h4>Tambah Gambar</h4>
                    <div class="py-2 px-3 mt-2">
                        <form action="<?php echo e(url('store-dt-galeri')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="file" class="form-control" name="gambar" accept=".jpg, .png, .jpeg">
                            <input type="text" name="id_galeri" value="<?php echo e($galeri->id_galeri); ?>" hidden>
                            <button class="btn btn-primary btn-lg btn-flat mt-4"><span class="fa fa-upload"></span>
                                Upload</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/admin/galeri/show.blade.php ENDPATH**/ ?>