@props([
    'pageTitle' => 'Azure Power',
    'pageDescription' => 'Azure Power',
    'pageScript' => null,
])
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Mukesh Kumar">
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Google Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Rubik:wght@400;500&display=swap"
        rel="stylesheet">
    <!-- Bootstrap css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav css -->
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome icon css -->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated css -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific css -->
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Main custom css -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

</head>

<body class="tt-magic-cursor">



    <!-- Header Start -->
    @include('layouts.partials.header')
    <!-- Header End -->
    {{ $slot }}

    @include('layouts.partials.footer')


    <!-- Jquery Library File -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('assets/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('assets/js/splitType.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('assets/js/function.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 3,
                margin: 10,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
    @if ($pageScript && file_exists(public_path('assets/customjs/' . $pageScript . '.js')))
        <script src="{{ asset('assets/customjs/' . $pageScript . '.js') }}"></script>
    @endif

</body>

</html>
