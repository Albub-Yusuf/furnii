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
        @include('layouts.frontend._header')
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

    <!--<div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/categories.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">{{$product->category->name}}<span>.</span></div>
                                <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <br><br><br><br>

    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class=" col-lg-6">
                    <div class="details_image">
                      <div class="details_image_large"><img src="{{asset($product->featured_image)}}" id="currentImage"  alt="">@if($product->is_new==1) <div class="product_extra product_new"><a href="#">New</a></div> @endif</div>
                        <div class="product-section-images ">
                            <div class="product-section-thumbnail selected">
                                <img src="{{URL::asset($product->featured_image)}}"  width="100%"  alt="" >
                            </div>
                            @if(count($product->product_image))
                                @foreach($product->product_image as $image)
                            <div class="product-section-thumbnail" data-image="{{URL::asset($image->file_path)}}" style="background-color: transparent;">
                                <img src="{{URL::asset($image->file_path)}}"  width="100%"  alt="" >
                            </div>
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
                        </div>
                        <!-- Share -->
                        <div class="details_share">

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

<!--<script>
    (function(){
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-section-thumbnail');
        images.forEach((element) => element.addEventListener('click', thumbnailClick));
        function thumbnailClick(e) {
            currentImage.classList.remove('active');
            currentImage.addEventListener('transitionend', () => {
                currentImage.src = this.querySelector('img').src;
                currentImage.classList.add('active');
            })
            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');
        }
    })();
</script> -->

<script>
    (function(){
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-section-thumbnail');
        images.forEach((element) => element.addEventListener('click', thumbnailClick));
        function thumbnailClick(e) {

         currentImage.src = this.querySelector('img').src;

            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');


        }

    })();
</script>

<script src="{{asset('Frontend/js/jquery-3.2.1.min.js')}}"></script>
<!--JS For FancyBox-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{asset('Frontend/js/jquery.fancybox.min.js')}}"></script>
<!---->

@section('extra-js')


@endsection


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
