<!DOCTYPE html>
<html lang="ru">
<!-- Head -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- SCRIPTS -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->

    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/superfish.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/animate.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/myscript.js')}}" type="text/javascript"></script>

    <script>

        //PrettyPhoto
        jQuery(document).ready(function() {
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });

        //BlackAndWhite
        $(window).load(function(){
            $('.client_img').BlackAndWhite({
                hoverEffect : true, // default true
                // set the path to BnWWorker.js for a superfast implementation
                webworkerPath : false,
                // for the images with a fluid width and height
                responsive:true,
                // to invert the hover effect
                invertHoverEffect: false,
                // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
                intensity:1,
                speed: { //this property could also be just speed: value for both fadeIn and fadeOut
                    fadeIn: 300, // 200ms for fadeIn animations
                    fadeOut: 300 // 800ms for fadeOut animations
                },
                onImageReady:function(img) {
                    // this callback gets executed anytime an image is converted
                }
            });
        });

    </script>

    <title></title>
</head>

<!-- PRELOADER -->
<img id="preloader" src="{{ asset('images/preloader.gif') }}" alt="" />

<div class="preloader_hide">
    <div id="page" class="single_page">
        <!-- Nav -->
        <header>@include('static.menu')</header>

            @yield('content')
    </div>
    <!-- CONTACTS -->
    <section id="contacts">
    </section><!-- //CONTACTS -->
        <footer>@include('static.footer')</footer>
</div>


</html>
