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
    style="background-image: url(<?php echo e(url('public')); ?>/kantor.jpg);">
        <div class="brand-card text-center">
            <img src="<?php echo e(url('public/web')); ?>/assets/images/icon/wheat.png" alt="icon">
            <h3>Sibamida</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1>Contact Us</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Page-Banner Section ======-->
    <!--====== Start Contact Information section ======-->
    <section class="contact-information-one p-r z-1 pt-215 pb-130">
        <div class="information-img_one wow fadeInRight"><img
                src="<?php echo e(url('public')); ?>/kantor.jpg" alt="Imaged">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="contact-two_information-box">
                        <div class="section-title section-title-left mb-50 wow fadeInUp">
                            
                            <h2 style="margin-left: 7%; color: white">Kami Siap Membantu Anda! </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="information-item-two info-one mb-30 wow fadeInDown">
                                    <div class="icon">
                                        <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Locations</h5>
                                        <p style="font-size: 100%">Tengah, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78811</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="information-item-two mb-30 info-two wow fadeInUp">
                                    <div class="icon">
                                        <i class="far fa-envelope-open-text"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Email Address</h5>
                                        <p><a href="disparbud@ketapangkab.go.id">disparbud@ketapangkab.go.id</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="information-item-two mb-30 info-three wow fadeInDown">
                                    <div class="icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Phone Number</h5>
                                        <p><a href="tel:+62 896-1542-7022">+62 896-1542-7022</a></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Information section ======-->
    <!--====== Start Map section ======-->
    <section class="contact-page-map">
        <div class="map-box">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.812596785114!2d109.98644231405744!3d-1.8168321369457205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0518e6aef713bf%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1671195827915!5m2!1sid!2sid"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section><!--====== End Map section ======-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5bfc7eeb725fd60f41a76190ac432d4)): ?>
<?php $component = $__componentOriginald5bfc7eeb725fd60f41a76190ac432d4; ?>
<?php unset($__componentOriginald5bfc7eeb725fd60f41a76190ac432d4); ?>
<?php endif; ?>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/web/contact.blade.php ENDPATH**/ ?>