<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <h5 class="card-header">Edit Mata Kuliah</h5>
        <div class="card-body">
            <form id="form" data-parsley-validate="" action="<?php echo e(url('update-mata-kuliah', $matakuliah->id)); ?>"
                method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Kode Matakuliah</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="kode" value="<?php echo e($matakuliah->kode); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Nama Matakuliah</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="nama" value="<?php echo e($matakuliah->nama); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-left">Semester</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="semester" value="<?php echo e($matakuliah->semester); ?>">
                    </div>
                    <label class="col-md-2 col-form-label text-center"> Kurikulum</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="kurikulum" value="<?php echo e($matakuliah->kurikulum); ?>">
                    </div>
                    <label class="col-md-2 col-form-label text-center"> SKS</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="sks" value="<?php echo e($matakuliah->sks); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-left">Jenis Matakuliah</label>
                    <div class="col-md-2">
                        <select name="jenis_mk" class="form-control">
                            <option value="1" <?php if($matakuliah->jenis_mk == '1'): ?> selected <?php endif; ?>> Teori</option>
                            <option value="2" <?php if($matakuliah->jenis_mk == '2'): ?> selected <?php endif; ?>> Praktikum</option>
                            <option value="3" <?php if($matakuliah->jenis_mk == '3'): ?> selected <?php endif; ?>> Teori - Praktikum</option>
                        </select>
                    </div>
                    <label class="col-md-2 col-form-label text-center"> Jam Teori</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="jam_teori" value="<?php echo e($matakuliah->jam_teori); ?>">
                    </div>
                    <label class="col-md-2 col-form-label text-center"> Jam Praktikum</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="jam_praktikum"
                            value="<?php echo e($matakuliah->jam_praktikum); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">TIU</label>
                    <div class="col-9 col-lg-10">
                        <textarea name="tiu" class="summernote"><?php echo e($matakuliah->tiu); ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Bahasan</label>
                    <div class="col-9 col-lg-10">
                        <textarea name="bahasan" class="summernote"><?php echo e($matakuliah->bahasan); ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left"> Referensi</label>
                    <div class="col-9 col-lg-10">
                        <textarea name="referensi" class="summernote"><?php echo e($matakuliah->referensi); ?></textarea>
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/kurikulum/edit.blade.php ENDPATH**/ ?>