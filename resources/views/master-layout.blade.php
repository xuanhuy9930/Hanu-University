<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}">
	<title>DH-HN - @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <!-- CSS libs -->
    <link rel="stylesheet" type="text/css" href="libs/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="libs/font-awesome-full-4.7/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="libs/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="libs/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="libs/slick-1.8.1/slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/phone-ring.css">
    <link rel="stylesheet" href="css/gioithieu.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- CSS libs -->
    @yield('css')
    
    
    <!-- JS libs -->
</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>

    <!-- JS libs --> 
    <script type="text/javascript" src="libs/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="libs/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="libs/slick-1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <!-- JS libs -->
    
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/all-js.js"></script>
<script>
        new WOW().init();
    </script>
    @yield('js')
</html>