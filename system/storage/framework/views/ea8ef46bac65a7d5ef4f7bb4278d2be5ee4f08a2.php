<?php $__env->startSection('title', 'Profil Pimpinan Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Profil Pimpinan',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br><br><br>
    <div class="site-section site-blocks-cover">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="container">
                        <?php if($pegawai->jabatan == 'Ketua Jurusan'): ?>
                        <div class="row mb-5">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <img src="<?php echo e(url("public/$pegawai->foto")); ?>" alt="Image"
                                    class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 ml-auto ">
                                <h2 class="section-title-underline mb-5">
                                    <span><?php echo e($pegawai->jabatan); ?></span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nama_lengkap); ?>, <?php echo e($pegawai->gelar_belakang); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nip); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nik); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">TTL </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->tempat_lahir); ?>, <?php echo e($pegawai->tanggal_lahir); ?></td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if($pegawai->jabatan == 'Sekretaris Jurusan'): ?>
                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                                <img src="<?php echo e(url("public/$pegawai->foto")); ?>" 
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                                <h2 class="section-title-underline mb-5">
                                    <span><?php echo e($pegawai->jabatan); ?></span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nama_lengkap); ?>, <?php echo e($pegawai->gelar_belakang); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nip); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nik); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">TTL </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->tempat_lahir); ?>, <?php echo e($pegawai->tanggal_lahir); ?></td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if($pegawai->jabatan == 'Koordinator Prodi'): ?>
                        <div class="row mb-5">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <img src="<?php echo e(url("public/$pegawai->foto")); ?>"
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 ml-auto align-self-center">
                                <h2 class="section-title-underline mb-5">
                                    <span><?php echo e($pegawai->jabatan); ?></span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nama_lengkap); ?>, <?php echo e($pegawai->gelar_belakang); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nip); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nik); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">TTL </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->tempat_lahir); ?>, <?php echo e($pegawai->tanggal_lahir); ?></td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if($pegawai->jabatan == 'Ketua Laboratotium'): ?>
                        <div class="row  mb-5">
                            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                                <img src="<?php echo e(url("public/$pegawai->foto")); ?>"
                                    alt="Image" class="img-fluid" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                            <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                                <h2 class="section-title-underline mb-5">
                                    <span><?php echo e($pegawai->jabatan); ?></span>
                                </h2>
                                <p>
                                <table>
                                    <tr>
                                        <td class="v-align-top" width="150px">Nama</td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nama_lengkap); ?>, <?php echo e($pegawai->gelar_belakang); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIP </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nip); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">NIK </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->nik); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-top" width="150px">TTL </td>
                                        <td class="v-align-top"> : </td>
                                        <td class="v-align-top"><?php echo e($pegawai->tempat_lahir); ?>, <?php echo e($pegawai->tanggal_lahir); ?></td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .v-align-top {
            vertical-align: top;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/profil/pimpinan.blade.php ENDPATH**/ ?>