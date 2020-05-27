<div class="menu_container menu_mm">
    <div class="page_menu_content">

        <div class="page_menu_search menu_mm">
            <form action="#">
                <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
            </form>
        </div>
        <ul class="page_menu_nav menu_mm">
            <li class="page_menu_item has-children menu_mm">
                <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                    <form action="www.google.com" method="get">

                        <input type="text" class="search_input" style="display: inline-block;" name="search" placeholder="Search" required="required">
                        <button class="btn btn-sm btn-secondary" type="submit" style="display: inline-block;"><i class="fa fa-search"></i></button>

                    </form>
                </div>
                <!--<ul class="page_menu_selection menu_mm">
                    <li class="page_menu_item menu_mm"><a href="categories.html">About Us<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="product.html">Products<i class="fa fa-angle-down"></i></a></li>

                    <li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li> -->
                </ul>
            </li>


        <li class="page_menu_item menu_mm"><a href="{{route('frontend')}}">Home</a></li>

            <li class="page_menu_item has-children menu_mm">
                <a href="categories.html">Products<i class="fa fa-angle-down"></i></a>
                <ul class="page_menu_selection menu_mm">
                    @foreach($categories as $category)
                    <li class="page_menu_item menu_mm"><a href="{{route('category.products',$category->id)}}">{{$category->name}}<i class="fa fa-angle-down"></i></a></li>
                    @endforeach
                </ul>
            </li>

        <li class="page_menu_item menu_mm"><a href="{{route('about_us')}}">About Us<i class="fa fa-angle-down"></i></a></li>
<!--
            <li class="page_menu_item menu_mm"><a href="#">News & Events<i class="fa fa-angle-down"></i></a></li>
            <li class="page_menu_item menu_mm"><a href="contact.html">Contact Us<i class="fa fa-angle-down"></i></a></li>
-->
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
