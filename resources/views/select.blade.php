@extends('layouts.sidebar')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <div class="loading-overlay" id="loadingSpinner" style="display: none;">
            <div class="loading-spinner"></div>
        </div>
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
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class=" text-capitalize ps-3">Data Purchase</h6>
            </div>
        </div>

        <!-- end page title -->
        <div class="row card card-body ">

                <form id="dataForm" class="m-lg-4">
                    @csrf
                    <div class="row ">
                        <div class="col-sm-8 card card-body">
                            <div id="AirtimeNote" class="alert alert-danger" style="text-transform: uppercase;font-weight: bold;font-size: 23px;display: none;"></div>
                            <div id="AirtimePanel">
                    <label class="form-label">Network</label>
                    <div class="input-group input-group-outline mb-3">
                    <select  name="id" id="firstSelect" class="text-success form-control" required="">
                        <option>Select your network</option>
                        @if ($serve->name == 'mcd')
                            <option value="mtn-data">MTN</option>
                            <option value="glo-data">GLO</option>
                            <option value="etisalat-data">9MOBILE</option>
                        @elseif($serve->name=='easyaccess')
                            <option value="MTN">MTN</option>
                            <option value="GLO">GLO</option>
                            <option value="9MOBILE">9MOBILE</option>
                            <option value="AIRTEL">AIRTEL</option>
                        @endif
                        @if ($serve->name == 'mcd')
                            <option value="airtel-data">AIRTEL</option>
                        @endif
                    </select>
                    </div>
                    <br>
                                <div id="div_id_network" class="form-group">
                                    <label for="network" class=" requiredField">
                                        Select Your Plan<span class="asteriskField">*</span>
                                    </label>
                                    <div class="input-group input-group-outline mb-3">
                                        <select name="productid" id="secondSelect" class="text-success form-control" required="" onchange='document.getElementById("po").value = this.value.id;'>

                                            <option>Select Your Plan</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div id="div_id_network" class="form-group">
                                    <label for="network" class=" requiredField">
                                        Enter Phone Number<span class="asteriskField">*</span>
                                    </label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="number" id="number" name="number" minlength="11" class="text-success form-control" required>
                                    </div>
                                </div>
                                <input type="hidden" name="refid" value="<?php echo rand(10000000, 999999999); ?>">
                    <button type="submit" class=" btn" style="color: white;background-color: #28a745">Purchase Now</button>
                            </div>
                        </div>
                </form>
        </center>
        <br>


                <div class="col-sm-4 ">
                    <div class="">
                        <div id="user-activity" class="card" data-aos="fade-up">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-black shadow-info border-radius-lg pt-4 pb-3">
                                    <h6 class=" text-capitalize ps-3">Virtual Account Detail</h6>
                                </div>
                            </div>
                            <div class="card-body">
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



        <br>
    </div>
</div>

@include('layouts.footer')
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
</style>+
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="http:wa.me/2348034547657/?text=Goodday, My Username is....." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#firstSelect').change(function() {
                var selectedValue = $(this).val();
                // Show the loading spinner
                $('#loadingSpinner').show();
                // Send the selected value to the '/getOptions' route
                $.ajax({
                    url: '{{ url('getOptions') }}/' + selectedValue,
                    type: 'GET',
                    success: function(response) {
                        // Handle the successful response
                        var secondSelect = $('#secondSelect');
                        $('#loadingSpinner').hide();
                        // Clear the existing options
                        secondSelect.empty();

                        // Append the received options to the second select box
                        $.each(response, function(index, option) {
                            secondSelect.append('<option  value="' + option.id + '">' + option.plan +  ' --₦' + option.tamount + '</option>');
                        });

                        // Select the desired value dynamically
                        var desiredValue = 'value2'; // Set the desired value here
                        secondSelect.val(desiredValue);
                    },
                    error: function(xhr) {
                        // Handle any errors
                        console.log(xhr.responseText);
                    }
                });
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#dataForm').submit(function(e) {
                e.preventDefault(); // Prevent the form from submitting traditionally
                // Get the form data
                var formData = $(this).serialize();
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to buy ' + document.getElementById("secondSelect").options[document.getElementById("secondSelect").selectedIndex].text + ' on ' + document.getElementById("number").value + '?',
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
                            url: "{{ route('bill') }}",
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
                                        // location.reload();
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


                // Send the AJAX request
            });
        });

    </script>
@endsection
