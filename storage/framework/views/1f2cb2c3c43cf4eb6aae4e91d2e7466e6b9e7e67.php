

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card card-solid">
        <div class="card-body">
            <div class="row">

                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        <img src="<?php echo e(url("public/$fasilitas->foto")); ?>" class="product-image" alt="Product Image"
                            style="object-fit: cover; position: static; width: 100%; height: 80%;">
                    </div>
                    <div class="col-md-6 product-image-thumbs">
                        <?php $__currentLoopData = $list_galery_fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galery_fasilitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($galery_fasilitas->id_fasilitas == $fasilitas->id): ?>
                                <div class="product-image-thumb">
                                    <img src="<?php echo e(url("public/$galery_fasilitas->foto")); ?>"
                                        style="object-fit: cover; position: static; width: 100%; height: 100%;">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?php echo e($fasilitas->nama_fasilitas); ?></h3>
                    <hr>
                    <p>
                        <?php echo nl2br($fasilitas->detail_fasilitas); ?>

                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Tambah Gambar</h4>
                            <div class="py-2 px-3 mt-2">
                                <form action="<?php echo e(url('store-galery')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg"
                                        required>
                                    <input type="text" name="id_fasilitas" value="<?php echo e($fasilitas->id); ?>" hidden>
                                    <button class="btn btn-primary mt-4"><span class="fa fa-upload"></span>
                                        Upload</button>
                                </form>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <h4>Link Video</h4>
                            <div class="py-2 px-3 mt-2">
                                <form action="<?php echo e(url('store-video')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <textarea name="link" class="form-control"></textarea>
                                    <input type="text" name="id_fasilitas" value="<?php echo e($fasilitas->id); ?>" hidden>
                                    <button class="btn btn-primary mt-4"><span class="fa fa-upload"></span>
                                        Upload</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div><br>
            <div class="row">

                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        <?php $__currentLoopData = $list_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($video->id_fasilitas == $fasilitas->id): ?>
                                <?php echo nl2br($video->link); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/admin/fasilitas/show.blade.php ENDPATH**/ ?>