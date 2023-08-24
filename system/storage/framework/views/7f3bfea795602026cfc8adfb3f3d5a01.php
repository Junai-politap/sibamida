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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php if (isset($component)) { $__componentOriginal211193f73d013ad1f030860171096d7c = $component; } ?>
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => ''.e(url('admin/pegawai')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.back-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button\BackButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal211193f73d013ad1f030860171096d7c)): ?>
<?php $component = $__componentOriginal211193f73d013ad1f030860171096d7c; ?>
<?php unset($__componentOriginal211193f73d013ad1f030860171096d7c); ?>
<?php endif; ?>
                        <h3 class="text-center" style="font-family: bold">Edit Data Pegawai</h3>
                    </div>
                    <form action="<?php echo e(url('admin/pegawai',$pegawai->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo e($pegawai->nip); ?>"
                                        name="nip">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo e($pegawai->nik); ?>"
                                        name="nik">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Pegawai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo e($pegawai->nama); ?>"
                                        name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Organisasi Perangkat Daerah</label>
                                <div class="col-sm-10">
                                    <select name="id_opd" class="form-control">
                                        <?php $__currentLoopData = $list_opd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($opd->id == $pegawai->id_opd): ?> selected <?php endif; ?>
                                            value="<?php echo e($opd->id); ?>">
                                            <?php echo e($opd->nama_opd); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo e($pegawai->username); ?>"
                                        name="username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan Pegawai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo e($pegawai->jabatan); ?>"
                                        name="jabatan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Pegawai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo e($pegawai->alamat); ?>"
                                        name="alamat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Hp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo e($pegawai->nomor_hp); ?>"
                                        name="nomor_hp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Poto</label>
                                <div class="col-sm-4">
                                    
                                    <img src="<?php echo e(url("public/$pegawai->foto")); ?>" style="width: 50%; height: 100%">
                                </div>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" name="foto"
                                        accept=".png, .jpg, .jppeg" value="<?php echo e($pegawai->foto); ?>">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 2%">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-10">
                                    <div class="footer">
                                        <button type="reset" class="btn btn-default float-left"><span class="fa fa-times"></span> Batal</button>

                                        <button class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0)): ?>
<?php $component = $__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0; ?>
<?php unset($__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0); ?>
<?php endif; ?>
<?php /**PATH D:\GitHub\sibamida\system\resources\views/admin/pegawai/edit.blade.php ENDPATH**/ ?>