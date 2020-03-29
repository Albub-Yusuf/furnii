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


<!--Frontend CSS For Testing-->
<!--link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/bootstrap.min.css')}}"-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="{{asset('Frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/product.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/product_responsive.css')}}">

<!--
  HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
-->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="{{ asset('Backend/assets/plugins/nprogress/nprogress.js')}}"></script>
@yield('csj')
