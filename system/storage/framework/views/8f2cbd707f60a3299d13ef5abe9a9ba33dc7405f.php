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
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?> Prodi Teknologi Informasi Politeknik Negeri Ketapang</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/css/responsive.css">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/css/color-switcher-design.css">
    <!--Color Themes-->
    <link rel="stylesheet" href="<?php echo e(url('public/home')); ?>/css/color-themes/default-theme.css" id="theme-color-file">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(url('public/home')); ?>/ti.png">
    <link rel="icon" type="image/png" href="<?php echo e(url('public/home')); ?>/ti.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo e(url('public/home')); ?>/ti.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/js/html5shiv.js"></script>
    <![endif]-->



</head>

<body>
    <div class="boxed_wrapper">

        

        <!-- Top bar area -->
        <?php echo $__env->make('layout.home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--End header area-->

        <?php echo $__env->yieldContent('content'); ?>


        <?php echo $__env->make('layout.home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- main jQuery -->
        <script src="<?php echo e(url('public/home')); ?>/js/jquery.js"></script>
        <!-- Wow Script -->
        <script src="<?php echo e(url('public/home')); ?>/js/wow.min.js"></script>
        <!-- bootstrap -->
        <script src="<?php echo e(url('public/home')); ?>/js/bootstrap.min.js"></script>
        <!-- bx slider -->
        <script src="<?php echo e(url('public/home')); ?>/js/jquery.bxslider.min.js"></script>
        <!-- count to -->
        <script src="<?php echo e(url('public/home')); ?>/js/jquery.countTo.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/js/jquery.appear.js"></script>
        <!-- owl carousel -->
        <script src="<?php echo e(url('public/home')); ?>/js/owl.js"></script>
        <!-- validate -->
        <script src="<?php echo e(url('public/home')); ?>/js/validation.js"></script>
        <!-- mixit up -->
        <script src="<?php echo e(url('public/home')); ?>/js/jquery.mixitup.min.js"></script>
        <!-- isotope script-->
        <script src="<?php echo e(url('public/home')); ?>/js/isotope.js"></script>
        <!-- Easing -->
        <script src="<?php echo e(url('public/home')); ?>/js/jquery.easing.min.js"></script>
        <!-- Gmap helper -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
        <!--Gmap script-->
        <script src="<?php echo e(url('public/home')); ?>/js/gmaps.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/js/map-helper.js"></script>
        <!-- video responsive script -->
        <script src="<?php echo e(url('public/home')); ?>/js/jquery.fitvids.js"></script>
        <!-- jQuery ui js -->
        <script src="<?php echo e(url('public/home')); ?>/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
        <!-- Language Switche  -->
        <script src="<?php echo e(url('public/home')); ?>/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
        <!-- jQuery PrettyPhoto js -->
        <script src="<?php echo e(url('public/home')); ?>/js/jquery.prettyPhoto.js"></script>
        <!-- jQuery timepicker js -->
        <script src="<?php echo e(url('public/home')); ?>/assets/timepicker/timePicker.js"></script>
        <!-- Bootstrap select picker js -->
        <script src="<?php echo e(url('public/home')); ?>/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
        <!-- html5lightbox js -->
        <script src="<?php echo e(url('public/home')); ?>/assets/html5lightbox/html5lightbox.js"></script>
        <!--Color Switcher-->
        <script src="<?php echo e(url('public/home')); ?>/js/color-settings.js"></script>
        <!--Particles -->
        <script src="<?php echo e(url('public/home')); ?>/js/particles.min.js"></script>

        <!--revolution slider js -->
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js">
        </script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

        <!-- thm custom script -->
        <script src="<?php echo e(url('public/home')); ?>/js/particles-config.js"></script>
        <script src="<?php echo e(url('public/home')); ?>/js/custom.js"></script>
        <?php echo $__env->yieldPushContent('script'); ?>


</body>

</html>
<?php /**PATH /data/www/teknologiinformasi/system/resources/views/template/home.blade.php ENDPATH**/ ?>