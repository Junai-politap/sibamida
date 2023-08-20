<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SIBAMIDA - Kab. Ketapang</title>

    <link rel="icon" href="<?php echo e(url('public/admin')); ?>/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/fonts/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/fonts/flaticon/flaticon.css">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/magnific-popup/dist/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/slick/slick.css">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/nice-select/css/nice-select.css">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/vendor/animate.css">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/default.css">

    <link rel="stylesheet" href="<?php echo e(url('public/web')); ?>/assets/css/style.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body>

    


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

    <a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>

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

    <!-- DataTables  & Plugins -->
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <?php echo $__env->yieldPushContent('script'); ?>
    <script>
        $(function() {
            $('.summernote').summernote({
                height: 100
            })
        })
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/components/web.blade.php ENDPATH**/ ?>