<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Tambah Jenis Pelayanan</h3>
        </div>
        <form class="form-horizontal" action="<?php echo e(url('storejenis')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama Jenis Pelayanan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Nama Jenis Pelayanan"
                            name="nama_jenis_pelayanan">
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right"><span class="fa fa-save"></span> Simpan</button>
            </div>
        </form>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pelayanan</h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Pelayanan</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Jenis Pelayanan</th>
                        <th>Nama Pelayanan</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelayanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <div class="btn-group">

                                    <a href="<?php echo e(url("edit/$pelayanan->id_pelayanan")); ?>" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    <a href="<?php echo e(url("delete/$pelayanan->id_pelayanan")); ?>" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Lihat</a>
                                </div>
                            </td>
                            <td><?php echo e($pelayanan->jenis_pelayanan->nama_jenis_pelayanan); ?></td>
                            <td><?php echo e($pelayanan->nama_pelayanan); ?></td>
                            <td><?php echo nl2br($pelayanan->detail); ?></td>
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
                    <h4 class="modal-title">Tambah Pelayanan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('storepelayanan')); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Jenis Pelayanan</label>
                                <div class="col-sm-9">
                                    <select name="id_jenis_pelayanan" id="" class="form-control">
                                        <option value=""></option>
                                        <?php $__currentLoopData = $list_jenis_pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_pelayanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($jenis_pelayanan->id_jenis_pelayanan); ?>">
                                                <?php echo e($jenis_pelayanan->nama_jenis_pelayanan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Pelayanan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Pelayanan"
                                        name="nama_pelayanan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Detail Pelayanan</label>
                                <div class="col-sm-9">
                                    <textarea name="detail" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Upload Pedoman</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="file"
                                        accept="application/pdf, application/vnd.ms-excel">
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
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/admin/pelayanan/index.blade.php ENDPATH**/ ?>