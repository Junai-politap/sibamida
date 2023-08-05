<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBAMIDA | Kab.Ketapang</title>

    <link rel="icon" href="<?php echo e(url('public/admin')); ?>/logo.png" type="image/x-icon">
    <link rel="icon" href="<?php echo e(url('public/admin')); ?>/logo.png" type="image/x-icon">
    <link rel="manifest" href="<?php echo e(url('public/web')); ?>/assets/images/favicon/site.webmanifest">

    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600,700,800%7CUbuntu:400,500,700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/hover-min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/scubo-icons.css">

    
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/responsive.css">
</head>

<body>
    <div class="preloader">
        <img src="<?php echo e(url('public/web')); ?>/assets/images/preloader.png" class="preloader__image" alt="">
    </div>
    <div class="page-wrapper">

        <?php if (isset($component)) { $__componentOriginal7a80e1acc367615cfc529160821a71d0 = $component; } ?>
<?php $component = App\View\Components\Section\Web\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section.web.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Section\Web\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a80e1acc367615cfc529160821a71d0)): ?>
<?php $component = $__componentOriginal7a80e1acc367615cfc529160821a71d0; ?>
<?php unset($__componentOriginal7a80e1acc367615cfc529160821a71d0); ?>
<?php endif; ?>

        <?php echo e($slot); ?>


        <?php if (isset($component)) { $__componentOriginal9aa361d8f289f86e5c9e10d5deabcaf2 = $component; } ?>
<?php $component = App\View\Components\Section\Web\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section.web.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Section\Web\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9aa361d8f289f86e5c9e10d5deabcaf2)): ?>
<?php $component = $__componentOriginal9aa361d8f289f86e5c9e10d5deabcaf2; ?>
<?php unset($__componentOriginal9aa361d8f289f86e5c9e10d5deabcaf2); ?>
<?php endif; ?>
    </div>



    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
        <div class="side-menu__block-inner ">

            <a href="index.html" class="side-menu__logo"><img src="<?php echo e(url('public/web')); ?>/assets/images/logo-3-1.png" alt="" width="143"></a>
            <nav class="mobile-nav__container">
                
            </nav>
            <p class="side-menu__block__copy">(c) 2020 <a href="#">SCUBO</a> - All rights reserved.</p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    
    <script src="<?php echo e(url('public/web')); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/bootstrap-select.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/isotope.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/TweenMax.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo e(url('public/web')); ?>/assets/js/wow.min.js"></script>

    
    <script src="<?php echo e(url('public/web')); ?>/assets/js/theme.js"></script>
</body>

</html><?php /**PATH E:\Sistem\sibamida\system\resources\views/components/web.blade.php ENDPATH**/ ?>