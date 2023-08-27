<?php if (isset($component)) { $__componentOriginal347db4b87a67030074eb1f762cfda9c2 = $component; } ?>
<?php $component = App\View\Components\Staff::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('staff'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Staff::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
   
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
    
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                                <span class="fa fa-plus"></span> Tambah Kategori
                            </button>
                            <h4 class="title">
                                <strong>Data Kategori</strong>
                            </h4>
    
                        </div>
    
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Nama Kategori</th>
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $list_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning" data-toggle="modal"
                                                        data-target="#modal-edit<?php echo e($kategori->id); ?>">
                                                        <span class="fa fa-edit"></span>
                                                    </button>
    
                                                    <a href="<?php echo e(url("staff-administrasi/kategori/delete/$kategori->id")); ?>"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Yakin Akan Menghapus Data Ini')"><span
                                                            class="fa fa-trash"></span></a>
                                                </div>
                                            </td>
    
                                            <td class=""><?php echo e($kategori->nama_kategori); ?></td>
    
                                        </tr>
    
                                        <div class="modal fade" id="modal-edit<?php echo e($kategori->id); ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data Kategori</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?php echo e(url('staff-administrasi/kategori', $kategori->id)); ?>" method="POST">
                                                        <div class="modal-body">
    
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="card-body">
    
                                                                <input type="text" name="id_opd" value="<?php echo e(Auth::guard('staff')->user()->id_opd); ?>" hidden>
    
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Nama
                                                                        kategori</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_kategori"
                                                                            value="<?php echo e($kategori->nama_kategori); ?>">
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
                        <h4 class="modal-title">Tambah Data Kategori</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo e(url('staff-administrasi/kategori')); ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <input type="text" name="id_opd" value="<?php echo e(Auth::guard('staff')->user()->id_opd); ?>" hidden>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Nama Kategori"
                                            name="nama_kategori">
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
<?php if (isset($__componentOriginal347db4b87a67030074eb1f762cfda9c2)): ?>
<?php $component = $__componentOriginal347db4b87a67030074eb1f762cfda9c2; ?>
<?php unset($__componentOriginal347db4b87a67030074eb1f762cfda9c2); ?>
<?php endif; ?>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/staff-administrasi/kategori/index.blade.php ENDPATH**/ ?>