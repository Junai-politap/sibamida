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
    style="background-image: url(<?php echo e(url('public')); ?>/kantor.jpg);">
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
                <div class="col-md-12">
                    <div class="body">
                        <div class="header">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><span
                                    class="fa fa-search"></span> Filter Aset Investasi Daerah</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Barang</th>
                                        <th class="text-center">Nama Barang</th>
                                        <th class="text-center">Nama Penanggungjawab</th>
                                        <th class="text-center"> Harga Perolehan</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $list_bangunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bangunan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                            <td class="text-left"> <?php echo e($bangunan->kode_barang); ?></td>
                                            <td class=""><?php echo e($bangunan->nama_barang); ?></td>
                                            <td class=""><?php echo e($bangunan->pegawai->jabatan); ?></td>
                                            <td class="">Rp. <?php echo e($bangunan->harga_perolehan); ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo e(url("detail-bangunan/$bangunan->id")); ?>" class="btn btn-info"><span class="fa fa-info"></span> Detail Aset</a>
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
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Filter Data Aset Investasi Daerah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(url("bangunan/$bangunan->id_opd")); ?>/filter-bangunan" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Barang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_barang" value="<?php echo e($nama_barang ?? ''); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-warning" data-dismiss="modal"><span class="fa fa-times"></span> Batal</button>
                        <button class="btn btn-primary"><span class="fa fa-search"></span> Cari</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5bfc7eeb725fd60f41a76190ac432d4)): ?>
<?php $component = $__componentOriginald5bfc7eeb725fd60f41a76190ac432d4; ?>
<?php unset($__componentOriginald5bfc7eeb725fd60f41a76190ac432d4); ?>
<?php endif; ?>

<?php /**PATH D:\GitHub\sibamida\system\resources\views/web/bangunan.blade.php ENDPATH**/ ?>