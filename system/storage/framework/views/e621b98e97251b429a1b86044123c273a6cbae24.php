<?php $__env->startSection('title', 'Kurikulum Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Kurikulum',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="choosing-area">
        <div class="container">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                <?php $__currentLoopData = $list_matakuliah->groupBy('kurikulum'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kurikulum => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if($loop->first): ?> active <?php endif; ?>" data-toggle="tab"
                            href="#kurikulum-<?php echo e($kurikulum); ?>" role="tab">Kurikulum <?php echo e($kurikulum); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php $__currentLoopData = $list_matakuliah->groupBy('kurikulum'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kurikulum => $list_matakuliah_semester): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade show active" id="kurikulum-<?php echo e($kurikulum); ?>" role="tabpanel">
                        <div class="row">
                            <?php $__currentLoopData = $list_matakuliah_semester->groupBy('semester'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $semester): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-12 mb-5">
                                    <h3>Semester <?php echo e($key); ?></h3>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Matakuliah</th>
                                            <th class="text-center">Nama Mata Kuliah</th>
                                            <th class="text-center">SKS</th>
                                            <th class="text-center">Silabus</th>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $semester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                                    <td class="text-center"><?php echo e($matakuliah->kode); ?></td>
                                                    <td class="text-center"><?php echo e($matakuliah->nama); ?></td>
                                                    <td class="text-center"><?php echo e($matakuliah->sks); ?></td>
                                                    <td class="text-center">
                                                        <button class="btn btn-info" data-toggle="modal"
                                                            data-target="#modal-lg<?php echo e($matakuliah->id); ?>">
                                                            <span class="fa fa-info"></span>
                                                        </button>
                                                    </td>
                                                    <div class="modal fade" id="modal-lg<?php echo e($matakuliah->id); ?>">
                                                        <div class="modal-dialog modal-lg" style="margin-top: 10%">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"> <?php echo e($matakuliah->nama); ?>

                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <?php echo csrf_field(); ?>
                                                                <div class="modal-body">
                                                                    <div class="card-body">
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Nama
                                                                                Matakuliah</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="col-form-label">
                                                                                    : <?php echo e($matakuliah->nama); ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Kode
                                                                                Matakuliah</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="col-form-label">
                                                                                    : <?php echo e($matakuliah->kode); ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">

                                                                            <div class="col-sm-1">
                                                                                <label class="col-form-label">
                                                                                    <?php echo e($matakuliah->sks); ?></label>
                                                                            </div>
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">SKS
                                                                                Matakuliah</label>


                                                                            <div class="col-sm-1">
                                                                                <label class="col-form-label">

                                                                                    <?php echo e($matakuliah->jam_teori); ?></label>
                                                                            </div>
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-2 col-form-label">Jam
                                                                                Teori</label>

                                                                            <div class="col-sm-1">
                                                                                <label class="col-form-label">

                                                                                    <?php echo e($matakuliah->jam_praktikum); ?></label>
                                                                            </div>
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Jam
                                                                                Pratikum</label>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">TIU</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="form-label"
                                                                                    style="text-align: justify">
                                                                                    <?php echo nl2br($matakuliah->tiu); ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Bahasan</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="form-label"
                                                                                    style="text-align: justify">
                                                                                    <?php echo nl2br($matakuliah->bahasan); ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail3"
                                                                                class="col-sm-3 col-form-label">Referensi</label>
                                                                            <div class="col-sm-9">
                                                                                <label class="form-label"
                                                                                    style="text-align: justify">
                                                                                    <?php echo nl2br($matakuliah->referensi); ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="3" class="text-center"><b>Jumlah</b></th>
                                                <th class="text-center"><?php echo e($semester->sum('sks')); ?></th>

                                            </tr>

                                        </tfoot>
                                    </table>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>  
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/akademik/kurikulum.blade.php ENDPATH**/ ?>