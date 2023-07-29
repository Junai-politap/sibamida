
<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card">

        <div class="card-header">
            <h3 class="card-title"><strong> Data Soal <?php echo e($bagian->nama); ?></strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-md"><span
                    class="fa fa-plus"></span> Buat Soal</button>
        </div>
        <div class="header">
            <a href="<?php echo e(url('page-form')); ?>" class="btn btn-info"><span class="fa fa-arrow-left"></span> Kembali</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 30%">Aksi</th>
                        <th class="text-center" style="width: 45%">Nama</th>
                        <th class="text-center">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_soal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($soal->id_bagian == $bagian->id): ?>
                            <tr>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-default" data-toggle="modal"
                                            data-target="#modal-jawaban<?php echo e($soal->id); ?>"><span
                                                class="fa fa-list-ul "></span>
                                            Buat Pilihan
                                        </button>
                                        <div class="modal fade" id="modal-jawaban<?php echo e($soal->id); ?>">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Buat Pilihan Soal</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form class="form-horizontal" action="<?php echo e(url('store-jawaban')); ?>"
                                                        method="post" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>

                                                        <div class="modal-body">
                                                            <div class="card-body">
                                                                <input type="text" class="form-control" name="id_soal"
                                                                    value="<?php echo e($soal->id); ?>" hidden>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Pilihan
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="jawaban"
                                                                            class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal"><span class="fa fa-times"></span>
                                                                Close</button>
                                                            <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                                Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <button class="btn btn-warning" data-toggle="modal"
                                            data-target="#modal-edit<?php echo e($soal->id); ?>"><span class="fa fa-edit"></span>
                                            Edit</button>

                                        <div class="modal fade" id="modal-edit<?php echo e($soal->id); ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Soal</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="<?php echo e(url('update-soal', $soal->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <div class="modal-body">
                                                            <div class="card-body">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Soal
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <textarea name="soal" class="form-control" rows="5"><?php echo e($soal->soal); ?></textarea>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal"><span class="fa fa-times"></span>
                                                                Close</button>
                                                            <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                                Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <td class="text"><?php echo e($soal->soal); ?></td>
                                <td>
                                    <?php $__currentLoopData = $list_jawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($jawaban->id_soal == $soal->id): ?>
                                            <li class="mt-2">
                                                <a href="" data-toggle="modal"
                                                    data-target="#modal-jawaban<?php echo e($jawaban->id); ?>">
                                                    <?php echo e($jawaban->jawaban); ?>

                                                </a>
                                                <div class="modal fade" id="modal-jawaban<?php echo e($jawaban->id); ?>">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Jawaban</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form class="form-horizontal"
                                                                action="<?php echo e(url('update-jawaban', $jawaban->id)); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PUT'); ?>
                                                                <div class="modal-body">
                                                                    <div class="card-body">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Jawaban
                                                                            </label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control"
                                                                                    name="jawaban" value="<?php echo e($jawaban->jawaban); ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal"><span class="fa fa-times"></span>
                                                                        Close</button>
                                                                    <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                                        Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($jawaban->id_soal == '97069d29-bd4b-40c8-95a2-a13693248578'): ?>
                                                    
                                                <a href="<?php echo e(url("pilihan/$jawaban->id")); ?>" class="btn btn-primary" style="margin-left: 10%;"><span class="fa fa-plus"></span> Buat Soal</a>
                                                <?php endif; ?>
                                            </li>
                                            
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>

                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-md">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-soal')); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">
                            <input type="text" value="<?php echo e($bagian->id); ?>" name="id_bagian" hidden>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Soal </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Masukan Soal "
                                        name="soal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                class="fa fa-times"></span> Close</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/bagian/detail.blade.php ENDPATH**/ ?>