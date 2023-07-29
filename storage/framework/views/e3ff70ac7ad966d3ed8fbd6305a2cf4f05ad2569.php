<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Galeri</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Galeri</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Nama Galeri</th>
                        <th class="text-center">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?php echo e(url("show-galeri/$galeri->id_galeri")); ?>" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <a href="<?php echo e(url("edit-galeri/$galeri->id_galeri")); ?>" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    <a href="<?php echo e(url("delete-galeri/$galeri->id_galeri")); ?>" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="text-center"><?php echo e($galeri->nama_galeri); ?></td>
                            <td class="text-center"><?php echo e(date('Y-m-d', strtotime($galeri->created_at))); ?></td>
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
                    <h4 class="modal-title">Tambah Galeri</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-galeri')); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Galeri</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Galeri" name="nama_galeri">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Detail Galeri</label>
                                <div class="col-sm-9">
                                    <textarea name="detail" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Gambar</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="custom-file-input" type="file" name="gambar" accept=".jpg, .png, .jpeg">
                                    <label class="custom-file-label">Gambar Galeri</label>
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\informatika\system\resources\views/admin/galeri/index.blade.php ENDPATH**/ ?>