<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Zen+Antique&family=Abril+Fatface&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet"
        href="https://rawgithub.com/timschlechter/bootstrap-tagsinput/master/src/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="{{ asset('/vendors/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/organik-icon/organik-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/tiny-slider/tiny-slider.min.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('/css/organik.css') }}" />
</head>
@yield('styles')

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="{{ asset('/images/loader.png') }}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div><!-- /.page-wrapper -->
    @include('layouts.mobile_nav')
    @include('layouts.search_popup')
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('/vendors/countdown/countdown.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('/js/organik.js') }}"></script>
    @yield('scripts')
</body>

</html>
