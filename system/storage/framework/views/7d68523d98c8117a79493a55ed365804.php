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
                        <h2 style="color: white">Master Data Aset</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="shaop-page pt-170 pb-70">
        <div class="container">
            <div class="products-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="single-product-item mb-60 wow fadeInUp">
                            <div class="product-img">
                                <img src="<?php echo e(url('public')); ?>/jembatan.png" style="width: 50%">
                                <div class="pc-btn"><?php echo e($list_jembatan->count()); ?> Data Aset</div>
                                <div class="cart-button">
                                    <a href="<?php echo e(url("jembatan/$opd->id")); ?>" class="main-btn btn-yellow">
                                        Lihat Detail Aset
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">

                                <h3 class="title">
                                    <a href="<?php echo e(url("jembatan/$opd->id")); ?>">
                                        Jembatan dan Jalan
                                    </a>
                                </h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="single-product-item mb-60 wow fadeInUp">
                            <div class="product-img">
                                <img src="<?php echo e(url('public')); ?>/alat.png" style="width: 50%">
                                <div class="pc-btn"><?php echo e($list_bangunan->count()); ?> Data Aset</div>
                                <div class="cart-button">
                                    <a href="<?php echo e(url("peralatan/$opd->id")); ?>" class="main-btn btn-yellow">
                                        Lihat Detail Aset
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">

                                <h3 class="title">
                                    <a href="<?php echo e(url("peralatan/$opd->id")); ?>">
                                        Peralatan dan Mesin
                                    </a>
                                </h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="single-product-item mb-60 wow fadeInUp">
                            <div class="product-img">
                                <img src="<?php echo e(url('public')); ?>/bangunan.png" style="width: 50%">
                                <div class="pc-btn"><?php echo e($list_peralatan->count()); ?></div>
                                <div class="cart-button">
                                    <a href="<?php echo e(url("bangunan/$opd->id")); ?>" class="main-btn btn-yellow">
                                        Lihat Detail Aset
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">

                                <h3 class="title">
                                    <a href="<?php echo e(url("bangunan/$opd->id")); ?>">
                                        Bangunan
                                    </a>
                                </h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="single-product-item mb-60 wow fadeInUp">
                            <div class="product-img">
                                <img src="<?php echo e(url('public')); ?>/tanah.png" style="width: 50%">
                                <div class="pc-btn"><?php echo e($list_tanah->count()); ?> Data Aset</div>
                                <div class="cart-button">
                                    <a href="<?php echo e(url("tanah/$opd->id")); ?>" class="main-btn btn-yellow">
                                        Lihat Detail Aset
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">

                                <h3 class="title">
                                    <a href="<?php echo e(url("tanah/$opd->id")); ?>">
                                        Tanah
                                    </a>
                                </h3>
                                
                            </div>
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
<?php /**PATH D:\Github\sibamida\system\resources\views/web/aset.blade.php ENDPATH**/ ?>