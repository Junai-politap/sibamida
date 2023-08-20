<?php if (isset($component)) { $__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0 = $component; } ?>
<?php $component = App\View\Components\Admin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Slide
                        </button>
                        <h4 class="card-title">
                            <strong>Master Data Slide</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Label</th>
                                    <th class="text-center">Foto</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $list_slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-edit<?php echo e($slide->id); ?>">
                                                <span class="fa fa-edit"></span>
                                            </button>
                                                <?php if (isset($component)) { $__componentOriginal021a61a9a840f36f9df15b806898218b = $component; } ?>
<?php $component = App\View\Components\Button\DeleteButton::resolve(['url' => 'admin/master/slide','id' => ''.e($slide->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button\DeleteButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal021a61a9a840f36f9df15b806898218b)): ?>
<?php $component = $__componentOriginal021a61a9a840f36f9df15b806898218b; ?>
<?php unset($__componentOriginal021a61a9a840f36f9df15b806898218b); ?>
<?php endif; ?>
                                            </div>
                                        </td>
                                        
                                        <td class=""><?php echo e($slide->label); ?></td>
                                        <td class="text-center" style="width: 20%">
                                            <img src="<?php echo e(url("public/$slide->foto")); ?>" style="width:30%; height:30%;" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-edit<?php echo e($slide->id); ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Slide</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?php echo e(url('admin/slide', $slide->id)); ?>" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <div class="card-body">

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Label Slide</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="label" value="<?php echo e($slide->label); ?>">
                                                                </div>
                                                            </div>
                                
                                
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Foto</label>
                                                                <div class="col-md-4">
                                                                    <img src="<?php echo e(url("public/$slide->foto")); ?>" style="width:50%; ">
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" value="<?php echo e($slide->foto); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default"
                                                            data-dismiss="modal">Batal</button>
                                                        <button class="btn btn-primary">Simpan</button>
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
                    <h4 class="modal-title">Tambah Data Slide</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(url('admin/slide')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Label Slide</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Label Slide"
                                        name="label">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0)): ?>
<?php $component = $__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0; ?>
<?php unset($__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0); ?>
<?php endif; ?>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/admin/slide/index.blade.php ENDPATH**/ ?>