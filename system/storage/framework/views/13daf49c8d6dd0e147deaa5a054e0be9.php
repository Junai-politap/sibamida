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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                                
                <div class="card card-primary card-outline">
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
                        <a href="<?php echo e(url("admin/opd/$pegawai->id")); ?>/edit" class="btn btn-primary btn-sm float-right"><span class="fa fa-edit"></span> Edit OPD</a>
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo e(url("public/$pegawai->foto")); ?>"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">
                            <?php echo e($pegawai->nama); ?>

                        </h3>

                        <p class="text-muted text-center">
                            <?php echo e($pegawai->nip); ?> <br>
                            <?php echo e($pegawai->nik); ?>

                        </p>

                        
                    </div>
                    
                </div>
                

                
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    
                    <div class="card-body">
                        

                        <strong>Jabatan</strong>
                        <p class="text-muted"><?php echo e($pegawai->jabatan); ?></p>
                        <hr>

                        <strong> Alamat</strong>
                        <p class="text-muted"><?php echo e($pegawai->jabatan); ?></p>
                        <hr>

                        <strong>No Hp</strong>
                        <p class="text-muted"><?php echo e($pegawai->nomor_hp); ?></p>
                        <hr>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0)): ?>
<?php $component = $__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0; ?>
<?php unset($__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0); ?>
<?php endif; ?>
<?php /**PATH D:\GitHub\sibamida\system\resources\views/admin/pegawai/show.blade.php ENDPATH**/ ?>