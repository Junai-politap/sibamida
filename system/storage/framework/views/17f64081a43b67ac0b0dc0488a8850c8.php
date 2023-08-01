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
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <?php if (isset($component)) { $__componentOriginal211193f73d013ad1f030860171096d7c = $component; } ?>
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'admin/master/bangunan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <h3 class="text-center title">Tambah Data Aset</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(url('admin/master/bangunan')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama OPD</label>
                                            <select name="id_opd" class="form-control" required>
                                                <option value=""> Pilih Organisasi Perangkat Daerah</option>
                                                <?php $__currentLoopData = $list_opd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($opd->id); ?>"><?php echo e($opd->nama_opd); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Penanggung Jawab</label>
                                            <select name="id_pegawai" class="form-control" required>
                                                <option value=""> Pilih Penanggung Jawab Aset</option>
                                                <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($pegawai->id); ?>"><?php echo e($pegawai->nama); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kode Barang</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Kode Barang"
                                                name="kode_barang" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Barang</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Barang"
                                                name="nama_barang" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori" required>
                                                <option value=""> Pilih Kategori Aset</option>
                                                <?php $__currentLoopData = $list_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($kategori->id); ?>">
                                                        <?php echo e($kategori->nama_kategori); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Register" name="no_register">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="year" class="form-control"
                                                placeholder="Masukkan Tahun Perolehan" name="tahun_perolehan">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Harga Perolehan" name="harga_perolehan">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Alamat</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Alamat"
                                                name="alamat">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Keterangan"
                                                name="keterangan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Sumber Dana</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nama Sumber Dana" name="nama_sumber_dana">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPPD</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor SPPD" name="no_sppd">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPK</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor SPK" name="no_spk">
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Berita Acara</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Nomor Berita Acara" name="no_ba">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Bertingkat</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukan Tingkat" name="bertingkat">
                                        </div>
                                    </div>

                                </div>

                               
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Dokumen</label>
                                            <input type="date" class="form-control"
                                                placeholder="Masukkan Tanggal Dokumen" name="tanggal_dokumen">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Status Tanah</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Status Tanah" name="status_tanah">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Beton</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Beton"
                                                name="beton">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kelompok</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Kelompok" name="kelompok">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Urut Kelompok</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukkan Urut Kelompok" name="urut_kelompok">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <input type="file" class="form-control"
                                                placeholder="Masukkan Foto Aset" name="foto"
                                                accept=".jpg, .png, .jpeg">
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
<?php if (isset($__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0)): ?>
<?php $component = $__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0; ?>
<?php unset($__componentOriginal2812d824e80b3a65bceda8e6a9bfa7a0); ?>
<?php endif; ?>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/admin/bangunan/create.blade.php ENDPATH**/ ?>