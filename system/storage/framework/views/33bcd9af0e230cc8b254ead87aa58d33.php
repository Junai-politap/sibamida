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

    <section class="page-banner bg_cover position-relative z-1"
        style="background-image: url(<?php echo e(url('public')); ?>/kantor.jpg);">
        <div class="brand-card text-center">

            <h3><?php echo e($tanah->opd->singkatan); ?></h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="cat-btn" style="font-size: 300%">Detail <?php echo e($tanah->nama_aset); ?></h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
                            <li class="active"><a href="<?php echo e(url("tanah/$tanah->id_opd")); ?>"> Data Aset tanah dan
                                    Jalan </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-details-page pt-170 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-details-wrapper mb-40 wow fadeInUp">
                        <div class="blog-post-item">
                            <div class="post-thumbnail">
                                <img src="<?php echo e(url("public/$tanah->foto")); ?>"
                                    style="object-fit: cover; position: static; width: 100%; height: 30%;">
                            </div>
                            <div class="post-content">
                                <div class="entry-content" style="text-align: center">
                                    <p class="cat-btn"><?php echo e($tanah->pegawai->nama); ?></p>
                                    <h3 class="title">
                                        <?php echo e($tanah->nama_barang); ?>

                                    </h3>

                                    <h3 style="font-size: 120%; margin-top: -2%">
                                         <?php if(isset($tanah->bidang->nama_bidang )): ?>
                                        BIDANG <?php echo e($tanah->bidang->nama_bidang); ?>

                                        <?php else: ?>
                                        <strong>DATA TIDAK ADA NAMA BIDANG</strong>
                                        <?php endif; ?>
                                    </h3>

                                    <div class="post-meta">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i><?php echo e($tanah->kategori->nama_kategori); ?>

                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <i class="far fa-check"></i><?php echo e($tanah->kode_barang); ?>

                                                </span>
                                            </li>
                                        </ul>
                                        <div id="test" style="width: 50%; margin-left: 32%"></div>
                                    </div>
                                </div>

                                <div class="post-thumbnail">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">

                                                <table class="table" style="width: 100%">
                                                    <thead>

                                                        <tr>
                                                            <td style="width: 40%">Nomor Register</td>
                                                            <td> : <?php echo e($tanah->register); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Cara Perolehan</td>
                                                            <td> : <?php echo e($tanah->cara_perolehan); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Tahun Perolehan</td>
                                                            <td> : <?php echo e($tanah->tahun_perolehan); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Harga Perolehan</td>
                                                            <td> : <?php echo e($tanah->harga); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Luas</td>
                                                            <td> : <?php echo e($tanah->luas); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Lokasi</td>
                                                            <td> : <?php echo e($tanah->lokasi); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Keterangan</td>
                                                            <td> : <?php echo e($tanah->keterangan); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Penggunaan</td>
                                                            <td> : <?php echo e($tanah->penggunaan); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 40%">Nomor Sertifikat</td>
                                                            <td> : <?php echo e($tanah->no_sertifikat); ?></td>
                                                        </tr>
                                                    </thead>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-widget-area">
                        <div class="widget search-widget mb-0 wow fadeInUp">
                            <p style="text-align: center; font-size: 140%"><strong>Data Riwayat Aset </strong></p>
                        </div>
                        <div class="sidebar-widget-area">
                            <?php $__currentLoopData = $list_riwayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $riwayat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="widget author-widget mb-10 wow fadeInUp">
                                    <div class="author-content">
                                        <img src="<?php echo e(url('public/', $riwayat->pegawai->foto)); ?>" alt="User Image">
                                        <h4>
                                            <?php echo e($riwayat->pegawai->nama); ?>

                                        </h4>
                                        <p>
                                            <?php echo nl2br($riwayat->keterangan); ?>

                                        </p>
                                        <ul class="social-link" style="color: white; font-size: 80%">
                                            <li>Tanggal Mulai</li>
                                            <li>: <?php echo e(date('d-m-Y', strtotime($riwayat->tanggal_mulai))); ?></li>

                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script>
    let 
    
    card = "Nama OPD: <?php echo e($tanah->opd->nama_opd); ?>\r\n";
        card += "Nama Penanggungjawab: <?php echo e($tanah->pegawai->nama); ?>\r\n";
        card += "Nama Bidang: <?php if(isset($tanah->bidang->nama_bidang )): ?><?php echo e($tanah->bidang->nama_bidang); ?><?php else: ?> DATA TIDAK ADA NAMA BIDANG <?php endif; ?>\r\n";
        card += "Kategori Barang : <?php echo e($tanah->kategori->nama_kategori); ?>\r\n";
        card += "Kode Barang : <?php echo e($tanah->kode_barang); ?>\r\n";
        card += "Nama Barang : <?php echo e($tanah->nama_barang); ?>\r\n";
        card += "Nomor Register : <?php echo e($tanah->no_register); ?>\r\n";
        card += "Harga Perolehan : <?php echo e($tanah->cara_perolehan); ?>\r\n";
        card += "Tahun Perolehan : <?php echo e($tanah->tahun_perolehan); ?>\r\n";
        card += "Harga : Rp. <?php echo e($tanah->harga); ?>\r\n";
        card += "Luas : <?php echo e($tanah->luas); ?>\r\n";
        card += "Keterangan : <?php echo e($tanah->keterangan); ?>\r\n";
        card += "Penggunaan : <?php echo e($tanah->penggunaan); ?>\r\n";
        card += "Nomor Sertifikat : <?php echo e($tanah->no_sertifikat); ?>\r\n";
   
    new QRCode(document.getElementById("test"), card);
</script><?php /**PATH D:\GitHub\sibamida\system\resources\views/web/show-tanah.blade.php ENDPATH**/ ?>