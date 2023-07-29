<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> <?php echo $__env->yieldContent('title'); ?> | Siakad Teknik Informatika</title>
    <link rel="icon" href="<?php echo e(url('public/admin')); ?>/logo.ico" type="image/x-icon">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/dist/css/adminlte.min.css">

    <link rel="stylesheet"
        href="<?php echo e(url('public/admin')); ?>//plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo e(url('public/admin')); ?>/plugins/summernote/summernote-bs4.css">



</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <?php echo $__env->make('layout.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </nav>

        <?php echo $__env->make('layout.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-wrapper">
            <div class="content-header">

            </div>

            <section class="content">
                <?php echo $__env->yieldContent('content'); ?>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php echo $__env->make('layout.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(url('public/admin')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo e(url('public/admin')); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(url('public/admin')); ?>/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="<?php echo e(url('public/admin')); ?>/dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo e(url('public/admin')); ?>/plugins/chart.js/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="<?php echo e(url('public/admin')); ?>/dist/js/pages/dashboard2.js"></script>

    <script src="<?php echo e(url('public/admin')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?php echo e(url('public/admin')); ?>/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(url('public/admin')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

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
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
<?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/template/admin.blade.php ENDPATH**/ ?>