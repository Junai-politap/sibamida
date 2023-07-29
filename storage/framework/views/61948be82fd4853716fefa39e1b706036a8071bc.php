
<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card">
        <div class="card-header">
            <h1 class="text-center">
                <strong>Data Hasil Survey <?php echo e($mahasiswa->nama); ?></strong>
            </h1>

        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr><th class="text-center" colspan="3" style="font-size: 160%"> Evaluasi Pembelajaran Saat Kuliah</th></tr>
                                <tr>
                                    <th>No</th>
                                    <th>Soal</th>
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                            ?>
                            <tbody>
                                <?php $__currentLoopData = $list_tracer_study->where('id_bagian', '96ae217a-7d04-4bdc-84f4-8c91a51adde5'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracer_study): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($tracer_study->id_mahasiswa == $mahasiswa->id): ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td><?php echo e($tracer_study->soal->soal); ?></td>
                                            <td><?php echo e($tracer_study->jawaban->jawaban); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3" style="font-size: 160%"> 
                                        Informasi Tentang Pekerjaan Alumni
                                    </th>
                                </tr>
                                <tr>
                                    <th>Soal</th>
                                    
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                <?php $__currentLoopData = $list_tracer_study->where('id_bagian', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracer_study): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($tracer_study->id_mahasiswa == $mahasiswa->id): ?>
                                        <tr>

                                            <td><?php echo e($tracer_study->soal->soal); ?></td>
                                            <td><?php echo e($tracer_study->jawaban->jawaban); ?></td>

                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $list_tracer->where('id_bagian', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($tracer->id_mahasiswa == $mahasiswa->id): ?>
                                        <tr>

                                            <td><?php echo e($tracer->soal->soal); ?></td>

                                            <td>
                                                <?php if($tracer->id_jawaban == '971ae197-887f-4fd9-9f89-0f8db794e109'): ?>
                                                    <ul>
                                                        <li><?php echo e($tracer->jawaban_1); ?></li>
                                                        <li><?php echo e($tracer->jawaban_2); ?></li>
                                                        <li><?php echo e($tracer->jawaban_3); ?></li>
                                                        <li><?php echo e($tracer->jawaban_4); ?></li>
                                                        <li><?php echo e($tracer->jawaban_5); ?></li>
                                                        <li><?php echo e($tracer->jawaban_6); ?></li>
                                                        <li><?php echo e($tracer->jawaban_7); ?></li>

                                                    </ul>
                                                <?php endif; ?>


                                                <?php if($tracer->id_soal == '971ae1e8-e204-4e4f-b06d-8485167b87f9'): ?>
                                                    <ul>
                                                        <li><?php echo e($tracer->jawaban_8); ?></li>
                                                        <li><?php echo e($tracer->jawaban_9); ?></li>
                                                        <li><?php echo e($tracer->jawaban_10); ?></li>

                                                    </ul>
                                                <?php endif; ?>

                                                <?php if($tracer->id_jawaban == '971ae1f7-faec-4131-a19d-60953b698f8c'): ?>
                                                    <ul>
                                                        <li><?php echo e($tracer->jawaban_11); ?></li>

                                                    </ul>
                                                <?php endif; ?>
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
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <table id="example4" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3" style="font-size: 160%"> 
                                        Perbaikan Proses Pembelajaran
                                    </th>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Soal</th>
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                            ?>
                            <tbody>
                                <?php $__currentLoopData = $list_tracer_study->where('id_bagian', '96ae2407-65d2-4c4f-b204-77b435bd5f4c'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracer_study): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($tracer_study->id_mahasiswa == $mahasiswa->id): ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td><?php echo e($tracer_study->soal->soal); ?></td>
                                            <td><?php echo e($tracer_study->jawaban->jawaban); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table id="example5" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="3" style="font-size: 160%"> 
                                        Kompetensi Alumni
                                    </th>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Soal</th>
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                            ?>
                            <tbody>
                                <?php $__currentLoopData = $list_tracer_study->where('id_bagian', '96ae2417-c7ce-43d6-97cb-2216283a51ff'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracer_study): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($tracer_study->id_mahasiswa == $mahasiswa->id): ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td><?php echo e($tracer_study->soal->soal); ?></td>
                                            <td><?php echo e($tracer_study->jawaban->jawaban); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                    <table id="example6" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="3" style="font-size: 160%"> 
                                    Kontribusi Kompetensi Yang Diperlukan Dalam Pekerjaan
                                </th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                                <th>Jawaban</th>
                            </tr>
                        </thead>
                        <?php
                            $no = 1;
                        ?>
                        <tbody>
                            <?php $__currentLoopData = $list_tracer_study->where('id_bagian', '96ae2422-0023-45bd-87b2-7ec4d65b027f'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracer_study): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($tracer_study->id_mahasiswa == $mahasiswa->id): ?>
                                    <tr>
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($tracer_study->soal->soal); ?></td>
                                        <td><?php echo e($tracer_study->jawaban->jawaban); ?></td>
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/bagian/show.blade.php ENDPATH**/ ?>