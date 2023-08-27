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
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <?php if (isset($component)) { $__componentOriginal211193f73d013ad1f030860171096d7c = $component; } ?>
<?php $component = App\View\Components\Button\BackButton::resolve(['url' => 'staff-administrasi/master/peralatan-mesin'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                <img src="<?php echo e(url("public/$peralatan->foto")); ?>" style="width:80%; height:auto"
                                    onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                            </div>

                            <div class="col-md-6 text-center">
                                <div id="test"></div>

                            </div>
                        </div>

                        <div class="row invoice-info mt-5">
                            <div class="col-sm-12 invoice-col">
                                <table class="table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>Nama OPD</td>
                                                <td> : <?php echo e($peralatan->opd->nama_opd); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Penanggung Jawab</td>
                                                <td> : <?php echo e($peralatan->pegawai->nama); ?></td>
                                            </tr>
    
                                            <tr>
                                                <td>Ruangan Barang</td>
                                                <td> :
                                                    <?php if(isset($peralatan->ruangan->nama_ruangan)): ?>
                                                        <?php echo e($peralatan->ruangan->nama_ruangan); ?>

                                                    <?php else: ?>
                                                        <strong>TIDAK ADA RUANGAN</strong>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <td>Nama Bidang</td>
                                                <td> :
                                                    <?php if(isset($peralatan->bidang->nama_bidang)): ?>
                                                        <?php echo e($peralatan->bidang->nama_bidang); ?>

                                                    <?php else: ?>
                                                        <strong>DATA TIDAK ADA NAMA BIDANG</strong>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kategori</td>
                                                <td> : <?php echo e($peralatan->kategori->nama_kategori); ?></td>
                                            </tr>
    
                                            <tr>
                                                <td>Kelompok</td>
                                                <td> : <?php echo e($peralatan->kelompok); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kode Barang</td>
                                                <td> : <?php echo e($peralatan->kode_barang); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Barang</td>
                                                <td> : <?php echo e($peralatan->nama_barang); ?></td>
                                            </tr>
    
    
                                            <tr>
                                                <td>Nomor Register</td>
                                                <td> : <?php echo e($peralatan->no_register); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Merk Barang</td>
                                                <td> : <?php echo e($peralatan->merk); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kondisi Barang</td>
                                                <td> :
                                                    <?php if(isset($peralatan->kondisi->nama_kondisi)): ?>
                                                        <?php echo e($peralatan->kondisi->nama_kondisi); ?>

                                                    <?php else: ?>
                                                        <strong>TIDAK ADA KONDISI</strong>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Perolehan</td>
                                                <td> : <?php echo e($peralatan->tahun_perolehan); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>
                                                <td> : <?php echo e($peralatan->keterangan); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Harga Perolehan</td>
                                                <td> : <?php echo e($peralatan->harga_perolehan); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor SPPD</td>
                                                <td> : <?php echo e($peralatan->no_sppd); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor SPK</td>
                                                <td> : <?php echo e($peralatan->no_spk); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Berita Acara</td>
                                                <td> : <?php echo e($peralatan->no_ba); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Serah Terima</td>
                                                <td> : <?php echo e($peralatan->tanggal_serah_terima); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Ekstrakomtable</td>
                                                <td> : <?php echo e($peralatan->ekstrakomtable); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td> : <?php echo e($peralatan->ukuran); ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Pabrik / Mesin / BPKB / Polisi / Rangka</td>
                                                <td> : <?php echo e($peralatan->no_pabrik); ?> / <?php echo e($peralatan->no_mesin); ?> /
                                                    <?php echo e($peralatan->no_bpkb); ?> / <?php echo e($peralatan->no_polisi); ?> /
                                                    <?php echo e($peralatan->no_rangka); ?></td>
                                            </tr>
                                            <tr>
                                                <td>keterangan 1</td>
                                                <td> : <?php echo e($peralatan->keterangan1); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Harga Perolehan 1</td>
                                                <td> : <?php echo e($peralatan->harga_perolehan1); ?></td>
                                            </tr>
                                        </thead>
                                    </table>
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

                                        <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?php echo e(url("staff-administrasi/peralatan-jalan/delete-riwayat/$riwayat->id")); ?>"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>


                                    </div>
                                </div>


                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <strong>Tanggal Mulai</strong>
                                            <p class="text-muted">
                                                <?php echo e(date('Y-m-d', strtotime($riwayat->tanggal_mulai))); ?>

                                            </p>
                                            <hr>
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Nama Penanggung Jawab</strong>
                                            <p class="text-muted"><?php echo e($riwayat->pegawai->nama); ?></p>
                                            <hr>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <strong>File SK</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-info" href="<?php echo e(url("public/$riwayat->sk")); ?>"
                                                target="_blank"><span class="fa fa-download"></span> File SK</a>

                                        </div>
                                    </div>
                                    <hr>
                                    <strong>Keterangan</strong>
                                    <p class="text-muted">
                                    <p>
                                        <?php echo nl2br( $riwayat->keterangan ); ?>

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
                                    <form action="<?php echo e(url('staff-administrasi/peralatan-jalan/update-riwayat', $riwayat->id)); ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="card-body">

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Nama OPD</label>
                                                    <div class="col-sm-9">
                                                        <select name="id_pegawai" class="form-control">
                                                            <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(Auth::guard('staff')->user()->id_opd == $pegawai->id_opd): ?>
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
                                                        <input type="text" class="form-control" name="tanggal_mulai"
                                                            value="<?php echo e($riwayat->tanggal_mulai); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-form-label">
                                                        File SK
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="sk"
                                                            accept="application/pdf" value="<?php echo e($riwayat->sk); ?>">
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
                        <form action="<?php echo e(url('staff-administrasi/peralatan-jalan/riwayat')); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <input type="text" value="<?php echo e($peralatan->id); ?>" name="id_aset" hidden>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputText">Nama Pegawai</label>
                                        <select class="form-control" name="id_pegawai" required>
                                            <option value=""> Pilih Nama Pegawai</option>
                                            <?php $__currentLoopData = $list_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(Auth::guard('staff')->user()->id_opd == $pegawai->id_opd): ?>
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
                                <label for="exampleInputText"> File SK</label>
                                <input type="file" class="form-control" name="sk" accept="application/pdf"
                                    required>
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
        
        card = "Nama OPD: <?php echo e($peralatan->opd->nama_opd); ?>\r\n";
        card += "Nama Penanggungjawab: <?php echo e($peralatan->pegawai->nama); ?>\r\n";
        card += "Kategori Barang : <?php echo e($peralatan->kategori->nama_kategori); ?>\r\n";
        card +=
            "Nama Bidang: <?php if(isset($peralatan->bidang->nama_bidang)): ?><?php echo e($peralatan->bidang->nama_bidang); ?><?php else: ?> TIDAK ADA NAMA BIDANG <?php endif; ?>\r\n";
        card +=
            "Nama Ruangan: <?php if(isset($peralatan->ruangan->nama_ruangan)): ?><?php echo e($peralatan->ruangan->nama_ruangan); ?><?php else: ?> TIDAK ADA RUANGAN <?php endif; ?>\r\n";
        card += "Kode Barang : <?php echo e($peralatan->kode_barang); ?>\r\n";
        card += "Nama Barang : <?php echo e($peralatan->nama_barang); ?>\r\n";
        card += "Nomor Register : <?php echo e($peralatan->no_register); ?>\r\n";
        card += "Tahun Perolehan : <?php echo e($peralatan->tahun_perolehan); ?>\r\n";
        card += "Harga Perolehan : Rp. <?php echo e($peralatan->harga_perolehan); ?>\r\n";
        card += "Keterangan : <?php echo e($peralatan->keterangan); ?>\r\n";
        card += "Nomor SPPD : <?php echo e($peralatan->no_sppd); ?>\r\n";
        card += "Nomor SPK : <?php echo e($peralatan->no_spk); ?>\r\n";
        card += "Nomor Berita Acara : <?php echo e($peralatan->no_ba); ?>\r\n";
        card += "Tanggal Serah Terima : <?php echo e($peralatan->tanggal_serah_terima); ?>\r\n";
        card += "Merk : <?php echo e($peralatan->merk); ?>\r\n";
        card +=
            "Kondisi: <?php if(isset($peralatan->kondisi->nama_kondisi)): ?><?php echo e($peralatan->kondisi->nama_kondisi); ?><?php else: ?> TIDAK ADA KONDISI <?php endif; ?>\r\n";
        card += "Ukuran : <?php echo e($peralatan->ukuran); ?>\r\n";
        card += "Nomor Pabrik : <?php echo e($peralatan->no_pabrik); ?>\r\n";
        card += "Nomor Mesin : <?php echo e($peralatan->no_mesin); ?>\r\n";
        card += "Nomor BPKB : <?php echo e($peralatan->no_bpkb); ?>\r\n";
        card += "Nomor Polisi : <?php echo e($peralatan->no_polisi); ?>\r\n";
        card += "Nomor Rangka : <?php echo e($peralatan->no_rangka); ?>\r\n";
        card += "Keterangan 1 : <?php echo e($peralatan->keterangan1); ?>\r\n";
        card += "Ekstrakomtable : <?php echo e($peralatan->ekstrakomtable); ?>\r\n";
        card += "Kelompok : <?php echo e($peralatan->kelompok); ?>\r\n";
        card += "Harga Perolehan 1 : Rp. <?php echo e($peralatan->harga_perolehan1); ?>\r\n";
        
        
        new QRCode(document.getElementById("test"), card);
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal347db4b87a67030074eb1f762cfda9c2)): ?>
<?php $component = $__componentOriginal347db4b87a67030074eb1f762cfda9c2; ?>
<?php unset($__componentOriginal347db4b87a67030074eb1f762cfda9c2); ?>
<?php endif; ?>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/staff-administrasi/peralatan-mesin/show.blade.php ENDPATH**/ ?>