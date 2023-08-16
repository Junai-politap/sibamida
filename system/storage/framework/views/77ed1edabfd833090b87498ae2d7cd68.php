<?php if (isset($component)) { $__componentOriginald5bfc7eeb725fd60f41a76190ac432d4 = $component; } ?>
<?php $component = App\View\Components\Web::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('web'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Web::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php echo $__env->make('menu.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <section class="page-banner bg_cover p-r z-1"
    style="background-image: url(<?php echo e(url('public/web')); ?>/assets/images/bg/page-bg-1.jpg);">
    <div class="brand-card text-center">

        <h3><?php echo e($opd->singkatan); ?></h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h2 style="color: white">Data Aset Bangunan</h2>
                    <ul class="breadcrumbs-link">
                        <li><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
                        <li class="active"><a href="<?php echo e(url("master-aset/$opd->id")); ?>">Data Aset</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="project-grid-page p-r z-1 pt-170 pb-130" id="project-filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">Master Aset</span>
                        <h2>Info Seluruh Data Bangunan</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Aset</th>
                                        <th class="text-center">Nama Aset</th>
                                        <th class="text-center">Nama Penanggungjawab</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $list_bangunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bangunan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                            <td class="text-left"> <?php echo e($bangunan->kode_barang); ?></td>
                                            <td class=""><?php echo e($bangunan->nama_barang); ?></td>
                                            <td class=""><?php echo e($bangunan->pegawai->nama); ?></td>
                                            <td class="text-center">
                                                <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#Qrcode">Lihat QrCode</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5bfc7eeb725fd60f41a76190ac432d4)): ?>
<?php $component = $__componentOriginald5bfc7eeb725fd60f41a76190ac432d4; ?>
<?php unset($__componentOriginald5bfc7eeb725fd60f41a76190ac432d4); ?>
<?php endif; ?>

<div class="modal fade" id="Qrcode" tabindex="-1" role="dialog"
    aria-labelledby="Qrcode" aria-hidden="true">
    <div class="modal-dialog modal-md " role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <button class="btn btn-warning float-right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times; Close</span>
                </button>
            </div>
            <div class="modal-body">
               <div class="card">
                <div class="card-body">
                    <div id="test" style="width: 60%; margin-left:20%"></div>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        let 
        <?php $__currentLoopData = $list_bangunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bangunan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
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
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        new QRCode(document.getElementById("test"), card);
    </script><?php /**PATH E:\Sistem\sibamida\system\resources\views/web/bangunan.blade.php ENDPATH**/ ?>