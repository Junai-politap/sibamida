<?php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $__env->yieldContent('title'); ?> Teknik Informatika Politeknik Negeri Ketapang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

    <link rel="icon" href="<?php echo e(url('public/home')); ?>/logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/aos.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(url('public/home')); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php echo e(url('public/home')); ?>/favicon-32x32.png">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="<?php echo e(url('public/home')); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo e(url('public/home')); ?>/site.webmanifest">

    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/frontend/css/style.css">
    <link href="<?php echo e(url('public/home')); ?>/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet"
        href="<?php echo e(url('public/admin')); ?>//plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <?php echo $__env->yieldPushContent('style'); ?>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <?php echo $__env->make('layout.home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layout.home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- .site-wrap -->
    <!-- loader -->
    <div id="loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#51be78" />
        </svg>
    </div>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery-ui.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/popper.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery.stellar.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery.countdown.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/aos.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery.sticky.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="<?php echo e(url('public/home')); ?>/frontend/js/main.js"></script>

    <script src="<?php echo e(url('public/admin')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\informatika\system\resources\views/template/home.blade.php ENDPATH**/ ?>