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
            <?php $__currentLoopData = $list_slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url(<?php echo e(url("public/$slide->foto")); ?>);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-content text-center">
                                <span class="tag-line" data-animation="fadeInDown" data-delay=".4s"></span>
                                <h1 style="font-size: 350%" data-animation="fadeInUp" data-delay=".5s">
                                    <?php echo e($slide->label); ?>

                                </h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
 
    <section class="fun-fact">
        <div class="mt-10 mb-20 fadeInUp text-center" style="color: black"><h2 style="color: black">Statistics</h2></div>
        <div class="container">
            <div class="counter-wrap-one wow fadeInDown">
                <div class="counter-inner-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count"><?php echo e($list_jembatan->count()); ?></span>+ <p style="font-size: 50%">Data Aset</p></h2>
                                    <p style="font-size: 120%">Jembatan dan Jalan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count"><?php echo e($list_peralatan->count()); ?></span>+ <p style="font-size: 50%">Data Aset</p></h2>
                                    <p style="font-size: 120%">Peralatan dan Mesin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count"><?php echo e($list_bangunan->count()); ?></span>+ <p style="font-size: 50%">Data Aset</p></h2>
                                    <p style="font-size: 120%">Bangunan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                            <div class="counter-inner">
                                <div class="text">
                                    <h2 class="number"><span class="count"><?php echo e($list_tanah->count()); ?></span>+ <p style="font-size: 50%">Data Aset</p></h2>
                                    <p style="font-size: 120%">Tanah</p>
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
<?php /**PATH D:\GitHub\sibamida\system\resources\views/web/index.blade.php ENDPATH**/ ?>