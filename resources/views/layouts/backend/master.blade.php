@yield('content')
        <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{$title}}</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('Backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('Backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('Backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('Backend/assets/css/sleek.css')}}" />
    <!--toastr CSS-->
    <link rel="stylesheet" href="{{asset('Backend/assets/css/toastr.min.css')}}">


    <!-- FAVICON -->
    <link href="{{ asset('Backend/assets/img/teutonsfavicon.png')}}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('Backend/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
<script src="{{asset('Backend/assets/js/toastr.min.js')}}"></script>


<div class="mobile-sticky-body-overlay"></div>

<div class="wrapper">

    <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
    @include('layouts.backend._mainNav')


    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header " id="header">
            @include('layouts.backend._header')
        </header>


        <div class="content-wrapper">
            <div class="content">
                @yield('mainContent')
            </div>
        </div>

        <footer class="footer mt-auto">
            @include('layouts.backend._footer')
        </footer>

    </div>
</div>


@include('layouts.backend._scripts')

<script>

    @if(\Illuminate\Support\Facades\Session::has('info'))
        toastr.info("{{\Illuminate\Support\Facades\Session::get('info')}}")
    @endif
    @if(\Illuminate\Support\Facades\Session::has('success'))
    //toastr.info("{{\Illuminate\Support\Facades\Session::get('info')}}")
    toastr.success("{{\Illuminate\Support\Facades\Session::get('success')}}")
    //toastr.error("{{\Illuminate\Support\Facades\Session::get('success')}}")
    @endif

    @if(\Illuminate\Support\Facades\Session::has('error'))
    toastr.error("{{\Illuminate\Support\Facades\Session::get('error')}}")
    @endif

</script>


</body>
</html>
