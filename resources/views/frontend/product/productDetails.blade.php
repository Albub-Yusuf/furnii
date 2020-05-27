@extends('layouts.frontend.master')
@section('ccss')
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('Frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/product.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/styles/product_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/facncybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" id="bootstrap-css">
@endsection
@section('mainContent')
    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(http://localhost/teutonsDev/public/Frontend/images/categories.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">{{$product->category->name}}<span>.</span></div>
                                <div class="home_text"><p style="color:#34ce57">{{$product->name}}</p></div>
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
                                                <a style="text-decoration:none;" class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                                                <a style="text-decoration:none;" class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Specification</a>

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

    <!-- Related Products -->

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
                    @foreach($relatedProducts as $product)
                        @if($product->id != $flag)
                        <!-- Product -->
                        <div class="product pbx">
                            <div class="product_image"><a style="text-decoration:none;" href="{{route('details',$product->id)}}"><img src="{{asset($product->featured_image)}}" alt=""></a></div>
                            <!--div class="product_extra product_new"><a style="text-decoration:none;" href="#">New</a></div-->
                            <div class="product_content">
                                <div class="product_title text-center"><a style="text-decoration:none;" href="{{route('details',$product->id)}}">{{$product->name}}</a></div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('cjs')
        <script src="{{asset('Frontend/js/product.js')}}"></script>
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
    @endsection
@endsection


