<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIBAMIDA</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="<?php echo e(url('public/admin')); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php if (isset($component)) { $__componentOriginal1b372aef7f3255ebc3332845e2a1d06b = $component; } ?>
<?php $component = App\View\Components\Section\Staff\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section.staff.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Section\Staff\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b372aef7f3255ebc3332845e2a1d06b)): ?>
<?php $component = $__componentOriginal1b372aef7f3255ebc3332845e2a1d06b; ?>
<?php unset($__componentOriginal1b372aef7f3255ebc3332845e2a1d06b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal3e9edcb05cf4c27ec2cfce3651d00e57 = $component; } ?>
<?php $component = App\View\Components\Section\Staff\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section.staff.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Section\Staff\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e9edcb05cf4c27ec2cfce3651d00e57)): ?>
<?php $component = $__componentOriginal3e9edcb05cf4c27ec2cfce3651d00e57; ?>
<?php unset($__componentOriginal3e9edcb05cf4c27ec2cfce3651d00e57); ?>
<?php endif; ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            
                        
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <?php echo e($slot); ?>

            </section>
        </div>
        
        <?php if (isset($component)) { $__componentOriginal376ed2a1c150579fe685334c12763abc = $component; } ?>
<?php $component = App\View\Components\Section\Staff\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section.staff.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Section\Staff\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal376ed2a1c150579fe685334c12763abc)): ?>
<?php $component = $__componentOriginal376ed2a1c150579fe685334c12763abc; ?>
<?php unset($__componentOriginal376ed2a1c150579fe685334c12763abc); ?>
<?php endif; ?>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="<?php echo e(url('public/admin')); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/chart.js/Chart.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/sparklines/sparkline.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/moment/moment.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/dist/js/adminlte.js"></script>

    <script src="<?php echo e(url('public/admin')); ?>/dist/js/pages/dashboard.js"></script>
</body>

</html>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/components/staff.blade.php ENDPATH**/ ?>