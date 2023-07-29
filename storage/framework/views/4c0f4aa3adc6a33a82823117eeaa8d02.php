<?php if (isset($component)) { $__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0 = $component; } ?>
<?php $component = App\View\Components\Admin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-md-12 col-sm-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
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

                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class=""><b><?php echo e($pegawai->nama); ?> </b>
                                        
                                    </h2>
                                     <?php echo e($pegawai->opd->nama_opd); ?>

                                    <p class="text-muted text-sm mt-2"><b>NIP/NIK: </b> <?php echo e($pegawai->nip); ?> / <?php echo e($pegawai->nik); ?> 
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        
                                        <li class="">
                                            <span class="fa-li">
                                                <i class="fas fa-check"></i>
                                            </span> 
                                            Jabatan:
                                            <?php echo e($pegawai->jabatan); ?>

                                        </li>

                                        <li class="">
                                            <span class="fa-li">
                                                <i class="fas fa-check"></i>
                                            </span> 
                                            Alamat : 
                                            <?php echo e($pegawai->alamat); ?>

                                        </li>

                                        <li class="">
                                            <span class="fa-li">
                                                <i class="fas fa-check"></i>
                                            </span> 
                                            Nomor Hp : 
                                            <?php echo e($pegawai->nomor_hp); ?>

                                        </li>


                                       
                                    </ul>
                                </div>
                                <div class="col-md-6 text-left">
                                    <img style="width: 30%" src="<?php echo e(url("public/$pegawai->foto")); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                               
                                <a href="<?php echo e(url("admin/pegawai/$pegawai->id")); ?>/edit" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
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
<?php /**PATH E:\Sistem\sibamida\resources\views/admin/pegawai/show.blade.php ENDPATH**/ ?>