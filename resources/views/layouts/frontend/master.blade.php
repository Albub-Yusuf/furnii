<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teutons&reg</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Teutons">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('Frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/facncybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" id="bootstrap-css">
    <link href="{{asset('Frontend/images/teutons-icon.png')}}" rel="shortcut icon" />



</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        @include('layouts.frontend._header')
    </header>

    <!-- Menu -->

    <div class="menu menu_mm trans_300">
            @include('layouts.frontend._menu_hamburger')
    </div>

    <!--Home Page mainContainer-->

    <div class="row" >
        <div class="col-lg-12 col-sm-12 col-md-12" style="min-height: 700px;">
            @yield('mainContent')
        </div>
    </div>


  <!--  <br><br><br><br>-->

    <!--Home Page mainContainer Ends Here-->

    <!--New Footer Design -->
    <div class="row">
       @include('layouts.frontend._footer')
    </div>



</div>

@include('layouts.frontend._scripts')
</body>
</html>
