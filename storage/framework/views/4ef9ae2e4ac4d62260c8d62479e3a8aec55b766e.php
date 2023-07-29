
<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong> Data Akreditasi</strong></h3>

        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                class="fa fa-plus"></span> Tambah Data</button>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Aksi</th>
                    <th class="text-center">Nama Akreditasi</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $list_akreditasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akreditasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?php echo e(url("show-akreditasi/$akreditasi->id")); ?>" class="btn btn-info"><span
                                        class="fa fa-info"></span> Lihat</a>

                                <a href="<?php echo e(url("edit-akreditasi/$akreditasi->id")); ?>" class="btn btn-warning"><span
                                        class="fa fa-edit"></span> Edit</a>

                                <a href="<?php echo e(url("delete-akreditasi/$akreditasi->id")); ?>" class="btn btn-danger"><span
                                        class="fa fa-trash"></span> Hapus</a>
                            </div>
                        </td>
                        <td class="text-center"><?php echo e($akreditasi->nama); ?></td>
                        
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
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="<?php echo e(url('store-akreditasi')); ?>" method="post"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Judul Akreditasi </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Nama " name="nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Akreditasi </label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_akreditasi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Masa Berkalu Akreditasi </label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="masa_berlaku">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">File Gambar</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="custom-file-input" type="file" name="file" accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">File Gambar</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">File PDF</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="custom-file-input" type="file" name="pdf" accept="application/pdf">
                                <label class="custom-file-label">File PDF</label>
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
<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/admin/akreditasi/index.blade.php ENDPATH**/ ?>