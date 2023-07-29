

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>


    <div class="card"><br>
        <div class="header">
            <a href="<?php echo e(url('page-pegawai')); ?>" class="btn btn-info"><span class="fa fa-arrow-left"></span> Kembali</a>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <?php if($pegawai->foto == $pegawai->foto): ?>
                            <img style="width: 100%" src="<?php echo e(url("public/$pegawai->foto")); ?>"
                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" alt="avatar"
                                class="rounded">
                        <?php endif; ?>
                        <h2 class="my-3"><?php echo e($pegawai->jabatan); ?></h2>
                        <h4 class="my-3"><?php echo e($pegawai->nama_lengkap); ?></h4>
                        <h4 class="my-3"><?php echo e($pegawai->nip); ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">NIK</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($pegawai->nik); ?></p>
                            </div>
                        </div>
                        <hr>

                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($pegawai->jenis_kelamin); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Agama</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($pegawai->agama); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Tempat, Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($pegawai->tempat_lahir); ?>,
                                    <?php echo e(date('d-m-Y', strtotime($pegawai->tanggal_lahir))); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($pegawai->alamat); ?></p>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">No Hp</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($pegawai->hp); ?></p>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($pegawai->email); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/pegawai/show.blade.php ENDPATH**/ ?>