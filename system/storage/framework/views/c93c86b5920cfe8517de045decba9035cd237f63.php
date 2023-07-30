<?php $__env->startSection('title', 'Dosen Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => ' Dosen',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br><br>

    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pegawai->jabatan == 'Ketua Jurusan'): ?>
                                <div class="col-md-6">
                                    <br>
                                    <div class="card">
                                        <img src="<?php echo e(url("public/$pegawai->foto")); ?>" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 130%; height: 700px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($pegawai->nama_lengkap); ?>,
                                                <?php echo e($pegawai->gelar_belakang); ?></h5>
                                            <p class="card-text">
                                                <?php echo e($pegawai->jabatan); ?>

                                            </p>
                                            <p style="margin-top: -2%">
                                                Bidang Keahlian : <?php echo e($pegawai->bidang_keahlian); ?>

                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:<?php echo e($pegawai->email); ?>"><?php echo e($pegawai->email); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($pegawai->jabatan == 'Sekretaris Jurusan'): ?>
                                <div class="col-md-6">
                                    <br>
                                    <div class="card">
                                        <img src="<?php echo e(url("public/$pegawai->foto")); ?>" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 130%; height: 700px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($pegawai->nama_lengkap); ?>,
                                                <?php echo e($pegawai->gelar_belakang); ?></h5>
                                            <p class="card-text">
                                                <?php echo e($pegawai->jabatan); ?>

                                            </p>
                                            <p style="margin-top: -2%">
                                                Bidang Keahlian : <?php echo e($pegawai->bidang_keahlian); ?>

                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:<?php echo e($pegawai->email); ?>"><?php echo e($pegawai->email); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($pegawai->jabatan == 'Koordinator Prodi'): ?>
                                <div class="col-md-6">
                                    <br>
                                    <div class="card">
                                        <img src="<?php echo e(url("public/$pegawai->foto")); ?>" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; height: 700px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($pegawai->nama_lengkap); ?>,
                                                <?php echo e($pegawai->gelar_belakang); ?></h5>
                                            <p class="card-text">
                                                <?php echo e($pegawai->jabatan); ?>

                                            </p>
                                            <p style="margin-top: -2%">
                                                Bidang Keahlian : <?php echo e($pegawai->bidang_keahlian); ?>

                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:<?php echo e($pegawai->email); ?>"><?php echo e($pegawai->email); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($pegawai->jabatan == 'Ketua Laboratotium'): ?>
                                <div class="col-md-6">
                                    <br>
                                    <div class="card">
                                        <img src="<?php echo e(url("public/$pegawai->foto")); ?>" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 130%; height: 700px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($pegawai->nama_lengkap); ?>,
                                                <?php echo e($pegawai->gelar_belakang); ?></h5>
                                            <p class="card-text">
                                                <?php echo e($pegawai->jabatan); ?>

                                            </p>
                                            <p style="margin-top: -2%">
                                                Bidang Keahlian : <?php echo e($pegawai->bidang_keahlian); ?>

                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:<?php echo e($pegawai->email); ?>"><?php echo e($pegawai->email); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($pegawai->jabatan == 'Dosen'): ?>
                                <div class="col-md-6">
                                    <br>
                                    <div class="card">
                                        <img src="<?php echo e(url("public/$pegawai->foto")); ?>" class="card-img-top" alt="Waterfall"
                                            style="object-fit: cover; position: static; width: 130%; height: 700px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($pegawai->nama_lengkap); ?>,
                                                <?php echo e($pegawai->gelar_belakang); ?></h5>
                                            <p class="card-text">
                                                <?php echo e($pegawai->jabatan); ?>

                                            </p>
                                            <p style="margin-top: -2%">
                                                Bidang Keahlian : <?php echo e($pegawai->bidang_keahlian); ?>

                                            </p>
                                            <span class="icon-envelope"></span> <a
                                                href="mailto:<?php echo e($pegawai->email); ?>"><?php echo e($pegawai->email); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .person img {
            width: 150px;
            height: 150px;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/home/profil/dosen.blade.php ENDPATH**/ ?>