<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/bootstrap.min.css')}}">
    <link href="{{asset('Frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/product.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/product_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/fancybox/jquery.fancybox.min.css')}}">
    <link href="{{asset('Frontend/images/teutons-icon.png')}}" rel="shortcut icon" />

</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo col-sm-1"><a href="http://teutons.com.de/"><img class="img" src="{{asset('Frontend/images/Logo-128.png')}}"></a><a href="#"></a></div>
                            <nav class="main_nav">
                                <ul>
                                    <li class="hassubs active">
                                        <a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="categories.html">Categories</a></li>
                                            <li><a href="product.html">Product</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Check out</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">About Us</a></li>
                                    <li class="hassubs">
                                        <a href="categories.html">products</a>
                                        <ul>
                                            <li><a href="categories.html">USB Flash Drive</a></li>
                                            <hr>
                                            <li class="dropdown"><a href="categories.html">SSD</a>
                                            </li><hr>
                                            <li><a href="categories.html">RAM</a></li><hr>
                                            <li><a href="categories.html">Bluetooth Speaker</a></li><hr>
                                            <li><a href="categories.html">Cable</a></li><hr>
                                        </ul>
                                    </li>
                                    <li><a href="#">News & Events</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class="header_extra ml-auto">
                                <div class="search">
                                    <div class="search_icon">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
                                             xml:space="preserve">
										<g>
                                            <path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
                                        </g>
									</svg>
                                    </div>
                                </div>
                                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Panel -->
        <div class="search_panel trans_300">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                            <form action="#">
                                <input type="text" class="search_input" placeholder="Search" required="required">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="header_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu menu_mm trans_300">
        <div class="menu_container menu_mm">
            <div class="page_menu_content">

                <div class="page_menu_search menu_mm">
                    <form action="#">
                        <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                    </form>
                </div>
                <ul class="page_menu_nav menu_mm">
                    <li class="page_menu_item has-children menu_mm">
                        <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
                        <ul class="page_menu_selection menu_mm">
                            <li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
                        </ul>
                    </li>
                    <li class="page_menu_item has-children menu_mm">
                        <a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
                        <ul class="page_menu_selection menu_mm">
                            <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
                        </ul>
                    </li>
                    <li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="menu_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/categories.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Bluetooth Speakers<span>.</span></div>
                                <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large"><a href="{{asset($product->featured_image)}}" data-fancybox data-caption="Product Image"><img src="{{asset($product->featured_image)}}" alt=""></a>@if($product->is_new==1) <div class="product_extra product_new"><a href="#">New</a></div> @endif</div>
                        <div class="details_image_thumbnails d-flex flex-row align-items-start">
                            @if(count($product->product_image))
                                @foreach($product->product_image as $image)
                                    <div class="details_image_thumbnail active" data-image="{{URL::asset($image->file_path)}}"> <a href="{{asset($image->file_path)}}" data-fancybox data-caption="{{$product->name}}"> <img src="{{URL::asset($image->file_path)}}" alt=""> </a></div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name">{{$product->name}}</div>

                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Category:</div>
                            <span>{{$product->category->name}}</span>
                        </div>
                        <div class="details_text">
                            {!! $product->short_description !!}
                            <!--
                            <p>TOLEDO X8 a quality wireless bluetooth speaker with elegant design. Packed with 10W (5W x 2) dual stereo speaker. Support bluetooth with hands free call function, FM radio, 3.5mm AUX input & microSD card for playing your desire music.It’s 1200mAh Lithium Battery will provide up to 5 hours of playback time.



                            <h4 style="color:#6c6a74">Specifications:</h4>
                            <ul style="list-style-type:disc; color:#6c6a74;">
                                <li>Power Output: 10W (5W x 2)</li>
                                <li>Driver Size: 57mm x 2</li>
                                <li>Speaker Impedance: 3Ω</li>
                                <li>Signal to Noise Ratio: ≥80db</li>
                                <li>Playback Time: Up to 5 hours</li>
                                <li>Working Voltage: DC 5V</li>
                                <li>Lithium Battery: 1200mAh</li>
                            </ul>
                            </p>
                            -->
                        </div>

                        <!-- Product Quantity -->


                        <!-- Share -->
                        <div class="details_share">
                            <!--
                            <span>Share:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            -->
                        </div>
                    </div>
                </div>
            </div>

            <!--Tab section goes here-->


            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <!---->

                        <section id="tabs" class="project-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Specification</a>

                                                <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</a>

                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                                <div class="description_text">
                                                    {!! $product->description !!}
                                                    <!--
                                                    <p style="color:#6c6a74;">TOLEDO X8 a quality wireless bluetooth speaker with elegant design. Packed with 10W (5W x 2) dual stereo speaker. Support bluetooth with hands free call function, FM radio, 3.5mm AUX input & microSD card for playing your desire music.It’s 1200mAh Lithium Battery will provide up to 5 hours of playback time.



                                                    <h4 style="color:#6c6a74">Specifications:</h4>
                                                    <ul style="list-style-type:disc; color:#6c6a74;">
                                                        <li>Power Output: 10W (5W x 2)</li>
                                                        <li>Driver Size: 57mm x 2</li>
                                                        <li>Speaker Impedance: 3Ω</li>
                                                        <li>Signal to Noise Ratio: ≥80db</li>
                                                        <li>Playback Time: Up to 5 hours</li>
                                                        <li>Working Voltage: DC 5V</li>
                                                        <li>Lithium Battery: 1200mAh</li>
                                                    </ul>
                                                    </p>
                                                    -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                                <div class="description_text">
                                                   {!! $product->short_description !!}
                                                    <!--
                                                    <p>
                                                    <h4 style="color:#6c6a74">Product Specifications:</h4>
                                                    <ul style="list-style-type:disc; color:#6c6a74;">
                                                        <li>Power Output: 10W (5W x 2)</li>
                                                        <li>Driver Size: 57mm x 2</li>
                                                        <li>Speaker Impedance: 3Ω</li>
                                                        <li>Signal to Noise Ratio: ≥80db</li>
                                                        <li>Playback Time: Up to 5 hours</li>
                                                        <li>Working Voltage: DC 5V</li>
                                                        <li>Lithium Battery: 1200mAh</li>
                                                    </ul>
                                                    </p>
                                                    -->
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">

                                                <div class="description_text"><p>Currently No Review Available for this Product.</p></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!---->
                    </div>
                </div>
            </div>

            <!-- Tab section ends here-->

        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="products_title">Related Products</div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

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
                            <div class="product_extra product_sale"><a href="#">Sale</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="#">Olite Bluetooth Speaker</a></div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/Olite_Blue.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="#">Bluetooth Speaker</a></div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('Frontend/images/Box_Blue.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="#">Bluetooth Wireless Speaker</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--New Footer Design -->
    <div class="row">
        <div style="min-height:200px; color:#000; background-color:#ccc;" class="col-lg-10 offset-lg-1 d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center ">
            <div class="footer_logo col-lg-4 col-md-4 col-sm-4" style="background-color:; color:lime;"><a href="#">Teutons<sup>&reg</sup></a></div>
            <div class="text-center col-lg-4 col-md-4 col-sm-4" style="margin:0 auto; background-color:;">Copyright &copy2020 all rights reserved</div>
            <div class="footer_social ml-lg-auto  col-md-4 col-sm-4col-lg-4"style="margin-top: 0; background-color:; color:lime;">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>



        </div>
    </div>
</div>

    <script src="{{asset('Frontend/js/jquery-3.2.1.min.js')}}"></script>
    <!--JS For FancyBox-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{asset('Frontend/js/jquery.fancybox.min.js')}}"></script>
    <!---->

    <script src="{{asset('Frontend/styles/popper.js')}}"></script>
    <script src="{{asset('Frontend/styles/bootstrap.min.js')}}"></script>
    <script src="{{asset('Frontend/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('Frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('Frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('Frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('Frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('Frontend/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('Frontend/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('Frontend/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('Frontend/js/product.js')}}"></script>
</body>
</html>
