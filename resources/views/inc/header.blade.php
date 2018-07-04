<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Service Finder</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{ asset('/user/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('/user/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <link href="{{ asset('/user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('/user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/user/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/user/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/user/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <link href="{{ asset('/user/css/style.css')}}" rel="stylesheet">
</head>
<body>
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">Service Finder</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>


{{--<!DOCTYPE html>--}}
{{--<html lang="zxx">--}}

{{--<head>--}}
    {{--<title>Service Finder</title>--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<meta charset="UTF-8" />--}}
    {{--<meta name="keywords" content="Discover Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,--}}
	{{--SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />--}}
    {{--<script>--}}
        {{--addEventListener("load", function () {--}}
            {{--setTimeout(hideURLbar, 0);--}}
        {{--}, false);--}}

        {{--function hideURLbar() {--}}
            {{--window.scrollTo(0, 1);--}}
        {{--}--}}
    {{--</script>--}}

    {{--<link href="{{url('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">--}}
    {{--<!-- gallery light box -->--}}
    {{--<link rel="stylesheet" href="{{url('css/lightbox.css')}}">--}}
    {{--<link href="{{url('css/style.css')}}" type="text/css" rel="stylesheet" media="all">--}}
    {{--<!-- font-awesome icons -->--}}
    {{--<link href="{{url('css/font-awesome.css')}}" rel="stylesheet">--}}
    {{--<!-- //Custom Theme files -->--}}
    {{--<!-- web-fonts -->--}}
    {{--<!-- logo -->--}}
    {{--<link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">--}}
    {{--<!-- body -->--}}
    {{--<link href="//fonts.googleapis.com/css?family=Archivo:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">--}}
    {{--<!-- //web-fonts -->--}}
{{--</head>--}}
{{--<body>--}}
{{--<!-- header -->--}}
{{--<body>--}}
{{--<!-- header -->--}}
{{--<div class="w3_navigation">--}}
    {{--<div class="container">--}}
        {{--<nav class="navbar navbar-default">--}}
            {{--<div class="navbar-header navbar-left">--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">--}}
                    {{--<span class="sr-only">Toggle navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                {{--<div class="w3_navigation_pos">--}}
                    {{--<h1>--}}
                        {{--<a href="{{url('index')}}">Service--}}
                            {{--<span>Finder</span>--}}
                        {{--</a>--}}
                    {{--</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
            {{--<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">--}}
                {{--<nav class="menu menu--miranda">--}}
                    {{--<ul class="nav navbar-nav menu__list">--}}
                        {{--<li class="menu__item menu__item--current">--}}
                            {{--<a href="{{url('index')}}" class="menu__link">Home</a>--}}
                        {{--</li>--}}

                        {{--<li class="menu__item">--}}
                            {{--<a href="" class="scroll menu__link">Technician</a>--}}
                        {{--</li>--}}
                        {{--<li class="menu__item">--}}
                            {{--<a href="" class="scroll menu__link">services</a>--}}
                        {{--</li>--}}
                        {{--<li class="menu__item">--}}
                            {{--<a href="" class="scroll menu__link">about</a>--}}
                        {{--</li>--}}
                        {{--<li class="menu__item">--}}
                            {{--<a href="" class="scroll menu__link">contact</a>--}}
                        {{--</li>--}}
                        {{--<li class="menu__item">--}}
                            {{--<button class="btn btn-primary" class="scroll menu__link> <a href="" class="scroll menu__link">Book Service</a></button>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--</div>--}}
{{--</div>--}}
