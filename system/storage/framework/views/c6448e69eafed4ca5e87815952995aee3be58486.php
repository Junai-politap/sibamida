

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Fasilitas</strong></h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?php echo e(url('update-fasilitas', $fasilitas->id)); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Fasilitas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_fasilitas" value="<?php echo e($fasilitas->nama_fasilitas); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Detail</label>
                            <div class="col-sm-9">
                                <textarea name="detail_fasilitas" class="summernote"><?php echo e($fasilitas->detail_fasilitas); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Fasilitas</label>
                            <div class="col-sm-9">
                                <select name="id_jenis_fasilitas" class="form-control">
                                    <?php $__currentLoopData = $list_jenis_fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_fasilitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($jenis_fasilitas->id == $fasilitas->id_jenis_fasilitas): ?> selected <?php endif; ?>
                                            value="<?php echo e($jenis_fasilitas->id); ?>">
                                            <?php echo e($jenis_fasilitas->nama); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                            <div class="col-md-4">
                                <img style="width: 100%; height: 100%" src="<?php echo e(url("public/$fasilitas->foto")); ?>">
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <input class="custom-file-input" type="file" name="foto" accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Pas Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>
                        Close</button>
                    <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/fasilitas/edit.blade.php ENDPATH**/ ?>