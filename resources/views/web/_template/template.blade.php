<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marcus At Home</title>

    <!-- Source -->
    <!-- https://bootstrapmade.com/free-html-bootstrap-template-my-resume/#download -->

    <!-- Favicons -->
    <link href="{{ asset('image/favicon.png') }}" rel="icon">
    <link href="{{ asset('image/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('plugins/}aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('afterStyle')
</head>
<body>

    @include('web._template.header')
    <div id="main" class="content" style="min-height: 900px">
        @yield('content')
    </div>
    @include('web._template.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="{{ asset('plugins/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('plugins/aos/aos.js') }}"></script>
    <script src="{{ asset('plugins/glightbox/js/glightbox.min.js"') }}"></script>
    <script src="{{ asset('plugins/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('plugins/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('plugins/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('afterScript')
</body>
</html>
