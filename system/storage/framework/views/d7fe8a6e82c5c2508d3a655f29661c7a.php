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
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'opd/master/tanah'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <h3 class="text-center title">Edit Data Aset Tanah</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(url('opd/master/tanah', $tanah->id)); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("PUT"); ?>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Penanggung Jawab</label>
                                            <select name="id_pegawai" class="form-control">
                                                <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if( Auth::guard('opd')->user()->id == $pegawai->id_opd): ?>
                                                    <option <?php if($pegawai->id == $tanah->id_pegawai): ?> selected <?php endif; ?>
                                                        value="<?php echo e($pegawai->id); ?>">
                                                        <?php echo e($pegawai->nama); ?></option>
                                                        <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori">
                                                <?php $__currentLoopData = $list_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if( Auth::guard('opd')->user()->id == $kategori->id_opd): ?>
                                                    <option <?php if($kategori->id == $tanah->id_kategori): ?> selected <?php endif; ?>
                                                        value="<?php echo e($kategori->id); ?>">
                                                        <?php echo e($kategori->nama_kategori); ?></option>
                                                        <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control" name="kode_barang"
                                                value="<?php echo e($tanah->kode_barang); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang"
                                                value="<?php echo e($tanah->nama_barang); ?>">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control" name="register"
                                                value="<?php echo e($tanah->register); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Cara Perolehan</label>
                                            <input type="year" class="form-control" name="cara_perolehan"
                                                value="<?php echo e($tanah->cara_perolehan); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="text" class="form-control" name="tahun_perolehan"
                                                value="<?php echo e($tanah->tahun_perolehan); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga</label>
                                            <input type="text" class="form-control" name="harga"
                                                value="<?php echo e($tanah->harga); ?>">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Luas</label>
                                            <input type="text" class="form-control" name="luas"
                                                value="<?php echo e($tanah->luas); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi"
                                                value="<?php echo e($tanah->lokasi); ?>">
                                        </div>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan"
                                                value="<?php echo e($tanah->keterangan); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Penggunaan</label>
                                            <input type="text" class="form-control" name="penggunaan"
                                                value="<?php echo e($tanah->penggunaan); ?>">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Sertifikat</label>
                                            <input type="text" class="form-control" name="no_sertifikat"
                                                value="<?php echo e($tanah->no_sertifikat); ?>">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="<?php echo e(url("public/$tanah->foto")); ?>"
                                                        style="width: 100%">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="file" class="form-control" name="foto"
                                                        accept=".jpg, .png, .jpeg">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="footer">
                                    <button type="reset" class="btn btn-default "><span class="fa fa-times"></span>
                                        Batal</button>
                                    <button type="submit" class="btn btn-primary float-right"><span
                                            class="fa fa-save"></span>
                                        Simpan</button>
                                </div>

                            </div>
                        </form>

                    </div>
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
<?php /**PATH E:\Sistem\sibamida\system\resources\views/opd/tanah/edit.blade.php ENDPATH**/ ?>