<?php $__env->startSection('title', 'Survei Kepuasan Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Survei Kepuasan Mahasiswa ',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>

    <div class="site-section" style="margin-bottom: 10%; margin-top: 2%">
        <div class="container">
            <div class="sec-title left">
                <div class="title">
                    <a href="<?php echo e(url('pelayanan/survei')); ?>" class="btn btn-primary"><span class="fa fa-arrow-left"></span>
                        Kembali</a>
                </div>
                <div class="dector thm-bg-clr left"></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="content-box">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                            ?>
                            <tbody>
                                <?php $__currentLoopData = $list_survei; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $survei): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($no++); ?></td>
                                        <td class="text"><?php echo e($survei->judul); ?></td>
                                        <td class="text-center">
                                            <div class="form-group">
                                                <a class="btn btn-info" download="<?php echo e($survei->judul); ?>"
                                                    href="<?php echo e(url("public/$survei->file")); ?>"><span class="fa fa-download"
                                                        download></span> File PDF</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/pelayanan/mahasiswa.blade.php ENDPATH**/ ?>