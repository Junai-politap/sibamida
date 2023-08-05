<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBAMIDA | Kab.Ketapang</title>

    <link rel="icon" href="{{ url('public/admin') }}/logo.png" type="image/x-icon">
    <link rel="icon" href="{{ url('public/admin') }}/logo.png" type="image/x-icon">
    <link rel="manifest" href="{{ url('public/web') }}/assets/images/favicon/site.webmanifest">

    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600,700,800%7CUbuntu:400,500,700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/hover-min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/scubo-icons.css">

    
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/responsive.css">
</head>

<body>
    <div class="preloader">
        <img src="{{ url('public/web') }}/assets/images/preloader.png" class="preloader__image" alt="">
    </div>
    <div class="page-wrapper">

        <x-section.web.header />

        {{ $slot }}

        <x-section.web.footer />
    </div>



    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
        <div class="side-menu__block-inner ">

            <a href="index.html" class="side-menu__logo"><img src="{{ url('public/web') }}/assets/images/logo-3-1.png" alt="" width="143"></a>
            <nav class="mobile-nav__container">
                
            </nav>
            <p class="side-menu__block__copy">(c) 2020 <a href="#">SCUBO</a> - All rights reserved.</p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    
    <script src="{{ url('public/web') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/bootstrap-select.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/isotope.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/TweenMax.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/wow.min.js"></script>

    
    <script src="{{ url('public/web') }}/assets/js/theme.js"></script>
</body>

</html>