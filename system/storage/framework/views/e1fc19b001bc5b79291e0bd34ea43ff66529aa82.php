<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <h5 class="card-header">Edit Tugas Akhir</h5>
        <div class="card-body">
            <form id="form" data-parsley-validate="" action="<?php echo e(url('update-tugas-akhir', $tugas_akhir->id)); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">NIM Mahasiswa</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="nim" value="<?php echo e($tugas_akhir->nim); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Nama Mahasiswa</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="nama_mahasiswa" value="<?php echo e($tugas_akhir->nama_mahasiswa); ?>">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Judul Tugas Akhir</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="judul" value="<?php echo e($tugas_akhir->judul); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Tahun Masuk</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="tahun_masuk" value="<?php echo e($tugas_akhir->tahun_masuk); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Tahun Angkatan</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="tahun_angkatan" value="<?php echo e($tugas_akhir->tahun_angkatan); ?>">
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/project/tugas-akhir/edit.blade.php ENDPATH**/ ?>