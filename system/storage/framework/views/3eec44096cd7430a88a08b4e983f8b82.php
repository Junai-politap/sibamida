<!DOCTYPE html>
<html lang="zxx">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>SIAMIDA - Kab. Ketapang</title>

        <link rel="shortcut icon" href="<?php echo e(url('public/web')); ?>/assets/images/favicon.ico" type="image/png">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/fonts/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/fonts/flaticon/flaticon.css">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/magnific-popup/dist/magnific-popup.css">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/slick/slick.css">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/nice-select/css/nice-select.css">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/animate.css">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/default.css">

        <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/style.css">
    </head>
    <body>

        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>


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

        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/jquery-3.6.0.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/popper/popper.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/slick/slick.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/isotope.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/imagesloaded.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/jquery.counterup.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/jquery.waypoints.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/jquery-ui/jquery-ui.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/donutty-jquery.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/vendor/wow.min.js"></script>

        <script src="<?php echo e(url('public/web')); ?>/assets/js/theme.js"></script>
    </body>
</html>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/components/web.blade.php ENDPATH**/ ?>