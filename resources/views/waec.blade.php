@include('layouts.sidebar')


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
        <br>
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Weac Result Checker</h6>
            </div>
        </div>
<div class="page-content">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10">

                        <div class="page-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="page-title"></h3>
                                    <ul class="breadcrumb">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-white rounded text-center">


                            <script>
                                $(document).ready(function() {
                                    toastr.options.timeOut = 60000;
                                    @if (Session::has('error'))
                                    toastr.error('{{ Session::get('error') }}');
                                    @elseif(Session::has('success'))
                                    toastr.success('{{ Session::get('success') }}');
                                    @endif
                                });

                            </script>


                            <form method="post" action="{{route('wac')}}" id="form_submit">
                                @csrf
                                <div class="row card card-body">
                                <x-jet-validation-errors class="alert alert-success" />

                                    <div class="col-lg-12">
                                        <label class="small mb-1" for="numofpins" style="color: #000000">No of Pins</label>
                                        <div class="input-group input-group-outline my-3">
                                            <select id="numofpins" name="value" class="form-control rounded-right" style="border-radius: 0px; height: 50px;" required="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="10"> 10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="small mb-1" for="numofpins" style="color: #000000">Amount per Unit (₦)</label>
                                        <div class="input-group input-group-outline my-3">
                                            <input id="amount" name="amount" class="form-control rounded-right py-4" value="{{$waec['tamount']}}" style="border-radius: 0px;" readonly="">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{rand(111111111, 999999999)}}">
                                    <button class="btn bg-gradient-primary font-weight-bold py-2 my-4" type="submit">Generate</button>
                            </form>
                            <a class="btn bg-gradient-info text-center font-weight-bold py-2 my-4" href="{{route('dashboard')}}" style="text-decoration: none;">
                                Back to Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                <br>
                <br>
                <br>
                <div class="content">
                    <div class="module">
                        <div class="module-head">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                            <h6 class="text-white text-capitalize ps-3">Waec Pins</h6>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="data-table-buttons" class="table table-striped table-bordered align-middle">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Username</th>
                                                <th>Seria-Number</th>
                                                <th>Pin</th>
                                                <th>Ref</th>
                                                <!--                                                    <th>Action</th>-->
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($wa as $re)
                                                <tr>
                                                    <td>{{$re->created_at}}</td>
                                                    <td>{{$re->username}}</td>
                                                    <td>{{$re->seria}}</td>
                                                    <td>{{$re->pin}}</td>
                                                    <td>{{$re->ref}}</td>
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
    </main>
@endsection


