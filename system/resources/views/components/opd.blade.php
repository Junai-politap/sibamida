<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIBAMIDA</title>

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
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <x-section.opd.header />

        <x-section.opd.sidebar />

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
                {{ $slot }}
            </section>
        </div>
        
        <x-section.opd.footer />

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
</body>

</html>
