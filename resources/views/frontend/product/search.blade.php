@extends('layouts.frontend.master')
@section('ccss')
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('Frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/facncybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" id="bootstrap-css">
@endsection
@section('mainContent')
    <div class="products">
        <div class="container">
            <br><br><br>
            <div class="row">
                <div class="col-md-4 topbar" style="max-height:1px;background-color:lightslategrey;float:left;"></div>
                <div class="col-md-4" style="text-align:center;"><h5>Searched Items</h5></div>
                <div class="col-md-4 bottombar" style=" max-height:1px; background-color:#00aced;float:right;"></div>
            </div>

            <br><br><br>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                        <!-- Product -->
                        @foreach($products as $product)
                            <div class="product">
                                 <div class="product_image"><a style="text-decoration:none;" href="{{route('details',$product->id)}}"><img src="{{asset($product->featured_image)}}" alt="Featured Product"></a></div>
                                <div class="product_content">
                                    <div class="product_title text-sm-center" ><a style="text-decoration:none;" href="{{route('details',$product->id)}}">{{$product->name}}</a></div>
                                </div>
                            </div>
                        @endforeach

                        @if(count($products) == 0)
                            <div class="row">
                                <div class="col-md-12 text-center" style="margin:0 auto">
                                    <h3 style="margin: 0 auto;"> No Result Found!! </h3>
                                </div>
                            </div>
                        @endif

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div style="float:right;">
                        {{$products->render()}}
                    </div>
                </div>
                <div class="col-md-4" style="float:right;">
                    <div class="text-sm" style="float:right;">
                       <sup>Showing {{ $products->firstItem() }} to {{ $products->lastItem() }}  of {{$products->total()}} results.</sup>
                    </div>

                </div>

            </div>
        </div>


    </div>
    @section('cjs')
        <script src="{{asset('Frontend/js/custom.js')}}"></script>
    @endsection
@endsection
