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


    <!--====== Start Page-Banner Section ======-->
    <section class="page-banner bg_cover p-r z-1"
        style="background-image: url(<?php echo e(url('public/web')); ?>/assets/images/bg/page-bg-1.jpg);">
        <div class="brand-card text-center">
            <img src="<?php echo e(url('public/web')); ?>/assets/images/icon/wheat.png" alt="icon">
            <h3>Orgarium</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1>Assets</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><?php echo e($opd->singkatan); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Page-Banner Section ======-->
    <section class="project-grid-page p-r z-1 pt-170 pb-130" id="project-filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">Master Aset</span>
                        <h2>Info Seluruh Data Peralatan</h2>
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
                                    <?php $__currentLoopData = $list_peralatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peralatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                            <td class="text-left"> <?php echo e($peralatan->kode_barang); ?></td>
                                            <td class=""><?php echo e($peralatan->nama_barang); ?></td>
                                            <td class=""><?php echo e($peralatan->pegawai->nama); ?></td>
                                            <td>
                                                <a href="" data-toggle="modal"
                                                data-target="#Qrcode"><p>Lihat QrCode</p></a>
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
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img class="img-responsive" src="<?php echo e(url('public/admin')); ?>/logo.png"
                    style="width: 100%; height: 50%; object-fit: cover" alt="" />
                    <button type="button" class="btn btn-warning btn-xl" data-dismiss="modal" aria-label="Close">
                        <span class="icofont-close">Close</span>
                    </button>
            </div>
            <div class="modal-body">
                <ul class="single-blog-list">
                    <li>
                        <div class="post-wrap">
                            <div class="post-text">
                                <h3></h3>
                                <p>

                                </p>
                            </div>
                        </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Github\sibamida\system\resources\views/web/peralatan.blade.php ENDPATH**/ ?>