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
                            <h4 class="mb-0">₦{{number_format(intval(Auth::user()->wallet *1), 2)}}</h4>
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
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total Deposit</p>
                            <h4 class="mb-0">₦{{number_format(intval($totaldeposite *1), 2)}}</h4>
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
                            <h4 class="mb-0">₦{{number_format(intval($bill *1), 2)}}</h4>
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
                            <h4 class="mb-0">₦{{number_format(intval($charge *1), 2)}}</h4>
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

        <div class="alert alert-secondary alert-dismissible text-white" role="alert">
            <span class="text-sm">Join Whatsapp Group!: <a href="javascript:;" class="alert-link text-white">kindly Join Our Whatsapp-group For any complain:  </a></span>
            <button type="button" onclick="window.location.href='https://chat.whatsapp.com/GgBq2QWvj46Awh1JRNj2KK'" class="btn bg-gradient-info mt-4 ">Join now</button>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
        </div>
<br>
<div class="row">
    <div class="col-xl-6 ">
        <div class="card">

            <div class="card-body">
                <div class="invoice-table">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-black shadow-info border-radius-lg pt-4 pb-3">
                            <h6 class="text-capitalize ps-3">Quick Purchase</h6>
                        </div>
                    </div>
                    <br>
                    <br>
                    <center>
                    <div class="col-md-8">
                        <div class="card bg-gradient-dark" >
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <a href="{{route('select')}}"><div class="sales-bx">
                                        <i class="fa fa-network-wired text-white" style="font-size: 40px;"></i>
                                        <h4>Buy Data</h4>
                                    </div>
                                    </a>
                                    <div class="sales-bx" data-bs-toggle="modal" data-bs-target="#airtimeModalCenter">
                                        <i class="fa fa-phone text-white" style="font-size: 40px"></i>
                                        <h4>Airtime</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                    <div class="modal fade" id="airtimeModalCenter">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="loading-overlay" id="loadingSpinner" style="display: none;">
                                <div class="loading-spinner"></div>
                            </div>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Airtime Recharge</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <form id="dataForm" >
                                    @csrf
                                    <div class="card card-body">
                                        <p>AIRTIME PURCHASE</p>
                                        {{--                       <input placeholder="Your e-mail" class="subscribe-input" name="email" type="email">--}}
                                        <br/>
                                        <div id="div_id_network" class="form-group">
                                            <label for="network" class=" requiredField">
                                                Network<span class="asteriskField">*</span>
                                            </label>
                                            <div class="">
                                                <select name="name" class="text-success form-control" required="">

                                                    <option value="m">MTN</option>
                                                    <option value="g">GLO</option>
                                                    <option value="a">AIRTEL</option>
                                                    <option value="9">9MOBILE</option>

                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div id="div_id_network" >
                                            <label for="network" class=" requiredField">
                                                Enter Amount<span class="asteriskField">*</span>
                                            </label>
                                            <div class="">
                                                <input type="number" id="amount" name="amount" min="100" max="4000" class="text-success form-control" required>
                                            </div>
                                        </div>
                                        <br/>
                                        <div id="div_id_network" class="form-group">
                                            <label for="network" class=" requiredField">
                                                Enter Phone Number<span class="asteriskField">*</span>
                                            </label>
                                            <div class="">
                                                <input type="number" id="number" name="number" minlength="11" class="text-success form-control" required >
                                            </div>
                                        </div>
                                        <input type="hidden" name="refid" value="<?php echo rand(10000000, 999999999); ?>">
                                        <button type="submit" class="btn btn-info">PURCHASE</button>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    {{--                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div id="user-activity" class="card" data-aos="fade-up">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-black shadow-info border-radius-lg pt-4 pb-3">
                    <h6 class=" text-capitalize ps-3">Virtual Account Detail</h6>
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
                        <div class="alert alert-black">
                                @if (Auth::user()->account_number==1 && Auth::user()->account_name==1)
                                    <a href='{{route('vertual')}}' class='btn btn-primary'>Click this section to get your  Virtual Bank Account</a>
                                @else
                                    <div class="row column1">
                                        <div class="col-md-7 col-lg-6">
                                            <div class="card-body">
                                                <ul style="list-style-type:square">
{{--                                                    <li class="text-white"><h6 class="text-white"><b>Personal Virtual Account Number</b></h6></li>--}}
{{--                                                    <br>--}}
                                                    <li ><h6 ><b>{{Auth::user()->account_name}}</b></h6></li>
                                                    <li><h6 ><b>Account No:{{Auth::user()->account_number}}</b></h6></li>
                                                    <li><h6><b>WEMA-BANK</b></h6></li>
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
@section('script')
    <script>
        $(document).ready(function() {


            // Send the AJAX request
            $('#dataForm').submit(function(e) {
                e.preventDefault(); // Prevent the form from submitting traditionally

                // Get the form data
                var formData = $(this).serialize();
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to buy airtime of ₦' + document.getElementById("amount").value + ' on ' + document.getElementById("number").value +' ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // The user clicked "Yes", proceed with the action
                        // Add your jQuery code here
                        // For example, perform an AJAX request or update the page content
                        $('#loadingSpinner').show();

                        $.ajax({
                            url: "{{ route('buyairtime') }}",
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                // Handle the success response here
                                $('#loadingSpinner').hide();

                                console.log(response);
                                // Update the page or perform any other actions based on the response

                                if (response.status == 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: response.message
                                    }).then(() => {
                                        // location.reload(); // Reload the page
                                        window.location.href = "{{ url('viewpdf') }}/" + response.id;                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'info',
                                        title: 'Pending',
                                        text: response.message
                                    });
                                    // Handle any other response status
                                }

                            },
                            error: function(xhr) {
                                $('#loadingSpinner').hide();
                                Swal.fire({
                                    icon: 'error',
                                    title: 'fail',
                                    text: xhr.responseText
                                });
                                // Handle any errors
                                console.log(xhr.responseText);

                            }
                        });

                    }
                });
            });
        });

    </script>
@endsection
