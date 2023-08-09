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

    <section class="hero-area-one">
        <div class="hero-slider-one">
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url(<?php echo e(url('public/web')); ?>/assets/images/hero/hero_one-slider-1.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Organic Farms</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Agriculture &
                                    Organic Farms</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url(<?php echo e(url('public/web')); ?>/assets/images/hero/hero_one-slider-2.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Organic Farms</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Welcome to
                                    Organic Farms</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url(<?php echo e(url('public/web')); ?>/assets/images/hero/hero_one-slider-3.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Organic Farms</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Organic & Fresh
                                    Testy Foods</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url(<?php echo e(url('public/web')); ?>/assets/images/hero/hero_one-slider-4.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Organic Farms</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Welcome to
                                    Organic Farms</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fun-fact">
        <div class="big-text mb-105 wow fadeInUp"><h2>Statistics</h2></div>
        <div class="container">
            <div class="counter-wrap-one wow fadeInDown">
                <div class="counter-inner-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count"><?php echo e($list_peralatan->count()); ?></span>+</h2>
                                    <p>Peralatan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count"><?php echo e($list_bangunan->count()); ?></span>+</h2>
                                    <p>Bangunan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count"><?php echo e($list_tanah->count()); ?></span>+</h2>
                                    <p>Tanah</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count"><?php echo e($list_jembatan->count()); ?></span>+</h2>
                                    <p>Jembatan</p>
                                </div>
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
<?php /**PATH D:\Github\sibamida\system\resources\views/web/index.blade.php ENDPATH**/ ?>