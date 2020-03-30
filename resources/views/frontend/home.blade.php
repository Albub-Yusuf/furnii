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
    <!-- Home -->
    <div class="home">
        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">A new Online Shop experience.</div>
                                        <div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
                                        <div class="button button_light home_button"><a href="#">Visit Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/Slider-03.jpg)"></div>
                    <div class="home_slider_content_container" >
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div style="float:right;"class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">A new Online Shop experience.</div>
                                        <!--div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>-->
                                        <div class="button button_light home_button"><a href="#">Visit Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/about_us.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div style="float:right;" class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div style="color:#000;" class="home_slider_title" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">A new Online Shop experience.</div>
                                       <!-- <div style="color:#000;" class="home_slider_subtitle" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div> -->
                                        <div  style="color:#000;" class="button button_light home_button" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut"><a style="color:#000;" href="#">Visit Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_dots">
                                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                    <li class="home_slider_custom_dot active"><h3>o</h3></li>
                                    <li class="home_slider_custom_dot"><h3>o</h3></li>
                                    <li class="home_slider_custom_dot"><h3>o</h3></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Ads -->

    <div class="avds">
        <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
            <div class="avds_small">
                <div class="avds_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/avds_small.jpg)"></div>
                <div class="avds_small_inner">
                    <div class="avds_discount_container">
                        <img src="{{asset('Frontend/images/discount.png')}}" alt="">
                        <div>
                            <div class="avds_discount" style="color:#fff;">
                                <div>20<span>%</span></div>
                                <div>Discount</div>
                            </div>
                        </div>
                    </div>
                    <div class="avds_small_content" style="color:#fff;">
                        <div class="avds_title" style="color:#fff;">Smart Phones</div>
                        <div class="avds_link"><a href="#" style="color:#fff;">See More</a></div>
                    </div>
                </div>
            </div>
            <div class="avds_large">
                <div class="avds_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/avds_large.jpg)"></div>
                <div class="avds_large_container">
                    <div class="avds_large_content">
                        <div class="avds_title" style="color:#fff;">Professional Cameras</div>
                        <div class="avds_text" style="color:#fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
                        <div class="avds_link avds_link_large" style="color:#fff;"><a style="color:#fff;" href="categories.html">See More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="text-align:center;"><h5>Featured Products</h5></div>
                <div class="col-md-4" style="max-height:1px;background-color:lightslategrey;float:left;"></div>
                <div class="col-md-5" style=" max-height:1px; background-color:#00aced;float:right;"></div>
               </div>

            <br><br><br>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                        <!-- Product -->
                        @foreach($featured_products as $product)
                        <div class="product">
                            <div class="product_image"><a href="{{route('details',[$product->id,$product->category_id])}}"><img src="{{asset($product->featured_image)}}" alt="Featured Product"></a></div>
                            <div class="product_content">
                                <div class="product_title text-sm-center" ><a href="{{route('details',[$product->id,$product->category_id])}}">{{$product->name}}</a></div>
                            </div>
                        </div>
                        @endforeach
                       <div style="float:right; margin-top:-9%; background-color:transparent;"><sup><a href="#">View More</a></sup></div>

                    </div>

                </div>
            </div>
        </div>

        <!--test modify here-->
        <div class="container">
            <div class="row">
                <div class="col-md-2" style="text-align:center;"><h5>New Products</h5></div>
                <div class="col-md-5" style="max-height:1px;background-color:lightslategrey;float:left;"></div>
                <div class="col-md-5" style=" max-height:1px; background-color:#00aced;float:right;"></div>
            </div>

            <br><br><br>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                        <!-- Product -->
                        @foreach($latest_products as $product)
                        <div class="product">
                            <div class="product_image"><a href="{{route('details',[$product->id,$product->category_id])}}"><img src="{{asset($product->featured_image)}}" alt=""></a></div>
                            <div class="product_extra product_new"><a href="#">New</a></div>
                            <div class="product_content">
                                <div class="product_title text-sm-center"><a href="{{route('details',[$product->id,$product->category_id])}}">{{$product->name}}</a></div>

                            </div>
                        </div>
                        @endforeach

                        <div style="float:right; margin-top:-9%; background-color:transparent;"><sup><a href="#">View More</a></sup></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Ad -->

    <div class="avds_xl " >
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/about_us.jpg)"></div>
                        <div class="avds_xl_content" style="font-color:#e95a5a; width:82%;">
                            <div class="avds_title" style="float:right; margin-top:-5%; padding: 5%;">About Us</div>
                            <br><br>
                            <div class="avds_text">
                                <p style="color:#000;">Created by technology experts who are artistic and innovative.
                                    Specialized in high-end designing, a manufacturing and marketing innovative memory product is its sole purpose.
                                    All TEUTONS® product’s research-development & designed in Spain.
                                </p></div>
                           <!-- <div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div> -->

                            </div>
                            <!--<div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <br><br>
    <!--Test Div(About US)-->
    <!--
    <div class="newsletter col-lg-10 offset-lg-1" >
        <div class="container" >
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">About Us</div>
                        <div class="newsletter_text"><p>TEUTONS® was born in Germany, named after the famous Germanic tribe mentioned by some famous authors, conceptualized and created by technology experts who are artistic and innovative. Specialized in high-end designing, a manufacturing and marketing innovative memory product is its sole purpose. All TEUTONS® product’s research-development & designed in Spain.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <br>
    @section('cjs')
        <script src="{{asset('Frontend/js/custom.js')}}"></script>
    @endsection
@endsection
