<!doctype html>

<html class="js csstransitions video svg inlinesvg svgclippaths modern-browser not-mobile js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Y-Mind</title>
    <meta name="description" content="O Centro de Neuromodulação da EPM-UNIFESP é uma iniciativa científico-tecnológica voltada ao desenvolvimento de métodos e estudos em psiquiatria e áreas afins.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="referrer" content="origin">


    <meta property="og:site_name" content="Centro de Neuromodulação">
    <meta property="og:title" content="Home | Centro de Neuromodulação EPM-UNIFESP">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:description" content="O Centro de Neuromodulação da EPM-UNIFESP é uma iniciativa científico-tecnológica voltada ao desenvolvimento de métodos e estudos em psiquiatria e áreas afins.">


    <meta property="og:image" content="{{asset('/images/logo_azul.png')}}">
    <meta property="og:image:url" content="{{asset('/images/logo_azul.png')}}">

    <!--trocar todas as imagens-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/images/logo_azul.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/images/logo_azul.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/images/logo_azul.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/images/logo_azul.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/images/logo_azul.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/images/logo_azul.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/images/logo_azul.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/images/logo_azul.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/images/logo_azul.png')}}">
    <link rel="icon" type="image/png" href="{{asset('/images/logo_azul.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/images/logo_azul.png')}}" sizes="194x194">
    <link rel="icon" type="image/png" href="{{asset('/images/logo_azul.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{asset('/images/logo_azul.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{asset('/images/logo_azul.png')}}" sizes="16x16">
    <link rel="icon" href="{{asset('/images/logo_azul.png')}}">
    <meta name="apple-mobile-web-app-title" content="Y-Mind">
    <meta name="application-name" content="Y-Mind">
    <meta name="msapplication-TileColor" content="#edf4f2">
    <meta name="msapplication-TileImage" content="{{asset('/images/logo_azul.png')}}">
    <meta name="theme-color" content="#edf4f2">



    <link rel="https://api.w.org/" href="wp-json/index.html">
    <link rel="canonical" href="{{url('/')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/css/brainanim.css')}}">
    <link rel="stylesheet" href="{{asset('/css/base-e1f1a1c0a0.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home-c67872ce6d.css')}}">






















    <style>
        .alert-on .identity-stripe {
            border-top-color: #2C2C33;
        }

        .alert-on .identity-stripe .logo-tab {
            background-color: #2C2C33;
        }

        .alert-on.page-layout_inner .minimal-title {
            background-color: #2C2C33 !important;
        }
    </style>
    <script src="{{asset('/js/modernizr-acd544d837.js')}}"></script>
    <script src="{{asset('/js/head-c1049261eb.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script>
            function setHeroHeight() {

                /**
                 * Do not alter the size of the hero on old browsers.
                 * We are falling back to the no JavaScript for these browsers.
                 */
                if (!modernBrowser) {
                    return;
                }

                var hero = document.getElementById("bbHeroSection");
                var heroOffset = hero.getBoundingClientRect().bottom;
                var windowHeight = document.documentElement.clientHeight;

                var height = windowHeight - heroOffset;

                hero.style.height = height + "px"

            }
    </script>





</head>

<body class="home page page-id-12375 page-template-default  show-nav-fries unscrolled">
@yield('content')



</body>
</html>
