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
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'admin/admin'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <h3 class="card-title" style="font-family: bold">
                            <h2 class="text-center">Edit Data Suoer Admin</h2></h3>
                    </div>
                    <form action="<?php echo e(url('admin/admin', $admin->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo method_field("PUT"); ?>
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label> Nama </label>
                                <input type="text" class="form-control" name="nama" value="<?php echo e($admin->nama); ?>">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo e($admin->username); ?>">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                           
                            <div class="form-group">
                                <label>Poto</label>
                                <div class="row">
                                    <div class="col-md-6">

                                        <img src="<?php echo e(url("public/$admin->poto")); ?>" style="width:50%; ">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="poto" accept=".png, .jpg, .jpeg" value="<?php echo e($admin->poto); ?>">

                                    </div>
                                </div>
                            </div>
                            
                            <div class="footer mt-5">
                                
                                <button class="btn btn-primary float-right">Simpan</button>
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
<?php /**PATH D:\GitHub\sibamida\system\resources\views/admin/admin/edit.blade.php ENDPATH**/ ?>