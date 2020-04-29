<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--
    =============================================
    Laravel Default Head Contents
    =============================================
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>


    <!--
    =============================================
    Custom Head Contents
    =============================================
    -->
    <link rel="shortcut icon" href="{{ asset('images/br_logo.png') }}" type="image/vnd.microsoft.icon">
    <meta name="keywords" content="大阪,SMバー,BR,十三,fetish,SM,bar,">
    <meta name="description" content="大阪･十三(じゅうそう)にあるSM&FetishBar「BR(ビーアール)」。当店では落ち着いた雰囲気の中で非日常的な会話と交流ができるBarをコンセプトとしております。様々な嗜好を持つ個性豊かで魅力溢れる女性スタッフが皆様をお待ちしております。初心者の方や女性お一人様でのご来店も大歓迎です。電話番号06-6885-9997">
    <!-- Default stylesheets-->
    <link href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}" rel='stylesheet'>
    <!-- Template specific stylesheets-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Volkhov:400i' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet'>
    <link href="{{ asset('lib/animate.css/animate.css') }}" rel='stylesheet'>
    <link href="{{ asset('lib/components-font-awesome/css/font-awesome.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('lib/et-line-font/et-line-font.css') }}" rel='stylesheet'>
    <link href="{{ asset('lib/flexslider/flexslider.css') }}" rel='stylesheet'>
    <link href="{{ asset('lib/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('lib/magnific-popup/dist/magnific-popup.css') }}" rel='stylesheet'>
    <link href="{{ asset('lib/simple-text-rotator/simpletextrotator.css') }}" rel='stylesheet'>
    <!-- Main stylesheet and color file-->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet'>
    <link id='color-scheme' href='./assets/css/colors/default.css' rel='stylesheet'>
    <!--JavaScripts-->
    <script src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/wow/dist/wow.js') }}"></script>
    <script src="{{ asset('lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('lib/isotope/dist/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('lib/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('lib/flexslider/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('lib/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/smoothscroll.js') }}"></script>
    <script src="{{ asset('lib/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('lib/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</head>
<body data-spy='scroll' data-target='.onpage-navigation' data-offset='60'>    
    <main id='main'>
        @yield('content')
    </main>
</body>
</html>
