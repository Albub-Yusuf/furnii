@yield('content')
    <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{$title}}</title>
    @include('layouts.backend._stylesheet')
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
