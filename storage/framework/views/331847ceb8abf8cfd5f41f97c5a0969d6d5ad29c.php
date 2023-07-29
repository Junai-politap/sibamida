

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>


    <div class="card"><br>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <?php if($mahasiswa->foto == $mahasiswa->foto): ?>
                            <img style="width: 50%" src="<?php echo e(url("public/$mahasiswa->foto")); ?>" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" alt="avatar"
                            class="rounded">
                        <?php endif; ?>
                        <h5 class="my-3"><?php echo e($mahasiswa->nama); ?></h5>
                        <h5 class="my-3"><?php echo e($mahasiswa->nim); ?></h5>
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
                                <p class="text-muted mb-0"><?php echo e($mahasiswa->nik); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Username</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($mahasiswa->username); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($mahasiswa->jenis_kelamin); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Agama</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($mahasiswa->agama); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Tempat, Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($mahasiswa->tempat_lahir); ?>, <?php echo e(date("d-m-Y", strtotime($mahasiswa->tanggal_lahir))); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($mahasiswa->alamat); ?></p>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">No Hp</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($mahasiswa->hp); ?></p>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?php echo e($mahasiswa->email); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/admin/mahasiswa/show.blade.php ENDPATH**/ ?>