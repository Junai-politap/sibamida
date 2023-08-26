<?php if (isset($component)) { $__componentOriginal851cb6f5a7f89db41449dadedd8953e5 = $component; } ?>
<?php $component = App\View\Components\Opd::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('opd'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Opd::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Bidang
                        </button>
                        <h4 class="title">
                            <strong>Data Bidang</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama Bidang</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $list_bidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bidang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-edit<?php echo e($bidang->id); ?>">
                                                    <span class="fa fa-edit"></span>
                                                </button>

                                                <a href="<?php echo e(url("opd/bidang/delete/$bidang->id")); ?>"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Yakin Akan Menghapus Data Ini')"><span
                                                        class="fa fa-trash"></span></a>
                                            </div>
                                        </td>

                                        <td class=""><?php echo e($bidang->nama_bidang); ?></td>

                                    </tr>

                                    <div class="modal fade" id="modal-edit<?php echo e($bidang->id); ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data bidang</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?php echo e(url('opd/bidang', $bidang->id)); ?>" method="POST">
                                                    <div class="modal-body">

                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <div class="card-body">
                                                            <input type="text" name="id_opd" value="<?php echo e(Auth::guard('opd')->user()->id); ?>" hidden>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama
                                                                    bidang</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        name="nama_bidang"
                                                                        value="<?php echo e($bidang->nama_bidang); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-info"
                                                            data-dismiss="modal"><span class="fa fa-times"></span> Batal</button>
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
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data bidang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(url('opd/bidang')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">

                            <input type="text" name="id_opd" value="<?php echo e(Auth::guard('opd')->user()->id); ?>" hidden>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama bidang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama bidang"
                                        name="nama_bidang">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-info" data-dismiss="modal"><span class="fa fa-times"></span> Batal</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal851cb6f5a7f89db41449dadedd8953e5)): ?>
<?php $component = $__componentOriginal851cb6f5a7f89db41449dadedd8953e5; ?>
<?php unset($__componentOriginal851cb6f5a7f89db41449dadedd8953e5); ?>
<?php endif; ?>
<?php /**PATH D:\GitHub\sibamida\system\resources\views/opd/bidang/index.blade.php ENDPATH**/ ?>