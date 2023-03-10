@extends('layouts.sidebar')


@section('content')


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="#" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">{{Auth::user()->name}}</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="alert alert-info alert-dismissible text-white" role="alert">
        <span class="text-sm">Notification  !: <a href="javascript:;" class="alert-link text-white">{{$me->message}}</a></span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            <h6>Your Referal Link</h6>
            <!-- The text field -->
            <input id="myInput" type="text" class="form-control" value="https://amazingdata.com.ng/register?refer={{$user->username}}" >

            <!-- The button used to copy the text -->
            <button class="btn btn-info" onclick="myFunction()">Copy Referral Link</button>
        </div>
    </div>


    <style>
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

    </style>

    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert( copyText.value);
        }
    </script>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Wallet Balance</p>
                            <h4 class="mb-0">???{{number_format(intval(Auth::user()->wallet *1), 2)}}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total Deposit</p>
                            <h4 class="mb-0">???{{number_format(intval($bill *1), 2)}}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total Purchase</p>
                            <h4 class="mb-0">???{{number_format(intval($bill *1), 2)}}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total Charges</p>
                            <h4 class="mb-0">???{{number_format(intval($charge *1), 2)}}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
                    </div>
                </div>
            </div>
        </div>

<br>

        <div class="alert alert-info alert-dismissible text-white" role="alert">
            <span class="text-sm">Join Whatsapp Group!: <a href="javascript:;" class="alert-link text-white">kindly Join Our Whatsapp-group For any complain:  </a></span>
            <button type="button" onclick="window.location.href='https://chat.whatsapp.com/GgBq2QWvj46Awh1JRNj2KK'" class="btn bg-gradient-primary mt-4 ">Join now</button>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
        </div>
<br>
<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">

            <div class="card-body">
                <div class="invoice-table">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Purchase History</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th>Number</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bil3 as $dp)
                                <tr>
                                    <td>{{$dp->username}}</td>
                                    <td>{{$dp->plan}}</td>
                                    <td>{{$dp->amount}}</td>
                                    <td>{{$dp->phone}}</td>
                                    <td>{{$dp->date}}</td>
                                    <td>@if($dp->result==1)
                                            <span class="badge px-3 py-2 bg-success">Delivered</span>
                                        @else
                                            <span class="badge px-3 py-2 bg-warning">Pending</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$bil3->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div id="user-activity" class="card" data-aos="fade-up">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Virtual Account Detail</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <div class="card">
                    <div class="">
                        <div class="alert alert-primary">
                                @if (Auth::user()->account_number==1 && Auth::user()->account_name==1)
                                    <a href='{{route('vertual')}}' class='btn btn-primary'>Click this section to get your  Virtual Bank Account</a>
                                @else
                                    <div class="row column1">
                                        <div class="col-md-7 col-lg-6">
                                            <div class="card-body">
                                                <ul style="list-style-type:square">
{{--                                                    <li class="text-white"><h6 class="text-white"><b>Personal Virtual Account Number</b></h6></li>--}}
{{--                                                    <br>--}}
                                                    <li class='text-white'><h6 class="text-white"><b>{{Auth::user()->account_name}}</b></h6></li>
                                                    <li class='text-white'><h6 class="text-white"><b>Account No:{{Auth::user()->account_number}}</b></h6></li>
                                                    <li class='text-white'><h6 class="text-white"><b>WEMA-BANK</b></h6></li>
{{--                                                    <br>--}}
{{--                                                    <li class='text-white'><h6 class="text-white"><b>Note: All virtual funding are being set automatically</b></h6></li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-6">
                                            <div>
                                                <center>
                                                    <a href="#">
                                                        <img width="200" src="https://img.freepik.com/free-vector/money-transfer-abstract-concept-illustration_335657-2227.jpg?w=2000"  alt="">
                                                    </a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    </div>
</main>
@endsection
