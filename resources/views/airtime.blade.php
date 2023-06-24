@extends('layouts.sidebar')


@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="loading-overlay" id="loadingSpinner" style="display: none;">
            <div class="loading-spinner"></div>
        </div>
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
<br>
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-info text-capitalize ps-3">Airtime Purchase</h6>
            </div>
        </div>

    <form id="dataForm"  class="m-lg-4">
        @csrf
        <div class="row">
            <div class="col-sm-8 card card-body">
                <div id="AirtimeNote" class="alert alert-danger" style="text-transform: uppercase;font-weight: bold;font-size: 23px;display: none;"></div>
                <div id="AirtimePanel">
                    <div class="input-group input-group-outline mb-3">
                            <select name="name" class="text-success form-control" required="">
                                <option>Select your network</option>
                                <option value="m">MTN</option>
                                <option value="g">GLO</option>
                                <option value="a">AIRTEL</option>
                                <option value="9">9MOBILE</option>
                            </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Amount</label>
                            <input type="number" id="amount" name="amount" min="100" max="4000" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Phone Number</label>
                            <input type="number" id="number" name="number" minlength="11" class="form-control" required>
                    </div>
                    <input type="hidden" name="refid" value="<?php echo rand(10000000, 999999999); ?>">
                    <br>
                    <button type="submit" class=" btn" style="color: white;background-color: #28a745" id="btnsubmit"> Purchase Now</button>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="">
                    <div class="card bg-gradient-success" >
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="sales-bx">
                                    <i class="fa fa-wallet text-white" style="font-size: 40px;"></i>
                                    <h4>Balance</h4>
                                    <span>₦{{number_format(intval(Auth::user()->wallet *1), 2)}}</span>
                                </div>
                                <div class="sales-bx" data-bs-toggle="modal" data-bs-target="#airtimeModalCenter">
                                    <i class="fa fa-wallet text-white" style="font-size: 40px"></i>
                                    <h4>Deposit</h4>
                                    <span>₦{{number_format(intval($totaldeposite *1), 2)}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </form>

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
