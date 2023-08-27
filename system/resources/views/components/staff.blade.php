<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIBAMIDA</title>
    <link rel="icon" href="{{ url('public/admin') }}/logo.png" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="{{ url('public/admin') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <x-section.staff.header />

        <x-section.staff.sidebar />

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <x-utils.notif />

                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                {{ $slot }}
            </section>
        </div>
        
        <x-section.staff.footer />

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="{{ url('public/admin') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ url('public/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/sparklines/sparkline.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ url('public/admin') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ url('public/admin') }}/dist/js/adminlte.js"></script>

    <script src="{{ url('public/admin') }}/dist/js/pages/dashboard.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function() {
            $('.summernote').summernote({
                height: 100
            })
        })
    </script>
    
    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
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
