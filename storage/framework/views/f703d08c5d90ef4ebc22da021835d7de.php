<?php if (isset($component)) { $__componentOriginal851cb6f5a7f89db41449dadedd8953e5 = $component; } ?>
<?php $component = App\View\Components\Opd::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('opd'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Opd::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="font-family: bold">Info Pegawai</h3>
        </div>
        <div class="card-body">
            <?php if (isset($component)) { $__componentOriginal211193f73d013ad1f030860171096d7c = $component; } ?>
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'opd/pegawai'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            <div class="row">
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="lead"><b><?php echo e($pegawai->nama); ?></b></h2>
                            <p class="text-muted text-sm"><b>Jabatan: </b> <?php echo e($pegawai->jabatan); ?> </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted">
                                <li class="small"> Username : <?php echo e($pegawai->username); ?></li>
                                <li class="small"> NIK : <?php echo e($pegawai->nik); ?></li>
                                <li class="small"> NIP : <?php echo e($pegawai->nip); ?></li>
                                <li class="small"> Adress : <?php echo e($pegawai->alamat); ?></li>
                                <li class="small"> Phone : <?php echo e($pegawai->nomor_hp); ?></li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="<?php echo e(url("public/$pegawai->pegawai")); ?>" style="width:70%; height:70%;"
                                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal851cb6f5a7f89db41449dadedd8953e5)): ?>
<?php $component = $__componentOriginal851cb6f5a7f89db41449dadedd8953e5; ?>
<?php unset($__componentOriginal851cb6f5a7f89db41449dadedd8953e5); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\sibamida\system\resources\views/opd/pegawai/show.blade.php ENDPATH**/ ?>