<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Silabus</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Silabus</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Kode Matakuliah</th>
                        <th class="text-center">Nama Matakuliah</th>
                        <th class="text-center">Deskripsi Matakuliah</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_silabus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $silabus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?php echo e(url("show-silabus/$silabus->id_silabus")); ?>" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <a href="<?php echo e(url("edit-silabus/$silabus->id_silabus")); ?>" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    <a href="<?php echo e(url("delete-silabus/$silabus->id_silabus")); ?>"
                                        class="btn btn-danger"><span class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="text-center"><?php echo e($silabus->matakuliah->kode); ?></td>
                            <td class="text-center"><?php echo e($silabus->matakuliah->nama); ?></td>
                            <td class="text-center"><?php echo nl2br($silabus->deskripsi_mata_kuliah); ?></td>


                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Silabus</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-silabus')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Matakuliah</label>
                                <div class="col-sm-9">
                                    <select name="id_mk" id="" class="form-control">
                                        <option value=""> Pilih Kode Matakuliah</option>
                                        <?php $__currentLoopData = $list_matakuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($matakuliah->id_mk); ?>"> <?php echo e($matakuliah->kode); ?> |
                                                <?php echo e($matakuliah->nama); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deskripsi Matakuliah</label>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi_mata_kuliah" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Capaian Umum Matakuliah</label>
                                <div class="col-sm-9">
                                    <textarea name="capaian_umum" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Capaian Khusus Matakuliah</label>
                                <div class="col-sm-9">
                                    <textarea name="capaian_khusus" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bahan Pustaka</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Bahan Pustaka"
                                        name="bahan_pustaka">
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/admin/silabus/index.blade.php ENDPATH**/ ?>