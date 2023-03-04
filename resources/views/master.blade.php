<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>File Transfer</title>

    <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="author" content="Codings">

    <link rel="shortcut icon" href="{{ asset('images/icons/tourtech.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/icons/tourtech.ico') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/icons/tourtech.ico') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/icons/tourtech.ico') }}">
    <!-- PWA  -->
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('front_asset/css/vendor-slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/css-main.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/vendor-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/vendor-icons-fa.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/vendor-animation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/vendor-gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/vendor-cookie-notice.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/css/sweetalert2.min.css') }}">
    <script src="{{ asset('front_asset/js/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('front_asset/css/css-default.css') }}">
    <meta name="theme-color" content="#21333e">
    @yield('styles')
    <style>
        :root {
            --header-bg-color: #f9f9f9;
            --nav-item-color: #21333e;
            --hero-bg-color: #f9f9f9;
            --section-1-bg-color: #111117;
            --section-2-bg-color: #eef4ed;
            --section-3-bg-color: #ffffff;
            --section-4-bg-color: #111117;
            --section-5-bg-color: #ffffff;
            --section-6-bg-color: #111117;
            --section-6-bg-image: url('front_asset//images/bg-1.jpg');
        }

        input[type='number'] {
            -moz-appearance: textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .subscription {
            color: #0E272D
        }

        .file-input {
            width: 100%;
        }

        .card:not(.no-hover):hover {
            transform: translateY(-7.5px);
        }
    </style>
    @laravelPWA

</head>

<body class="home">

    @include('sweetalert::alert')

    @include('header')

    <!-- Hero -->
    @yield('contents')

    @include('footer')

    @include('modals')
    <!-- Scroll [to top] -->
    <div id="scroll-to-top" class="scroll-to-top">
        <a href="#header" class="smooth-anchor">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/buffer.min.js"
        type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/filetype.min.js"
        type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/piexif.min.js"
        type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/sortable.min.js"
        type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/fileinput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/locales/LANG.js"></script>


    <script src="{{ asset('front_asset/js/vendor-jquery.easing.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-jquery.inview.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-popper.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-ponyfill.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-slider.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-animation.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-progress-radial.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-bricklayer.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-gallery.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-shuffle.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-cookie-notice.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/vendor-particles.min.js') }}"></script>
    <script src="{{ asset('front_asset/js/js-main.js') }}"></script>

    {{-- Krajee Scripts --}}


    {{-- Krajee Scripts --}}

    @yield('scripts')

    @include('jsfiles.masterjs')

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</body>

</html>
