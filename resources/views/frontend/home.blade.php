@extends('layouts.frontend.master')
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
                                        <div class="button button_light home_button"><a href="#">Shop Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <div class="button button_light home_button"><a href="#">Shop Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <div class="button button_light home_button"><a href="#">Shop Now</a></div>
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
                            <div class="avds_discount">
                                <div>20<span>%</span></div>
                                <div>Discount</div>
                            </div>
                        </div>
                    </div>
                    <div class="avds_small_content">
                        <div class="avds_title">Smart Phones</div>
                        <div class="avds_link"><a href="categories.html">See More</a></div>
                    </div>
                </div>
            </div>
            <div class="avds_large">
                <div class="avds_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/avds_large.jpg)"></div>
                <div class="avds_large_container">
                    <div class="avds_large_content">
                        <div class="avds_title">Professional Cameras</div>
                        <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
                        <div class="avds_link avds_link_large"><a href="categories.html">See More</a></div>
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
                        <div class="product">
                            <div class="product_image"><a href="{{route('product.details')}}"><img src="{{asset('Frontend/images/Olite_Blue.jpg')}}" alt=""></a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="#">Olite Bluetooth Speaker</a></div>
                            </div>
                        </div>
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><a href="{{route('product.details')}}"><img src="{{asset('Frontend/images/Box_Blue.jpg')}}" alt=""></a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="#">Olite Bluetooth Wireless Speaker</a></div>
                            </div>
                        </div>
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><a href="#"><img src="{{asset('Frontend/images/s-gold.jpg')}}" alt=""></a></div>
                            <div class="product_extra product_new"><a href="#">New</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="#">Simplicity Bluetooth Speaker</a></div>
                            </div>
                        </div>
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><a href="#"><img src="{{asset('Frontend/images/S-pack.jpg')}}" alt=""></a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="#">Olite Bluetooth Speaker</a></div>
                            </div>
                        </div>
                       <div style="float:right; margin-top:-9%; background-color:transparent;"><sup><a href="{{route('product.details')}}">View More</a></sup></div>

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
                        <div class="product">
                            <div class="product_image"><a href="{{route('product.details')}}"><img src="{{asset('Frontend/images/Toledo.jpg')}}" alt=""></a></div>
                            <div class="product_extra product_new"><a href="categories.html">New</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="productCopy.html">Toledo X8 Wirless Bluetooth Speaker</a></div>

                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/product_2.jpg')}}" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Sale</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/product_3.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/product_4.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>
                        <div style="float:right; margin-top:-9%; background-color:transparent;"><sup><a href="{{route('product.details')}}">View More</a></sup></div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/product_5.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/product_6.jpg')}}" alt=""></div>
                            <div class="product_extra product_hot"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/product_7.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/product_8.jpg')}}" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

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
                        <div class="avds_xl_content">
                            <div class="avds_title">Amazing Devices</div>
                            <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div>
                            <div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Test Div(About US)-->
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
                        <div class="newsletter_title">About Us</div>
                        <div class="newsletter_text"><p>TEUTONS® was born in Germany, named after the famous Germanic tribe mentioned by some famous authors, conceptualized and created by technology experts who are artistic and innovative. Specialized in high-end designing, a manufacturing and marketing innovative memory product is its sole purpose. All TEUTONS® product’s research-development & designed in Spain.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
