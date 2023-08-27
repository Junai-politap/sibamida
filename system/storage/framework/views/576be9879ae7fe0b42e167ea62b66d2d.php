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
                        <div class="btn-group float-right mb-10">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                <i class="fa fa-print"> CetakLaporan</i>
                            </button>
                            <a href="<?php echo e(url('staff-administrasi/bangunan-export')); ?>" class="btn btn-success"> <span
                                    class="fa fa-file-export"></span> Export Excel</a>
                        <a href="<?php echo e(url('staff-administrasi/master/bangunan/create')); ?>" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a></div>
                        <h4 class="card-title">
                            <strong>Master Data Aset</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Kode Aset</th>
                                    <th class="text-center">Nama Aset</th>
                                    <th class="text-center">Nama Penanggungjawab</th>
                                    <th class="text-center">Keterangan</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $list_bangunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bangunan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( Auth::guard('staff')->user()->id_opd == $bangunan->id_opd): ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <?php if (isset($component)) { $__componentOriginaldf05ec2d539ccc47939751d83314ef26 = $component; } ?>
<?php $component = App\View\Components\Button\InfoButton::resolve(['url' => 'staff-administrasi/master/bangunan','id' => ''.e($bangunan->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Button\EditButton::resolve(['url' => 'staff-administrasi/master/bangunan','id' => ''.e($bangunan->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\Button\DeleteButton::resolve(['url' => 'staff-administrasi/master/bangunan','id' => ''.e($bangunan->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                        <td class="text-left">
                                            <?php echo e($bangunan->kode_barang); ?>


                                        </td>
                                        <td class=""><?php echo e($bangunan->nama_barang); ?></td>
                                        <td class=""><?php echo e($bangunan->pegawai->jabatan); ?></td>
                                        <td>
                                            <?php echo e($bangunan->keterangan); ?>


                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal347db4b87a67030074eb1f762cfda9c2)): ?>
<?php $component = $__componentOriginal347db4b87a67030074eb1f762cfda9c2; ?>
<?php unset($__componentOriginal347db4b87a67030074eb1f762cfda9c2); ?>
<?php endif; ?>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(url('staff-administrasi/bangunan-download-laporan')); ?>" method="get">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tahun_mulai">Tahun Mulai</label>
                        <input type="year" class="form-control" id="tahun_mulai" name="tahun_mulai" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_selesai">Tahun Selesai</label>
                        <input type="year" class="form-control" id="tahun_selesai" name="tahun_selesai" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Download Laporan Excel</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/staff-administrasi/bangunan/index.blade.php ENDPATH**/ ?>