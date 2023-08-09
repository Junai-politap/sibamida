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
                            <li class="active"><?php echo e($opd->nama_opd); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Page-Banner Section ======-->
    <!--====== Start Portfolio Grid Page ======-->
    <section class="project-grid-page p-r z-1 pt-170 pb-130" id="project-filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">Project Gallery</span>
                        <h2>We’ve Done Many Other Projects
                            Let’s See Gallery Insights</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="portfolio-filter-button text-center mb-60 wow fadeInDown">
                        <ul class="filter-btn">
                            <li class="active" data-filter="*">Show All</li>
                            <li data-filter=".cat-1">Peralatan</li>
                            <li data-filter=".cat-2">Jembatan</li>
                            <li data-filter=".cat-3">Tanah</li>
                            <li data-filter=".cat-4">Bangunan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row project-row">
                <?php $__currentLoopData = $list_peralatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peralatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-1">
                        <div class="project-item-three mb-30 wow fadeInUp">
                            <div class="img-holder">
                                <img src="<?php echo e(url("public/$peralatan->foto")); ?>" alt="">
                                <div class="hover-portfolio">
                                    <div class="icon-btn"><a href="portfolio-details.html"><i
                                                class="far fa-arrow-right"></i></a></div>
                                    <div class="hover-content">
                                        <h3 class="title"><a href="portfolio-details.html">Golder Wheat</a></h3>
                                        <p><a href="#">Agriculture</a>,<a href="#">Foods</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $list_jembatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jembatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-2">
                        <div class="project-item-three mb-30 wow fadeInDown">
                            <div class="img-holder">
                                <img src="<?php echo e(url("public/$jembatan->foto")); ?>" alt="">
                                <div class="hover-portfolio">
                                    <div class="icon-btn"><a href="portfolio-details.html"><i
                                                class="far fa-arrow-right"></i></a></div>
                                    <div class="hover-content">
                                        <h3 class="title"><a href="portfolio-details.html">Organic Grap</a></h3>
                                        <p><a href="#">Agriculture</a>,<a href="#">Foods</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $list_tanah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tanah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-3">
                    <div class="project-item-three mb-30 wow fadeInUp">
                        <div class="img-holder">
                            <img src="<?php echo e(url("public/$tanah->foto")); ?>" alt="">
                            <div class="hover-portfolio">
                                <div class="icon-btn"><a href="portfolio-details.html"><i
                                            class="far fa-arrow-right"></i></a></div>
                                <div class="hover-content">
                                    <h3 class="title"><a href="portfolio-details.html">Golder Wheat</a></h3>
                                    <p><a href="#">Agriculture</a>,<a href="#">Foods</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $list_bangunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bangunan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-4">
                    <div class="project-item-three mb-30 wow fadeInDown">
                        <div class="img-holder">
                            <img src="<?php echo e(url("public/$bangunan->foto")); ?>" alt="">
                            <div class="hover-portfolio">
                                <div class="icon-btn"><a href="portfolio-details.html"><i
                                            class="far fa-arrow-right"></i></a></div>
                                <div class="hover-content">
                                    <h3 class="title"><a href="portfolio-details.html">Golder Wheat</a></h3>
                                    <p><a href="#">Agriculture</a>,<a href="#">Foods</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section><!--====== End Portfolio Grid Page ======-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5bfc7eeb725fd60f41a76190ac432d4)): ?>
<?php $component = $__componentOriginald5bfc7eeb725fd60f41a76190ac432d4; ?>
<?php unset($__componentOriginald5bfc7eeb725fd60f41a76190ac432d4); ?>
<?php endif; ?>
<?php /**PATH D:\Github\sibamida\system\resources\views/web/aset.blade.php ENDPATH**/ ?>