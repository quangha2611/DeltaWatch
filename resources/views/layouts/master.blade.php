<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="{{ asset('libs/fontawesome/css/all.css') }}">
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- SWIPER -->
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper-bundle.min.css') }}">
    <script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>
    @yield('css')
    <style>
        @font-face {
            font-family: "fontTitle";
            src: {{ asset('fonts/Josefin_Sans/static/JosefinSans-Bold.ttf') }};
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>

<!-- MASK -->
<div class="mask"> </div>
    @include('components.sale_notification')

    @include('blocks.header')

    @include('blocks.navbar')

    @yield('content')

    @include('blocks.footer')

    @include('components.copyright')

    @include('components.backtotop')
</body>

@yield('script')
</html>