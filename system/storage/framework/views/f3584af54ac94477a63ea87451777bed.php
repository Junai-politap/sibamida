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
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <?php if (isset($component)) { $__componentOriginal211193f73d013ad1f030860171096d7c = $component; } ?>
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'opd/master/bangunan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <h3 class="text-center title">Info Assets</h3>


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6  text-center">
                                <img src="<?php echo e(url("public/$bangunan->foto")); ?>" style="width:80%; height:auto"
                                    onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                            </div>

                            <div class="col-md-6 text-center">
                                <div id="test"></div>

                            </div>
                        </div>

                        <div class="row invoice-info mt-5">
                            <div class="col-sm-12 invoice-col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Nama OPD</td>
                                            <td> : <?php echo e($bangunan->opd->nama_opd); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Kategori</td>
                                            <td> : <?php echo e($bangunan->kategori->nama_kategori); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Penanggung Jawab</td>
                                            <td> : <?php echo e($bangunan->pegawai->nama); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kode Barang</td>
                                            <td> : <?php echo e($bangunan->kode_barang); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Barang</td>
                                            <td> : <?php echo e($bangunan->nama_barang); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Register</td>
                                            <td> : <?php echo e($bangunan->no_register); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Perolehan</td>
                                            <td> : <?php echo e($bangunan->tahun_perolehan); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga Perolehan</td>
                                            <td> : <?php echo e($bangunan->harga_perolehan); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td> : <?php echo e($bangunan->alamat); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td> : <?php echo e($bangunan->keterangan); ?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Nama Sumber Dana</td>
                                            <td> : <?php echo e($bangunan->nama_sumber_dana); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor SPPD</td>
                                            <td> : <?php echo e($bangunan->no_sppd); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor SPK</td>
                                            <td> : <?php echo e($bangunan->no_spk); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Berita Acara</td>
                                            <td> : <?php echo e($bangunan->no_ba); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bertingkat</td>
                                            <td> : <?php echo e($bangunan->bertingkat); ?></td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>Beton</td>
                                            <td> : <?php echo e($bangunan->beton); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Urut Kelompok</td>
                                            <td> : <?php echo e($bangunan->urut_kelompok); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kelompok</td>
                                            <td> : <?php echo e($bangunan->kelompok); ?></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Assets</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <?php $__currentLoopData = $riwayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $riwayat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card-body p-0">
                            <div class="card">
                                <div class="card-header">
                                    <div class="btn-group float-right">
                                        <button class="btn btn-warning" data-toggle="modal"
                                            data-target="#modal-edit<?php echo e($riwayat->id); ?>">
                                            <span class="fa fa-edit"></span>
                                        </button>

                                        <a onclick="return confirm('Yakin ingin menghapus data ini?')"
                                            href="<?php echo e(url("opd/bangunan/delete-riwayat/$riwayat->id")); ?>"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>


                                    </div>
                                </div>


                                <div class="card-body">
                                    <strong>Tanggal Mulai</strong>
                                    <p class="text-muted">
                                        <?php echo e(date("d-F-Y", strtotime($riwayat->tanggal_mulai))); ?>

                                    </p>
                                    <hr>
                                    <strong>Nama Penanggung Jawab</strong>
                                    <p class="text-muted"><?php echo e($riwayat->pegawai->nama); ?></p>
                                    <hr>
                                    <strong>Keterangan</strong>
                                    <p class="text-muted">
                                    <p>
                                        <?php echo nl2br($riwayat->keterangan ); ?>

                                    </p>
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal-edit<?php echo e($riwayat->id); ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Data Kategori</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo e(url('opd/bangunan/update-riwayat', $riwayat->id)); ?>" method="POST">
                                        <div class="modal-body">

                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="card-body">

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Nama OPD</label>
                                                    <div class="col-sm-9">
                                                        <select name="id_pegawai" class="form-control">
                                                            <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($pegawai->id_opd == $bangunan->opd->id): ?>
                                                                    <option
                                                                        <?php if($pegawai->id == $riwayat->id_pegawai): ?> selected <?php endif; ?>
                                                                        value="<?php echo e($pegawai->id); ?>">
                                                                        <?php echo e($pegawai->nama); ?></option>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">
                                                        Tanggal Mulai
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" name="tanggal_mulai"
                                                            value="<?php echo e(date("Y-m-d", strtotime($riwayat->tanggal_mulai))); ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">
                                                        Keterangan
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <textarea class="summernote" name="keterangan"><?php echo e($riwayat->keterangan); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <button class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Riwayat </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('opd/bangunan/riwayat')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <input type="text" value="<?php echo e($bangunan->id); ?>" name="id_aset" hidden>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputText">Nama Pegawai</label>
                                        <select class="form-control" name="id_pegawai" required>
                                            <option value=""> Pilih Nama Pegawai</option>
                                            <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($pegawai->id_opd == $bangunan->opd->id): ?>
                                                    <option value="<?php echo e($pegawai->id); ?>"><?php echo e($pegawai->nama); ?>

                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputText">Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="tanggal_mulai" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputText">Keterangan</label>

                                <textarea class="summernote" name="keterangan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        let 
        
        card = "Nama OPD: <?php echo e($bangunan->opd->nama_opd); ?>\r\n";
        card += "Nama Penanggungjawab: <?php echo e($bangunan->pegawai->nama); ?>\r\n";
        card += "Kategori Barang : <?php echo e($bangunan->kategori->nama_kategori); ?>\r\n";
        card += "Kode Barang : <?php echo e($bangunan->kode_barang); ?>\r\n";
        card += "Nama Barang : <?php echo e($bangunan->nama_barang); ?>\r\n";
        card += "Nomor Register : <?php echo e($bangunan->no_register); ?>\r\n";
        card += "Tahun Perolehan : <?php echo e($bangunan->tahun_perolehan); ?>\r\n";
        card += "Harga Perolehan :Rp. <?php echo e($bangunan->harga_perolehan); ?>\r\n";
        card += "Keterangan : <?php echo e($bangunan->keterangan); ?>\r\n";
        card += "Alamat : <?php echo e($bangunan->alamat); ?>\r\n";
        card += "Kecamatan : <?php echo e($bangunan->kecamatan); ?>\r\n";
        card += "Kelurahan Desa : <?php echo e($bangunan->kelurahan_desa); ?>\r\n";
        card += "Nomor SPPD : <?php echo e($bangunan->no_sppd); ?>\r\n";
        card += "Nomor SPK : <?php echo e($bangunan->no_spk); ?>\r\n";
        card += "Nomor Berita Acara : <?php echo e($bangunan->no_ba); ?>\r\n";
        
        
        new QRCode(document.getElementById("test"), card);
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal851cb6f5a7f89db41449dadedd8953e5)): ?>
<?php $component = $__componentOriginal851cb6f5a7f89db41449dadedd8953e5; ?>
<?php unset($__componentOriginal851cb6f5a7f89db41449dadedd8953e5); ?>
<?php endif; ?>
<?php /**PATH D:\Github\sibamida\system\resources\views/opd/bangunan/show.blade.php ENDPATH**/ ?>