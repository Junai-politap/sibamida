<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <h5 class="card-header text-center">Edit Pelayanan</h5>
        <div class="card-body">
            <form id="form" data-parsley-validate="" action="<?php echo e(url('update-pelayanan', $pelayanan->id_pelayanan)); ?>"
                method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-left">Nama Jenis Pelayanan</label>
                    <div class="col-lg-9">
                        <select name="id_jenis_pelayanan" id="" class="form-control">
                            <?php $__currentLoopData = $list_jenis_pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_pelayanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($jenis_pelayanan->id_jenis_pelayanan == $pelayanan->id_jenis_pelayanan): ?> selected <?php endif; ?>
                                    value="<?php echo e($jenis_pelayanan->id_jenis_pelayanan); ?>">
                                    <?php echo e($jenis_pelayanan->nama_jenis_pelayanan); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-left">Nama Pelayanan</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="nama_pelayanan"
                            value="<?php echo e($pelayanan->nama_pelayanan); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-left">Detail Berita</label>
                    <div class="col-lg-9">
                        <textarea name="detail" class="summernote"><?php echo nl2br($pelayanan->detail); ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">File</label>
                    <div class="col-md-4">
                        <embed src="<?php echo e(url("public/$pelayanan->file")); ?>" type=""
                            style="object-fit: cover; position: static; width: 100%; height: 200px;">

                    </div>

                    <div class="col-md-5">
                        <input type="file" class="form-control" id="inlineinput" name="file"
                            accept="application/pdf, application/vnd.ms-excel" value="<?php echo e($pelayanan->file); ?>">
                    </div>
                </div>
                <div class="row pt-2 pt-sm-5 mt-1">

                    <div class="col-sm-12 pl-0">
                        <p class="text-right">
                            <button class="btn btn-space btn-secondary"><span class="fa fa-times"></span> Cancel</button>
                            <button type="submit" class="btn btn-space btn-primary"><span class="fa fa-save"></span>
                                Simpan</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/admin/pelayanan/edit.blade.php ENDPATH**/ ?>