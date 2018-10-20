<header class="topbar">
    <div class="container">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <div class="row">
                    <div class="col-md-3">
                        <a class="navbar-brand " href="#">
                            <img src="{{asset('img/logo.jpg')}}" height="40" width="40" alt="logo" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('img/logo.jpg')}}" height="40" width="40" alt="logo" class="light-logo" />
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="navbar-brand " href="#">
                            <h1 class="display-6 font-weight-bold">EPA</h1>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                </ul>
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="hidden-md-down text-white">{{ Auth::user()->username }}&nbsp;
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <!-- text-->
                            @if (Auth::user()->updated==0)

                            @else
                                @if(Auth::user()->userType == 'admin')
                                    <a href="{{route('super.admin.update')}}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                @elseif(Auth::user()->userType == 'user')
                                    <a href="{{route('admin.update')}}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                @endif

                            @endif
                        <!-- text-->
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            @if(Auth::user()->userType == 'user')
                                <a href="{{route('user.logout')}}" class="dropdown-item">
                                    <i class="fa fa-power-off"></i>
                                    Logout
                                </a>

                            @elseif(Auth::user()->userType == 'admin')
                                <a href="{{route('admin.logout')}}" class="dropdown-item">
                                    <i class="fa fa-power-off"></i>
                                    Logout
                                </a>

                            @endif
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
@if (Auth::user()->updated==0)

@else
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="http://eliteadmin.themedesigner.in/demos/bt4/assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li>
                    @if(Auth::user()->userType=='admin')
                        <a class="waves-effect waves-dark" href="{{route('admin-dashboard')}}">
                            <span class="hide-menu">
                                <i class="icon-speedometer"></i> Dashboard
                            </span>
                        </a>

                        @else
                        <a class="waves-effect waves-dark" href="{{route('home')}}">
                            <span class="hide-menu">
                                <i class="icon-speedometer"></i> Dashboard
                            </span>
                        </a>
                        @endif
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)">
                            <span class="hide-menu">
                                <i class="icon-speedometer"></i> All Messages
                            </span>
                    </a>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)">
                            <span class="hide-menu">
                                <i class="icon-speedometer"></i> Processed Messages
                            </span>
                    </a>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)">
                            <span class="hide-menu">
                                <i class="icon-speedometer"></i> Unprocessed Messages
                            </span>
                    </a>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)">
                            <span class="hide-menu">
                                <i class="icon-speedometer"></i> Archived Messages
                            </span>
                    </a>
                </li>

                @if(Auth::user()->userType=="admin")
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-settings"></i>
                            <span class="hide-menu">
                                Admins
                            </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.all')}}">All Admin</a></li>
                            <li><a href="{{route('admin.new')}}">New Admin</a></li>
                            <li><a href="{{route('super.admin.new')}}">New Super Admin</a></li>
                        </ul>
                    </li>
                    @else

                @endif

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
    @endif
