
<?php $__env->startSection('title', 'Pedoman Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Pedoman ',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>

    <div class="site-section" style="margin-bottom: 10%; margin-top: 2%">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title">
                    <ul> <?php echo e($jenis_pedoman->nama_jenis_pedoman); ?></ul>
                </div>
                <div class="dector thm-bg-clr center" style="width: auto"></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="content-box">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Pedoman</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                            ?>
                            <tbody>
                                <?php $__currentLoopData = $list_pedoman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedoman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($pedoman->id_jenis_pedoman == $jenis_pedoman->id): ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($no++); ?></td>
                                            <td class="text"><?php echo e($pedoman->nama_pedoman); ?></td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <a class="btn btn-info" download="<?php echo e($pedoman->nama_pedoman); ?>"
                                                        href="<?php echo e(url("public/$pedoman->file_word")); ?>"><span
                                                            class="fa fa-download" download></span> File Word</a>
                                                    <a class="btn btn-info" download="<?php echo e($pedoman->nama_pedoman); ?>"
                                                        href="<?php echo e(url("public/$pedoman->file_pdf")); ?>"><span
                                                            class="fa fa-download" download></span> File PDF</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/pedoman/show-pedoman.blade.php ENDPATH**/ ?>