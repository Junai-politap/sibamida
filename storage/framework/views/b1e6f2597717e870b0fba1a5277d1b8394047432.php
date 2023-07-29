
<?php $__env->startSection('title', 'PBL - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Project Based Learning',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="choosing-area">
        <div class="container">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                <?php $__currentLoopData = $list_pbl->groupBy('tahun_ajar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun_ajar => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if($loop->first): ?> active <?php endif; ?>" data-toggle="tab"
                            href="#tahun_ajar-<?php echo e($tahun_ajar); ?>" role="tab">Tahun <?php echo e($tahun_ajar); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php $__currentLoopData = $list_pbl->groupBy('tahun_ajar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun_ajar => $list_pbl_tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade show active" id="tahun_ajar-<?php echo e($tahun_ajar); ?>" role="tabpanel">
                        <div class="row">
                            <?php $__currentLoopData = $list_pbl_tahun->groupBy('jenis'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-12 mb-5">
                                    <h3>Tahun Ajar <?php echo e($tahun_ajar); ?> <?php echo e($key); ?></h3><br>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Judul Project</th>
                                            <th class="text-center">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                                    <td class="text-left"><?php echo e($jenis->judul); ?></td>
                                                    <td class="text-center">
                                                        <a href="<?php echo e(url("$jenis->link")); ?>" target="_blank"
                                                            class="btn btn-info"><span class="fa fa-globe"></span> Demo
                                                            Sistem</a>

                                                        <a href="<?php echo e(url("$jenis->link_landing")); ?>" target="_blank"
                                                            class="btn btn-info"><span class="fa fa-info"></span> Landing
                                                            Page</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/project/pbl.blade.php ENDPATH**/ ?>