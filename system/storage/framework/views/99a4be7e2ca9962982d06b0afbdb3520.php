<?php if (isset($component)) { $__componentOriginal347db4b87a67030074eb1f762cfda9c2 = $component; } ?>
<?php $component = App\View\Components\Staff::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('staff'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Staff::class))->getConstructor()): ?>
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
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'staff-administrasi/master/bangunan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <h3 class="text-center title">Data Data Aset Bangunan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(url('staff-administrasi/master/bangunan', $bangunan->id)); ?>" method="POST"
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
                                                <?php if( Auth::guard('staff')->user()->id_opd == $pegawai->id_opd): ?>
                                                    <option <?php if($pegawai->id == $bangunan->id_pegawai): ?> selected <?php endif; ?>
                                                        value="<?php echo e($pegawai->id); ?>">
                                                        <?php echo e($pegawai->nama); ?></option>
                                                        <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori</label>
                                            <select class="form-control" name="id_kategori">
                                                <?php $__currentLoopData = $list_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if( Auth::guard('staff')->user()->id_opd == $kategori->id_opd): ?>
                                                    <option <?php if($kategori->id == $bangunan->id_kategori): ?> selected <?php endif; ?>
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
                                            <label for="exampleInputText">Nama Bidang</label>
                                            <select class="form-control" name="id_bidang">
                                                <?php $__currentLoopData = $list_bidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bidang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if( Auth::guard('staff')->user()->id_opd == $bidang->id_opd): ?>
                                                    <option <?php if($bidang->id == $bangunan->id_bidang): ?> selected <?php endif; ?>
                                                        value="<?php echo e($bidang->id); ?>">
                                                        <?php echo e($bidang->nama_bidang); ?></option>
                                                        <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control" name="kode_barang"
                                                value="<?php echo e($bangunan->kode_barang); ?>">
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang"
                                                value="<?php echo e($bangunan->nama_barang); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control" name="no_register"
                                                value="<?php echo e($bangunan->no_register); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="year" class="form-control" name="tahun_perolehan"
                                                value="<?php echo e($bangunan->tahun_perolehan); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan</label>
                                            <input type="text" class="form-control" name="harga_perolehan"
                                                value="<?php echo e($bangunan->harga_perolehan); ?>">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Alamat</label>
                                            <input type="text" class="form-control" name="alamat"
                                                value="<?php echo e($bangunan->alamat); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan"
                                                value="<?php echo e($bangunan->keterangan); ?>">
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Sumber Dana</label>
                                            <input type="text" class="form-control" name="nama_sumber_dana"
                                                value="<?php echo e($bangunan->nama_sumber_dana); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPPD</label>
                                            <input type="text" class="form-control" name="no_sppd"
                                                value="<?php echo e($bangunan->no_sppd); ?>">
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPK</label>
                                            <input type="text" class="form-control" name="no_spk"
                                                value="<?php echo e($bangunan->no_spk); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Berita Acara</label>
                                            <input type="text" class="form-control" name="no_ba"
                                                value="<?php echo e($bangunan->no_ba); ?>">
                                        </div>
                                    </div>

                                </div>

                               

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Bertingkat</label>
                                            <input type="text" class="form-control" name="bertingkat"
                                                value="<?php echo e($bangunan->bertingkat); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Beton</label>
                                            <input type="text" class="form-control" name="beton"
                                                value="<?php echo e($bangunan->beton); ?>">
                                        </div>
                                    </div>
                                   


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Urut Kelompok</label>
                                            <input type="text" class="form-control" name="urut_kelompok"
                                                value="<?php echo e($bangunan->urut_kelompok); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kelompok</label>
                                            <input type="text" class="form-control" name="kelompok"
                                                value="<?php echo e($bangunan->kelompok); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="<?php echo e(url("public/$bangunan->foto")); ?>"
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
<?php if (isset($__componentOriginal347db4b87a67030074eb1f762cfda9c2)): ?>
<?php $component = $__componentOriginal347db4b87a67030074eb1f762cfda9c2; ?>
<?php unset($__componentOriginal347db4b87a67030074eb1f762cfda9c2); ?>
<?php endif; ?>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/staff-administrasi/bangunan/edit.blade.php ENDPATH**/ ?>