<?php if (isset($component)) { $__componentOriginal851cb6f5a7f89db41449dadedd8953e5 = $component; } ?>
<?php $component = App\View\Components\Opd::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('opd'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Opd::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <?php if (isset($component)) { $__componentOriginal211193f73d013ad1f030860171096d7c = $component; } ?>
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'opd/ruangan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <h3 class="title text-center">Tambah Data Ruangan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(url('opd/ruangan')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <input type="text" name="id_opd" value="<?php echo e(Auth::guard('opd')->user()->id); ?>" hidden>
                                <div class="form-group">
                                    <label for="exampleInputText">Kode Ruangan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Kode Ruangan"
                                        name="kode_ruangan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText">Nama Ruangan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Ruangan"
                                        name="nama_ruangan">
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->

                <!-- /.card -->

            </div>
        </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal851cb6f5a7f89db41449dadedd8953e5)): ?>
<?php $component = $__componentOriginal851cb6f5a7f89db41449dadedd8953e5; ?>
<?php unset($__componentOriginal851cb6f5a7f89db41449dadedd8953e5); ?>
<?php endif; ?>
<?php /**PATH E:\Sistem\sibamida\resources\views/opd/ruangan/create.blade.php ENDPATH**/ ?>