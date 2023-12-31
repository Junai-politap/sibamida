<?php if (isset($component)) { $__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0 = $component; } ?>
<?php $component = App\View\Components\Admin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <a href="<?php echo e(url('admin/master/peralatan-mesin/create')); ?>"
                                class="btn btn-primary float-right mb-10"> <span class="fa fa-plus"></span> Tambah
                                Data</a>
                            <button class="btn btn-primary float-right" style="margin-right: 1%" data-toggle="modal" data-target="#modal-lg">
                                <span class="fa fa-plus"></span> Tambah Kondisi
                            </button>

                            <h3 class="card-title">Data Seluruh Aset Peralatan dan Mesin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Kategori</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Tahun Perolehan</th>
                                        <th>Harga Perolehan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $list_peralatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peralatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <?php if (isset($component)) { $__componentOriginaldf05ec2d539ccc47939751d83314ef26 = $component; } ?>
<?php $component = App\View\Components\Button\InfoButton::resolve(['url' => 'admin/master/peralatan-mesin','id' => ''.e($peralatan->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.info-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button\InfoButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf05ec2d539ccc47939751d83314ef26)): ?>
<?php $component = $__componentOriginaldf05ec2d539ccc47939751d83314ef26; ?>
<?php unset($__componentOriginaldf05ec2d539ccc47939751d83314ef26); ?>
<?php endif; ?>
                                                    <?php if (isset($component)) { $__componentOriginalce5449c7668d717a9640b38f7a62eeb4 = $component; } ?>
<?php $component = App\View\Components\Button\EditButton::resolve(['url' => 'admin/master/peralatan-mesin','id' => ''.e($peralatan->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.edit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button\EditButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce5449c7668d717a9640b38f7a62eeb4)): ?>
<?php $component = $__componentOriginalce5449c7668d717a9640b38f7a62eeb4; ?>
<?php unset($__componentOriginalce5449c7668d717a9640b38f7a62eeb4); ?>
<?php endif; ?>
                                                    <?php if (isset($component)) { $__componentOriginal021a61a9a840f36f9df15b806898218b = $component; } ?>
<?php $component = App\View\Components\Button\DeleteButton::resolve(['url' => 'admin/master/peralatan-mesin','id' => ''.e($peralatan->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            <td><?php echo e($peralatan->kategori->nama_kategori); ?></td>
                                            <td><?php echo e($peralatan->kode_barang); ?></td>
                                            <td><?php echo e($peralatan->nama_barang); ?></td>
                                            <td><?php echo e($peralatan->tahun_perolehan); ?></td>
                                            <td>Rp .<?php echo e($peralatan->harga_perolehan); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Kondisi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(url('admin/kondisi')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama OPD</label>
                                <div class="col-sm-9">
                                    <select name="id_opd" class="form-control" required>
                                        <option value=""> Pilih Organisasi Perangkat Daerah</option>
                                        <?php $__currentLoopData = $list_opd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($opd->id); ?>"><?php echo e($opd->nama_opd); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Kondisi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Kondisi"
                                        name="nama_kondisi">
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
<?php /**PATH D:\GitHub\sibamida\system\resources\views/admin/peralatan-mesin/detail.blade.php ENDPATH**/ ?>