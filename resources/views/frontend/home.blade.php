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
                                    <!---->
                                    <div style="float:right;"class="home_slider_content col-md-6 col-sm-12"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <img style="width: 80%;" src="{{asset('Frontend/images/sgdf.png')}}" alt="">
                                        <!-- <div class="home_slider_title">A new Online Shop experience.</div>
                                         div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
                                        <div class="button button_light home_button"><a style="text-decoration:none;" href="#">Visit Now</a></div>-->
                                    </div>
                                    <!--
                                    <br><br><br><br><br>-->
                                    <div class="home_slider_content col-md-6 col-sm-12"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title"><br>Teutons Solid Gold 3.1 USB Flash Drive</div>
                                        <!--<div class="home_slider_subtitle">3.1 USB Flash Drive.</div> -->
                                        <div class="button button_light home_button"><a style="text-decoration:none;" href="#">Visit Now</a></div>
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
                                    <!---->
                                    <div style="float:left;"class="home_slider_content col-md-6 col-sm-12"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <img style="width: 80%;" src="{{asset('Frontend/images/ssd.png')}}" alt="">
                                        <!-- <div class="home_slider_title">A new Online Shop experience.</div>
                                         div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
                                        <div class="button button_light home_button"><a style="text-decoration:none;" href="#">Visit Now</a></div>-->
                                    </div>
                                    <!--
                                    <br><br><br><br><br>-->
                                    <div style="float:right;"class="home_slider_content col-md-6 col-sm-12"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title"><br>Teutons SSD</div>
                                        <!--div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>-->
                                        <div class="button button_light home_button"><a style="text-decoration:none;" href="#">Visit Now</a></div>
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
                                    <div style="float:left;"class="home_slider_content col-md-6 col-sm-12"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <img style="width: 80%;" src="{{asset('Frontend/images/layer2.png')}}" alt="">
                                        <!-- <div class="home_slider_title">A new Online Shop experience.</div>
                                         div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
                                        <div class="button button_light home_button"><a style="text-decoration:none;" href="#">Visit Now</a></div>-->
                                    </div>


                                    <div style="float:right;" class="home_slider_content col-md-6 col-sm-12"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                        <div style="color:#000;" class="home_slider_title" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut"><br>Teutons Velocity RAM.</div>
                                       <!-- <div style="color:#000;" class="home_slider_subtitle" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div> -->
                                        <div  style=" background-color:#4c84ff;color:#000;" class="button button_light home_button" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut"><a style="text-decoration:none;" style="color:#000;" href="#">Visit Now</a></div>
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
                @foreach($advs_small as $ad)
                    <div class="avds_small">
                        <div class="avds_background" style="background-image:url({{asset($ad->image)}})"></div>
                    <!-- <div class="avds_small_inner">
                    <div class="avds_discount_container">
                        <img src="{{asset('Frontend/images/discount.png')}}" alt="">
                        <div>
                            <div class="avds_discount" style="color:#fff;">
                                <div>20<span>%</span></div>
                                <div>Discount</div>
                            </div>
                        </div>
                    </div> -->
                        <div class="avds_large_content " style="color:#fff;">
                            <div class="avds_title" style="color:#fff;">{{$ad->title}}</div>
                            <div class="avds_text" style="color:#fff;">{{$ad->short_details}}</div>
                            <div class="avds_link"><a style="text-decoration:none;" href="#" style="color:#fff;">See More</a></div>
                        </div>
                        <!--   </div> -->
                    </div>
                @endforeach

                @foreach($advs_large as $ad)
                    <div class="avds_large">
                        <div class="avds_background" style="background-image:url({{asset($ad->image)}})"></div>
                        <div class="avds_large_container">
                            <div class="avds_large_content">
                                <div class="avds_title" style="color:#fff;">{{$ad->title}}</div>
                                <div class="avds_text" style="color:#fff;">{{$ad->short_details}}</div>
                                <div class="avds_link avds_link_large" style="color:#fff;"><a style="text-decoration:none;" style="color:#fff;" href="categories.html">See More</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-4 blk topbar" style="max-height:1px;background-color:lightslategrey;float:left;"></div>
                <div class="col-md-4" style="text-align:center;"><h5>Featured Products</h5></div>
                <div class="col-md-4 bottombar" style=" max-height:1px; background-color:#00aced;float:right;"></div>
               </div>

            <br><br><br>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                        <!-- Product -->

                        @foreach($featured_products as $product)



                            <div class="product">
                                <div class="product_image"><a style="text-decoration:none;" href="{{route('details',$product->id)}}"><img src="{{asset($product->featured_image)}}" alt=""></a></div>
                                <div class="product_content">
                                    <div class="product_title text-center"><a style="text-decoration:none;" href="{{route('details',$product->id)}}">{{$product->name}}</a></div>

                                </div>
                            </div>

                        @endforeach
                       <div style="float:right; margin-top:-9%; background-color:transparent;"><sup><a style="text-decoration:none;" href="{{route('is_featured',$product->is_featured)}}">View More</a></sup></div>

                    </div>

                </div>
            </div>
        </div>

        <!--test modify here-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 topbar" style="max-height:1px;background-color:lightslategrey;float:left;"></div>
                <div class="col-md-4" style="text-align:center;"><h5>Latest Products</h5></div>
                <div class="col-md-4 bottombar" style=" max-height:1px; background-color:#00aced;float:right;"></div>
            </div>

            <br><br><br>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                        <!-- Product -->
                        @foreach($latest_products as $product)
                        <div class="product">
                          <div class="product_image"><a style="text-decoration:none;" href="{{route('details',$product->id)}}"><img src="{{asset($product->featured_image)}}" alt=""></a></div>
                            <div class="product_extra product_new"><a style="text-decoration:none;" href="#">New</a></div>
                            <div class="product_content">
                                <div class="product_title text-center"><a style="text-decoration:none;" href="{{route('details',$product->id)}}">{{$product->name}}</a></div>

                            </div>
                        </div>
                        @endforeach

                        <div style="float:right; margin-top:-9%; background-color:transparent;"><sup><a style="text-decoration:none;" href="{{route('is_new',$product->is_new)}}">View More</a></sup></div>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <!-- Ad -->
    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/avds_xl.jpg)"></div>
                        <div class="avds_xl_content" style="color:#fff;">
                            <div class="avds_title">Amazing Devices</div>
                            <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div>
                            <div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->

    <br><br>
    <!--Test Div(About US)-->

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
    <!-- Newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                        <div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required">
                                <button class="newsletter_button trans_200"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('cjs')
        <script src="{{asset('Frontend/js/custom.js')}}"></script>
    @endsection
@endsection
