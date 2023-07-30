<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
    <h5 class="card-header">Edit Data Survei</h5>
    <div class="card-body">
        <form id="form" data-parsley-validate="" action="<?php echo e(url('update-survei', $survei->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group row">
                <label class="col-3 col-lg-2 col-form-label text-left"> Jenis Survei</label>
                <div class="col-9 col-lg-10">
                    <select name="jenis_survei" class="form-control">
                        <option value="Mahasiswa" <?php if($survei->jenis_survei == 'Mahasiswa'): ?> selected <?php endif; ?>>Mahasiswa
                        </option>
                        <option value="Tenaga Pendidik/Dosen" <?php if($survei->jenis_survei == 'Tenaga Pendidik/Dosen'): ?> selected <?php endif; ?>>Tenaga
                            Pendidik/Dosen
                        </option>
                        <option value="Tenaga Pendidik/Teknisi" <?php if($survei->jenis_survei == 'Tenaga Pendidik/Teknisi'): ?> selected <?php endif; ?>>Tenaga
                            Pendidik/Teknisi
                        </option>
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-3 col-lg-2 col-form-label text-left">Judul</label>
                <div class="col-9 col-lg-10">
                    <input type="text" class="form-control" name="judul" value="<?php echo e($survei->judul); ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3 col-lg-2 col-form-label text-left">Judul</label>
                <div class="col-9 col-lg-10">
                    <input type="date" class="form-control" name="tanggal" value="<?php echo e($survei->tanggal); ?>">
                </div>
            </div>


            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">File</label>
                <div class="col-md-4">
                    <embed src="<?php echo e(url("public/$survei->file")); ?>" type="application/pdf" style="width: 80%; height: 600px;">
                </div>

                <div class="col-md-6">
                    <input type="file" class="form-control" id="inlineinput" name="file" accept="application/pdf" value="<?php echo e($survei->file); ?>">
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
<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/survei/edit.blade.php ENDPATH**/ ?>