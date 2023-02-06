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

        <br>
        <br>
    <div class="midde_cont">
    <div class="container-fluid">
        <div class="col-xl-12 ">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Referral Bonus</p>
                        <h4 class="total_no text-center">NGN {{ number_format(intval($totalrefer *1),2)}}</h4>
                    </div>
                </div>
            </div>
        </div>

<br/>
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

        <br>
        <div class="span9">
            <div class="card-body">
                <div class="module">
                    <div class="module-head">
                        <h3>
                            Referral System</h3>
                    </div>
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <!--        <h3>Transactions</h3>-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                        <div class="module-body table">
                                            <!--        <table class="datatable-1 table table-bordered" >-->
                                            <table id="data-table-buttons"   class="datatable-1 table table-bordered table-striped	 display" >

                                                <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Referal</th>
                                                    <th>Referal Bonus</th>
                                                    <!--                <th>Action</th>-->
                                                </tr>
                                                </thead>
                                                <tbody>
                                               @foreach($refers as $re)
                                                <tr>
                                                    <td>{{$re->username}}</td>
                                                    <td>{{$re->newuserid}}</td>
                                                    <td>{{$re->amount}}</td>
                                                </tr>
                                                   @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
