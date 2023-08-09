<!DOCTYPE html>
<html lang="zxx">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>SIBAMIDA - Kab. Ketapang</title>

        <link rel="icon" href="{{ url('public/admin') }}/logo.png" type="image/x-icon">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/fonts/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/fonts/flaticon/flaticon.css">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/vendor/magnific-popup/dist/magnific-popup.css">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/vendor/slick/slick.css">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/vendor/nice-select/css/nice-select.css">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/vendor/animate.css">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/default.css">

        <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
    </head>
    <body>

        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>


       <x-section.web.header />


        {{$slot}}


       <x-section.web.footer />

        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>

        <script src="{{ url('public/web') }}/assets/vendor/jquery-3.6.0.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/popper/popper.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/slick/slick.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/isotope.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/imagesloaded.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/jquery.counterup.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/jquery.waypoints.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/jquery-ui/jquery-ui.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/donutty-jquery.min.js"></script>

        <script src="{{ url('public/web') }}/assets/vendor/wow.min.js"></script>

        <script src="{{ url('public/web') }}/assets/js/theme.js"></script>
    </body>
</html>
