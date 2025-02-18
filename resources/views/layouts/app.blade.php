<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $metaTitle ?? config('app.name', 'CyberEsate') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/cookie.css')}}">
    @stack('css')

</head>
<body>
    <div id="app">
       @yield('layout-holder')
    </div>
    <div class="grt-cookie">
        <div class="grt-cookies-msg">
         <p> Мы используем файлы cookie, чтобы обеспечить вам максимальное удобство использования нашего веб-сайта. Если вы продолжите использовать этот сайт, мы будем считать, что вы принимаете и понимаете нашу <a href="">Политику конфиденциальности</a>, и наши <a href="">Условия обслуживания</a>. </p>
        </div>
        <span class="grt-cookie-button">Принять</span>
       </div>
    @include('sweetalert::alert')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/cookie.js')}}"></script>
    <script>
        $(".grt-cookie").grtCookie({
                // Main text and background color
                textcolor: "#333",
                background: "#fff",
                // Button colors
                buttonbackground: "#01ADBB",
                buttontextcolor: "#fff",
                // Duration in days
                duration: 365,
            });
    </script>
        @stack('js')
</body>
</html>
