

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> </strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Label</th>
                        <th class="text-center">Isi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_lulusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lulusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#modal-lg<?php echo e($lulusan->id); ?>"><span
                                        class="fa fa-edit"></span> Edit</button>

                                    <a href="<?php echo e(url("delete-lulusan/$lulusan->id")); ?>" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="text-center"><?php echo e($lulusan->label); ?></td>
                            <td class="text-justify"><?php echo nl2br($lulusan->isi); ?></td>
                        </tr>
                        
                        <div class="modal fade" id="modal-lg<?php echo e($lulusan->id); ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="form-horizontal" action="<?php echo e(url('update-lulusan', $lulusan->id)); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field("PUT"); ?>
                                        <div class="modal-body">
                                            <div class="card-body">
                    
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Label</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="label" value="<?php echo e($lulusan->label); ?>">
                                                    </div>
                                                </div>
                    
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Isi</label>
                                                    <div class="col-sm-9">
                                                        <textarea name="isi" class="summernote"><?php echo e($lulusan->isi); ?></textarea>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-lulusan')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Label</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="label">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Isi</label>
                                <div class="col-sm-9">
                                    <textarea name="isi" class="summernote"></textarea>
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/admin/lulusan/index.blade.php ENDPATH**/ ?>