<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{route('admin.dashboard')}}">
                <span class="brand-name">Teutons Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">



                <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="{{route('admin.dashboard')}}" data-toggle="" data-target="#dashboard"
                       aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class=""></b>
                    </a>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Admin"
                       aria-expanded="false" aria-controls="Admin">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Admin</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Admin"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li >
                                <a class="sidenav-item-link" href="{{route('user.index')}}">
                                    <span class="nav-text">Admin List</span>
                                </a>
                            </li>
                            <li >
                                <a class="sidenav-item-link" href="{{route('user.create')}}">
                                    <span class="nav-text">Create Admin</span>
                                </a>
                            </li>
                            <li >
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Manage Admin</span>
                                </a>
                            </li>


                        </div>
                    </ul>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Category"
                       aria-expanded="false" aria-controls="Category">
                        <i class="mdi mdi-hexagon-multiple"></i>
                        <span class="nav-text">Categories</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Category"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li >
                                <a class="sidenav-item-link" href="{{route('category.index')}}">
                                    <span class="nav-text">Category List</span>
                                </a>
                            </li>
                            <li >
                                <a class="sidenav-item-link" href="{{route('category.create')}}">
                                    <span class="nav-text">Create Category</span>
                                </a>
                            </li>
                            <li >
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Manage Category</span>
                                </a>
                            </li>


                        </div>
                    </ul>
                </li>
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Products"
                       aria-expanded="false" aria-controls="Products">
                        <i class="mdi mdi-package-variant"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Products"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li >
                                <a class="sidenav-item-link" href="{{route('product.index')}}">
                                    <span class="nav-text">All Products</span>
                                </a>
                            </li>
                            <li >
                                <a class="sidenav-item-link" href="{{route('product.create')}}">
                                    <span class="nav-text">Add New Product</span>
                                </a>
                            </li>
                            <li >
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Manage Product</span>
                                </a>
                            </li>


                        </div>
                    </ul>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Settings"
                       aria-expanded="false" aria-controls="Settings">
                        <i class="mdi mdi-settings"></i>
                        <span class="nav-text">Settings</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Settings"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li >
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Add Banner</span>
                                </a>
                            </li>
                            <li >
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Add Advertise</span>
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>
            </ul>

        </div>

        <hr class="separator" />

        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                    Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                    <div
                            class="progress-bar active"
                            style="width: 40%;"
                            role="progressbar"
                    ></div>
                </div>
                <h6 class="text-uppercase">
                    Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                    <div
                            class="progress-bar progress-bar-warning"
                            style="width: 65%;"
                            role="progressbar"
                    ></div>
                </div>
            </div>
        </div>
    </div>
</aside>
