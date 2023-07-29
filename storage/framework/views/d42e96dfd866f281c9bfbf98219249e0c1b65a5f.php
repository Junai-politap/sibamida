
<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong> Data Berita</strong></h3>

        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                class="fa fa-plus"></span> Tambah Berita</button>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">Aksi</th>
                    <th class="text-center">Nama Berita</th>
                    <th class="text-center">Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $list_home_base; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home_base): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?php echo e(url("show-berita/$home_base->id_berita")); ?>" class="btn btn-info"><span
                                        class="fa fa-info"></span> Lihat</a>

                                <a href="<?php echo e(url("edit-berita/$home_base->id_berita")); ?>" class="btn btn-warning"><span
                                        class="fa fa-edit"></span> Edit</a>

                                <a href="<?php echo e(url("delete-berita/$home_base->id_berita")); ?>" class="btn btn-danger"><span
                                        class="fa fa-trash"></span> Hapus</a>
                            </div>
                        </td>
                        <td class="text-center"><?php echo e($home_base->nama_berita); ?></td>
                        <td class="text-center">
                            <img src="<?php echo e(url("public/$home_base->gambar")); ?>" alt=""
                                style="width: 50%; height: 100%; border-radius: 20px;">
                        </td>
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
            <form class="form-horizontal" action="<?php echo e(url('store-home')); ?>" method="post"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Slide</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="custom-file-input" type="file" name="gambar" accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Gambar Slide</label>
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
<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/admin/home/index.blade.php ENDPATH**/ ?>