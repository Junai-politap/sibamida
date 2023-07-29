

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Jenis Pedoman</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Jenis Pedoman</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Aksi</th>
                        <th class="">Nama Jenis Pedoman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       $no=1
                    ?>
                    <?php $__currentLoopData = $list_jenis_pedoman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_pedoman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"> <?php echo e($no++); ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?php echo e(url("show-jenis-pedoman/$jenis_pedoman->id")); ?>" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <a href="<?php echo e(url("edit-jenis-pedoman/$jenis_pedoman->id")); ?>" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    
                                </div>
                            </td>
                            <td class="text"><?php echo e($jenis_pedoman->nama_jenis_pedoman); ?></td>
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
                    <h4 class="modal-title">Tambah Pedoman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-jenis-pedoman')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Jenis Pedoman</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Nama Jenis Pedoman"
                                        name="nama_jenis_pedoman">
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/admin/pedoman/index.blade.php ENDPATH**/ ?>