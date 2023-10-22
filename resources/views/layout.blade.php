<!DOCTYPE html> <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
        <title>Portofolio </title>
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext"
        rel="stylesheet"> <!-- For favicon png --> 
    <link rel="shortcut icon" type="image/icon"
        href="assets/logo/favicon.png" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    </head>

    <body>
        @include('header')

        @yield('content')

        @include('footer')


        <script src="assets/js/jquery.js"></script>

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- bootsnav js -->
        <script src="assets/js/bootsnav.js"></script>

        <!-- jquery.sticky.js -->
        <script src="assets/js/jquery.sticky.js"></script>

        <!-- for progress bar start-->

        <!-- progressbar js -->
        <script src="assets/js/progressbar.js"></script>

        <!-- appear js -->
        <script src="assets/js/jquery.appear.js"></script>

        <!-- for progress bar end -->

        <!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
    </body>

    </html>