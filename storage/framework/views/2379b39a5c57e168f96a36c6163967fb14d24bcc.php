
<?php $__env->startSection('title', 'PBL - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Tugas Akhir Mahasiswa',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="choosing-area">
        <div class="container">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                <?php $__currentLoopData = $list_tahun->groupBy('tahun_angkatan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun_angkatan => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if($loop->first): ?> active <?php endif; ?>" data-toggle="tab"
                            href="#tahun_angkatan-<?php echo e($tahun_angkatan); ?>" role="tab">Tahun <?php echo e($tahun_angkatan); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php $__currentLoopData = $list_tugas_akhir->groupBy('tahun_angkatan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun_angkatan => $list_tugas_akhir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade show active" id="tahun_angkatan-<?php echo e($tahun_angkatan); ?>" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12 mb-5">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th class="text-center">No</th>
                                        <th class="text-center"> Nama Mahasiswa</th>
                                        <th class="text-center"> Judul Tugas Akhir</th>
                                    </thead>
                                    <?php
                                        $no = 1;
                                    ?>
                                    <tbody>
                                        <?php $__currentLoopData = $list_tugas_akhir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tugas_akhir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center"><?php echo e($no++); ?></td>
                                                <td class="text-left" style="text-transform: capitalize"><?php echo e($tugas_akhir->nama_mahasiswa); ?></td>
                                                <td class="text-justify" style="text-transform: uppercase;"><?php echo e($tugas_akhir->judul); ?></td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/project/tugas-akhir.blade.php ENDPATH**/ ?>