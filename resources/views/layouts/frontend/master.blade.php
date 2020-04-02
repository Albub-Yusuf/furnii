<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.frontend._head')

</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        @include('layouts.frontend._header')
    </header>

    <!-- Menu -->

    <div class="menu menu_mm trans_300">
        @include('layouts.frontend._menu_hamburger')
    </div>

    <!--Home Page mainContainer-->

    <div class="row" >
        <div class="col-lg-12 col-sm-12 col-md-12" style="min-height: 700px;">
            @yield('mainContent')
        </div>
    </div>


    <!--  <br><br><br><br>-->

    <!--Home Page mainContainer Ends Here-->

    <!--New Footer Design -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            @include('layouts.frontend._footer')
        </div>

    </div>



</div>

@include('layouts.frontend._scripts')
</body>
</html>
