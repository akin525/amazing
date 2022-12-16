<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intez</title>
    <!-- Favicon icon -->
    <link rel="icon" sizes="16x16" href="{{asset('ama.jpeg')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />
    @yield('style')
</head>



<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="{{asset('ama.jpeg')}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">{{Auth::user()->username}}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if(Auth::user()->role=="admin")
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{route('admin/dashboard')}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Administrator</span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="{{route('dashboard')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('airtime')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Buy Airtime</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('select')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Buy Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{url('picktv')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">tv</i>
                    </div>
                    <span class="nav-link-text ms-1">Pay Tv</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('elect')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">light</i>
                    </div>
                    <span class="nav-link-text ms-1">Pay Electricity</span>
                </a>
            </li>
                <li class="nav-item">
                <a class="nav-link text-white " href="{{route('waec')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">bookmark</i>
                    </div>
                    <span class="nav-link-text ms-1">Waec Epin</span>
                </a>
            </li><li class="nav-item">
                <a class="nav-link text-white " href="{{route('neco')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">bookmark</i>
                    </div>
                    <span class="nav-link-text ms-1">Neco Epin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('profile.show')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('invoice')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">wallet</i>
                    </div>
                    <span class="nav-link-text ms-1">All Purchase</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('fund')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">wallet</i>
                    </div>
                    <span class="nav-link-text ms-1">All Deposit</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="{{route('logout')}}" type="button">Logout</a>
        </div>
    </div>
</aside>
@yield('content')
@include('sweetalert::alert')

<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-dashboard.min.js?v=3.0.4')}}"></script>.

            <style>

                * {
                    padding: 0;
                    margin: 0
                }


                button {
                    padding: 20px 30px;
                    font-size: 1.5em;
                    /*width:200px;*/
                    cursor: pointer;
                    border: 0px;
                    position: relative;
                    /*margin: 20px;*/
                    transition: all .25s ease;
                    /*background: rgba(116, 23, 231, 1);*/
                    color: #fff;
                    overflow: hidden;
                    border-radius: 10px
                }

                .load {
                    position: absolute;
                    left: 0px;
                    top: 0px;
                    width: 100%;
                    height: 100%;
                    background: inherit;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: inherit
                }

                .load::after {
                    content: '';
                    position: absolute;
                    border-radius: 50%;
                    border: 3px solid #fff;
                    width: 30px;
                    height: 30px;
                    border-left: 3px solid transparent;
                    border-bottom: 3px solid transparent;
                    animation: loading1 1s ease infinite;
                    z-index: 10
                }

                .load::before {
                    content: '';
                    position: absolute;
                    border-radius: 50%;
                    border: 3px dashed #fff;
                    width: 30px;
                    height: 30px;
                    border-left: 3px solid transparent;
                    border-bottom: 3px solid transparent;
                    animation: loading1 2s linear infinite;
                    z-index: 5
                }

                @keyframes loading1 {
                    0% {
                        transform: rotate(0deg)
                    }

                    100% {
                        transform: rotate(360deg)
                    }
                }

                button.active {
                    transform: scale(.85)
                }

                button.activeLoading .loading {
                    visibility: visible;
                    opacity: 1
                }

                button .loading {
                    opacity: 0;
                    visibility: hidden
                }
            </style>



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
<a href="https://wa.me/2347065946772/?text=Goodday, My Username is {{\Illuminate\Support\Facades\Auth::user()->username}}" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
</body>




