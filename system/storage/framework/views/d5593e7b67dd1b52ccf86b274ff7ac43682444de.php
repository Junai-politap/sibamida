<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="<?php echo e(url('public/mahasiswa')); ?>/ti.png">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	
	<link rel="stylesheet" href="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
	
	<link rel="stylesheet" href="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?php echo e(url('public/mahasiswa')); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo e(url('public/mahasiswa')); ?>/assets/css/core.css">
	<link rel="stylesheet" href="<?php echo e(url('public/mahasiswa')); ?>/assets/css/app.css">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
	<script>
		Breakpoints();
	</script>
</head>
	
<body class="menubar-left menubar-unfold menubar-light theme-primary">

    <?php echo $__env->make('layout.mahasiswa.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layout.mahasiswa.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





<main id="app-main" class="app-main">
  <?php echo $__env->yieldContent('content'); ?>
  
  <?php echo $__env->make('layout.mahasiswa.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</main>
	
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/jquery/dist/jquery.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/PACE/pace.min.js"></script>
	
	<script src="<?php echo e(url('public/mahasiswa')); ?>/assets/js/library.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/assets/js/plugins.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/assets/js/app.js"></script>
	
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/moment/moment.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="<?php echo e(url('public/mahasiswa')); ?>/assets/js/fullcalendar.js"></script>

	<?php echo $__env->yieldPushContent('script'); ?>
</body>
</html><?php /**PATH /data/www/teknologiinformasi/system/resources/views/template/mahasiswa.blade.php ENDPATH**/ ?>