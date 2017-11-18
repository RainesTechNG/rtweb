<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@section('pageTitle') @show | {{ config('app.name', 'RainesTech') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- @todo: fill with your company info or remove -->
    <meta name="description" content="@section('pageDescription') @show">
    <meta name="author" content="RainesTech">

    <!-- Bootstrap 4.0.0-alpha.6 CSS via CDN -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/dist/css/bootstrap.min.css">

    <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->
    <link rel="stylesheet" href="/assets/plugins/parsley/parsley.css">

    <!-- Theme style -->
    <link href="/assets/css/theme-style.css" rel="stylesheet">

    <!--Your custom colour override-->
    <link href="/assets/css/colour-purple.css" id="colour-scheme" rel="stylesheet">

    <!-- Your custom override -->
    <link href="/assets/css/custom-style.css" rel="stylesheet">
    @stack('custom-styles')



    <!-- Optional: ICON SETS -->
    <!-- Iconset: Font Awesome 4.7.0 via CDN -->
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Iconset: flag icons - http://lipis.github.io/flag-icon-css/ -->
    <link href="/assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <!-- Iconset: ionicons - http://ionicons.com/ -->
    <link href="/assets/plugins/ionicons/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- Iconset: Linearicons - https://linearicons.com/free -->
    <link href="/assets/plugins/linearicons/cdn.linearicons.css" rel="stylesheet">


<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

<!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
    <script src="/assets/plugins/retina.js/src/retina.js"></script>
    <!-- Enable bootstrap 4 theme -->
    <script>window.__theme = 'bs4';</script>

    <style>
        .object{

            -moz-border-radius: 50% 50% 50% 50%;
            -webkit-border-radius: 50% 50% 50% 50%;
            border-radius: 50% 50% 50% 50%;
            position: absolute;
            border-top: 5px solid #FFF;
            border-bottom: 5px solid transparent;
            border-left:  5px solid #FFF;
            border-right: 5px solid transparent;

        }


        #object_one{
            left: 75px;
            top: 75px;
            width: 50px;
            height: 50px;

            -webkit-animation: animate-left 2s infinite linear;
            animation: animate-left 2s infinite linear;
        }

        #object_two{
            left: 65px;
            top: 65px;
            width: 70px;
            height: 70px;
            -webkit-animation: animate-right 3s infinite linear;
            animation: animate-right 3s infinite linear;
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        #object_three{
            left: 55px;
            top: 55px;
            width: 90px;
            height: 90px;
            -webkit-animation: animate-up 2s infinite linear;
            animation: animate-up 2s infinite linear;
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }
        #object_four{
            left: 45px;
            top: 45px;
            width: 110px;
            height: 110px;
            -webkit-animation: animate-down 3s infinite linear;
            animation: animate-down 3s infinite linear;
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        #page-loading {
            background-color: #ee7312 !important;
            position:absolute;
            opacity:1;
            left:0;
            right:0;
            top:0;
            bottom:0;
            width: 100%;
            height: 100%;
            z-index:10000
        }

        #loading{
            /*background-color: rgba(255, 153, 102, 0.77);*/
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            margin-top: 0px;
            top: 0px;
        }
        #loading-center{
            width: 100%;
            height: 100%;
            position: relative;
        }
        #loading-center-absolute {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 200px;
            width: 200px;
            margin-top: -100px;
            margin-left: -100px;
            -ms-transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
            transform: rotate(-135deg);

        }

    </style>
</head>
<!--To implement the boxed page layout simply add the class .page-boxed to the body badge like below -->

<!-- ======== @Region: body ======== -->
<body class="page page-index-boxed navbar-layout-default page-boxed">

@include('modals.processing')
<a href="#content" id="top" class="sr-only">Skip to content</a>

<!-- ======== @Region: #header ======== -->
<div id="header">

    @include('layouts.partials.app-header')
    <div data-toggle="sticky">

        <!--Header search region - hidden by default -->
        <div class="header-search collapse" id="search">
            <form class="search-form container">
                <input type="text" name="search" class="form-control search" value="" placeholder="Search">
                <button type="button" class="btn btn-link"><span class="sr-only">Search </span><i class="fa fa-search fa-flip-horizontal search-icon"></i></button>
                <button type="button" class="btn btn-link close-btn" data-toggle="search-form-close"><span class="sr-only">Close </span><i class="fa fa-times search-icon"></i></button>
            </form>
        </div>

        <!--Header & Branding region-->
        <div class="header">
            <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .flex-first or/and .flex-last classes to make an element show first or last within .header-inner or .headr-block elements -->
            <div class="header-inner container">
                <!--branding/logo -->
                <div class="header-brand flex-first">
                    <a class="header-brand-text" href="/" title="Home">
                        <img src="/assets/img/logo2.png" alt="rainestech logo" class="img-fluid" style='margin-top:0px;' />
                    </a>
                </div>
                <!-- other header content -->
                <div class="header-block flex-last">

                    <!--Search trigger -->
                    <a href="#search" class="btn btn-icon btn-link header-btn float-right flex-last" data-toggle="search-form" data-target=".header-search"><i class="fa fa-search fa-flip-horizontal search-icon"></i></a>

                    <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu - data-toggle="overlay" = Overlay Menu -->
                    <a href="#top" class="btn btn-link btn-icon header-btn float-right hidden-lg-up" data-toggle="jpanel-menu" data-target=".navbar-main" data-direction="right"> <i class="fa fa-bars"></i> </a>
                </div>

                <div class="navbar navbar-toggleable-md">
                    <!--everything within this div is collapsed on mobile-->
                    @include('layouts.partials.app-nav')
                    <!--/.navbar-collapse -->
                </div>
            </div>
        </div>
    </div>
</div>

@yield('slider')
<!-- ======== @Region: #content ======== -->
<div id="content" @section('content-class')@show>
    @yield('content')
</div>

<!-- ======== @Region: #content-below ======== -->
@section('content-below')@show

<!-- ======== @Region: #footer ======== -->
@include('layouts.partials.app-footer')

<!--Hidden elements - excluded from jPanel Menu on mobile-->
<div class="hidden-elements jpanel-menu-exclude">
<!--@modal - login modal-->
@if(!auth()->check())
    @include('modals.auth.app-register')
    @include('modals.auth.app-login')
@endif
@include('modals.response')
<!-- /.modal -->
</div>


<!--jQuery 3.2.1 via CDN -->
<script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Tether 1.1.1 via CDN, needed for Bootstrap Tooltips & Popovers -->
<script src="/assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Bootstrap 4.0.0-alpha.6 JS via CDN -->
<script src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/assets/plugins/holderjs/holder.min.js"></script>
<script src="/assets/plugins/parsley/parsley.min.js"></script>

<!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"
        integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i"
        crossorigin="anonymous"></script>

<!--Custom scripts & AppStrap API integration -->
<script src="/assets/js/custom-script.js"></script>
<script src="/assets/js/helper.js"></script>
<!--AppStrap scripts mainly used to trigger libraries/plugins -->
<script src="/assets/js/script.min.js"></script>
<script src="/assets/js/myscript.js"></script>
@stack('pageScripts')
<script>
    $(window).on('load', function () {
        setTimeout(function () {
            $('#page-loading').hide();
        }, 500);
    });
</script>
</body>
</html>