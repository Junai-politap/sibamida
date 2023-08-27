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
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'staff-administrasi/master/jembatan-jalan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <h3 class="text-center title">Edit Data Aset Jembatan dan Jalan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(url('staff-administrasi/master/jembatan-jalan', $jembatan->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <input type="text" name="id_opd" value="<?php echo e(Auth::guard('staff')->user()->id_opd); ?>"
                                    hidden>
                                <div class="form-group">
                                    <label for="exampleInputText">Nama Penanggung Jawab</label>
                                    <select name="id_pegawai" class="form-control" >
                                        <option value=""> Pilih Penanggung Jawab Aset</option>
                                        <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(Auth::guard('staff')->user()->id_opd == $pegawai->id_opd): ?>
                                            <option <?php if($pegawai->id == $jembatan->id_pegawai): ?> selected <?php endif; ?>
                                                value="<?php echo e($pegawai->id); ?>">
                                                <?php echo e($pegawai->nama); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Bidang</label>
                                            <select class="form-control" name="id_bidang" >
                                                
                                                <?php $__currentLoopData = $list_bidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bidang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(Auth::guard('staff')->user()->id_opd == $bidang->id_opd): ?>
                                                    <option <?php if($bidang->id == $jembatan->id_bidang): ?> selected <?php endif; ?>
                                                        value="<?php echo e($bidang->id); ?>">
                                                        <?php echo e($bidang->nama_bidang); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kategori Aset</label>
                                            <select class="form-control" name="id_kategori" >
                                                
                                                <?php $__currentLoopData = $list_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(Auth::guard('staff')->user()->id_opd == $kategori->id_opd): ?>
                                                    <option <?php if($kategori->id == $jembatan->id_kategori): ?> selected <?php endif; ?>
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
                                            <label for="exampleInputText">Kode Aset</label>
                                            <input type="text" class="form-control" value="<?php echo e($jembatan->kode_aset); ?>" placeholder="Masukkan Kode Aset"
                                                name="kode_aset" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Aset</label>
                                            <input type="text" class="form-control" value="<?php echo e($jembatan->nama_aset); ?>" placeholder="Masukkan Nama Aset"
                                                name="nama_aset" >
                                        </div>
                                    </div>
                                </div>
                               

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Register</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->no_register); ?>" placeholder="Masukkan Nomor Register" name="no_register">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tahun Perolehan</label>
                                            <input type="year" class="form-control"
                                                value="<?php echo e($jembatan->tahun_perolehan); ?>" placeholder="Masukkan Tahun Perolehan" name="tahun_perolehan">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Harga Perolehan</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->harga_perolehan); ?>" placeholder="Masukkan Harga Perolehan" name="harga_perolehan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Alamat</label>
                                            <input type="text" class="form-control" value="<?php echo e($jembatan->alamat); ?>" placeholder="Masukkan Alamat"
                                                name="alamat">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Keterangan</label>
                                            <input type="text" class="form-control" value="<?php echo e($jembatan->keterangan); ?>" placeholder="Masukkan Keterangan"
                                                name="keterangan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Kondisi</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->nama_kondisi); ?>" placeholder="Masukkan Nama Kondisi" name="nama_kondisi">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nama Sumber Dana</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->nama_sumber_dana); ?>" placeholder="Masukkan Nama Sumber Dana" name="nama_sumber_dana">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPPD</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->no_sppd); ?>" placeholder="Masukkan Nomor SPPD" name="no_sppd">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor SPK</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->no_spk); ?>" placeholder="Masukkan Nomor SPK" name="no_spk">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Berita Acara</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->no_ba); ?>" placeholder="Masukkan Nomor Berita Acara" name="no_ba">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Serah Terima</label>
                                            <input type="date" class="form-control"
                                                value="<?php echo e($jembatan->tanggal_serah_terima); ?>" placeholder="Masukkan Tanggal Serah Terima"
                                                name="tanggal_serah_terima">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Jenis Kontruksi</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->kontruksi); ?>" placeholder="Masukkan Jenis Kontruksi" name="kontruksi">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Panjang </label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->panjang); ?>" placeholder="Masukkan Panjang " name="panjang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lebar </label>
                                            <input type="text" class="form-control" value="<?php echo e($jembatan->lebar); ?>" placeholder="Masukkan Lebar "
                                                name="lebar">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Luas</label>
                                            <input type="text" class="form-control" value="<?php echo e($jembatan->luas); ?>" placeholder="Masukkan Luas"
                                                name="luas">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Dokumen</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->nomor_dokumen); ?>" placeholder="Masukkan Nomor Dokumen" name="nomor_dokumen">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Tanggal Dokumen</label>
                                            <input type="date" class="form-control"
                                                value="<?php echo e($jembatan->tanggal_dokumen); ?>" placeholder="Masukkan Tanggal Dokumen" name="tanggal_dokumen">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Status Tanah</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->status_tanah); ?>" placeholder="Masukkan Status Tanah" name="status_tanah">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Nomor Tanah</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->nomor_tanah); ?>" placeholder="Masukkan Nomor Tanah" name="nomor_tanah">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Lokasi</label>
                                            <input type="text" class="form-control" value="<?php echo e($jembatan->lokasi); ?>" placeholder="Masukkan Lokasi"
                                                name="lokasi">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Header</label>
                                            <input type="text" class="form-control" value="<?php echo e($jembatan->header); ?>" placeholder="Masukkan Header"
                                                name="header">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Urut Kelompok</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->urut_kelompok); ?>" placeholder="Masukkan Urut Kelompok" name="urut_kelompok">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Kelompok</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo e($jembatan->kelompok); ?>" placeholder="Masukkan Kelompok" name="kelompok">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputText">Foto</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="<?php echo e(url("public/$jembatan->foto")); ?>"
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
<?php /**PATH E:\Sistem\sibamida\system\resources\views/staff-administrasi/jembatan-jalan/edit.blade.php ENDPATH**/ ?>