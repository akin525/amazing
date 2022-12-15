<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 07:51:18 GMT -->
<head>

    <meta charset="utf-8" />
    <title>{{Auth::user()->name}} Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="We offer instant recharge of Airtime, Databundle, CableTV (DStv, GOtv & Startimes), Electricity Bill Payment and more" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://amazingdata.com.ng/logoi.png.png">

    <!-- jsvectormap css -->
    <link href="{{asset('admin/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{asset('admin/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset('admin/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('admin/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/extra-libs/multicheck/multicheck.css')}}">
</head>

<body>
<style>
    .preloader
    {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: #fff;
        z-index: 9999;
        text-align: center;
    }
    .preloader-icon
    {
        position: relative;
        top: 45%;
        width: 100px;
        border-radius: 50%;
        animation: shake 1.5s infinite;
    }
    @keyframes shake
    {
        0% { transform: translate(1px, -1px) rotate(0deg);}
        10% { transform: translate(1px, -3px) rotate(-1deg);}
        20% { transform: translate(1px, -5px) rotate(-3deg);}
        30% { transform: translate(1px, -7px) rotate(0deg);}
        40% { transform: translate(1px, -9px) rotate(1deg);}
        50% { transform: translate(1px, -11px) rotate(3deg);}
        60% { transform: translate(1px, -9px) rotate(0deg);}
        70% { transform: translate(1px, -7px) rotate(-1deg);}
        80% { transform: translate(1px, -5px) rotate(-3deg);}
        90% { transform: translate(1px, -3px) rotate(0deg);}
        100% { transform: translate(1px, -1px) rotate(-1deg);}
    }
</style>
<div class="preloader"> <img class="preloader-icon" src="{{asset('gp.gif')}}" alt="My Site Preloader"> </div>
@include('sweetalert::alert')
<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="{{route('admin/dashboard')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('bv2.png')}}" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="{{asset('bv2.png')}}" alt="" height="17">
                        </span>
                        </a>

                        <a href="/admin/dashboard" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('bv2.png')}}" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="{{asset('bv2.png')}}" alt="" height="17">
                        </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-md-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                   id="search-options" value="">
                            <span class="mdi mdi-magnify search-widget-icon"></span>
                            <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                  id="search-close-options"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                            <div data-simplebar style="max-height: 320px;">
                                <!-- item-->
                                <div class="dropdown-header">
                                    <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                </div>

                                <div class="dropdown-item bg-transparent text-wrap">
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i
                                            class="mdi mdi-magnify ms-1"></i></a>
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i
                                            class="mdi mdi-magnify ms-1"></i></a>
                                </div>
                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Analytics Dashboard</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Help Center</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                    <span>My account settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-2.jpg"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">Angela Bernier</h6>
                                                <span class="fs-11 mb-0 text-muted">Manager</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{asset('bv2.png')}}"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">David Grasso</h6>
                                                <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-5.jpg"
                                                 class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">Mike Bunch</h6>
                                                <span class="fs-11 mb-0 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center pt-3 pb-1">
                                <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i
                                        class="ri-arrow-right-line ms-1"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-flex align-items-center">


                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                            <i class='bx bx-moon fs-22'></i>
                        </button>
                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{asset('bv2.png')}}"
                                 alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{Auth::user()->name}}</span>
{{--                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>--}}
                            </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome {{Auth::user()->username}}</h6>
                            <a class="dropdown-item" href="{{ route('profile.show') }}"><i
                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Profile</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Balance : <b>₦{{number_format(intval(Auth::user()->wallet *1), 2)}}</b></span></a>
                            <a class="dropdown-item" href="{{route('logout')}}"><i
                                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle" data-key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="{{route('dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <h4 class="text-capitalize text-white"><b>Amazing-Data</b></h4>
{{--                        <img src="{{asset('sam.png')}}" alt="" width="150" >--}}
                    </span>
                <span class="logo-lg">
                    <h4 class="text-capitalize text-white"><b>Amazing-Data</b></h4>

{{--                        <img src="{{asset('sam.png')}}" alt="" width="150" >--}}
                    </span>
            </a>
            <!-- Light Logo-->
            <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <h4 class="text-capitalize text-white"><b>Amazing-Data</b></h4>

{{--                        <img src="{{asset('sam.png')}}" alt="" width="150">--}}
                    </span>
                <span class="logo-lg">
{{--                        <img src="{{asset('sam.png')}}" alt="" width="150">--}}
                    <h4 class="text-capitalize text-white"><b>Amazing-Data</b></h4>

                    </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('dashboard')}}"   aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Switch To User</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/dashboard')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/user')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-account-box-fill"></i> <span data-key="t-dashboards">All Users</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/deposits')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-money-cny-box-fill"></i> <span data-key="t-dashboards">All Deposits</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/air')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-phone-fill"></i> <span data-key="t-airtime">Airtime Controller</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/server')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-bar-chart-box-fill"></i> <span data-key="t-data">Data Controller</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/renotransaction')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-tv-2-fill"></i> <span data-key="t-data">Reno Transaction</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/product')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-shopping-cart-fill"></i> <span data-key="t-data">Reno Product</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/sell')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-shopping-cart-fill"></i> <span data-key="t-data">Reno SellingPrice</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/setcharge')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-settings-2-fill"></i> <span data-key="t-data">Set Charges</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/noti')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-settings-2-fill"></i> <span data-key="t-data">Set Notification</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/bills')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-phone-fill"></i> <span data-key="t-data">All Bills</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/credit')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-money-cny-box-fill"></i> <span data-key="t-data">Credit User</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/charge')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-money-cny-box-fill"></i> <span data-key="t-data">Charge User</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/finds')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-account-box-fill"></i> <span data-key="t-data">Find User</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('admin/finddeposite')}}"   aria-controls="sidebarDashboards">
                            <i class="ri-search-2-fill"></i> <span data-key="t-data">Find Deposit</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->


                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>
    <div class="main-content">





        <!-- END layout-wrapper -->



        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
        <script src="{{asset('admin/assets/js/plugins.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Vector map-->
        <script src="{{asset('admin/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

        <!--Swiper slider js-->
        <script src="{{asset('admin/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{asset('admin/assets/js/pages/dashboard-ecommerce.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>




        <style>
            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                right:40px;
                background-color:#25d366;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                font-size:30px;
                box-shadow: 2px 2px 3px #999;
                z-index:100;
            }

            .my-float{
                margin-top:16px;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
{{--        <a href="http:wa.me/2348034547657/?text=Goodday, My Username is....." class="float" target="_blank">--}}
{{--            <i class="fa fa-whatsapp my-float"></i>--}}
{{--        </a>--}}
        <script>
            window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }
        </script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 07:53:05 GMT -->
</html>
