@include('admin.layouts.sidebar')
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Admin/Bills</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('admin/dashboard')}}">Dashboards</a></li>
                            <li class="breadcrumb-item active">Admin/Bills</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-counter"></i></h1>

                <h6 class="text-white">{{ number_format($tt) ?? 'Total Bills Purchase' }}</h6>
                <h6 class="text-white">Total Bill</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-counter"></i></h1>
                <h6 class="text-white">{{ number_format($ft) ?? 'Total Today' }}</h6>
                <h6 class="text-white">Today Total Bills</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-counter"></i></h1>
                <h6 class="text-white">{{ $st ?? 'Bills Purchase Yesterday' }}</h6>
                <h6 class="text-white">Bills Purchase Yesterday</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-counter"></i></h1>
                <h6 class="text-white">{{ number_format($rt) ?? 'Total Reversed' }}</h6>
                <h6 class="text-white">Bills Purchase 2Days Ago</h6>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-secondary text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-wallet"></i></h1>

                <h6 class="text-white">₦{{ number_format($amount) ?? 'Total Bills Purchase' }}</h6>
                <h6 class="text-white">Sum of Total Transaction </h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-wallet"></i></h1>
                <h6 class="text-white">₦{{ number_format($am) ?? 'Total Today' }}</h6>
                <h6 class="text-white">Sum Of Today Bills Purchase</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-wallet"></i></h1>
                <h6 class="text-white">₦{{ $am1 ?? 'Bills Purchase Yesterday' }}</h6>
                <h6 class="text-white">Sum Of  Yesterday Bills Purchase</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-primary text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-wallet"></i></h1>
                <h6 class="text-white">₦{{ number_format($am2) ?? 'Total Reversed' }}</h6>
                <h6 class="text-white">Sum Of Total Bills Purchase 2Days Ago</h6>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Bills Purchase Table</h4>
                {{--                    <p class="text-muted mb-4 font-13">Use <code>pencil icon</code> to view user profile.</p>--}}
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Username</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Number</th>
                            <th>Token</th>
                            <th>Plan</th>
                            <th>Ref</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $dat)
                            <tr>
                                <td>{{$dat->id}}</td>
                                <td>{{$dat->username}}
                                </td>
                                <td>{{$dat->amount}}</td>
                                <td class="center">

                                    @if($dat->result=="1")
                                        <span class="badge badge-success">Delivered</span>
                                    @elseif($dat->result=="0")
                                        <span class="badge badge-warning">Not-Delivered</span>
                                    @else
                                        <span class="badge badge-info">{{$dat->result}}</span>
                                    @endif

                                </td>
                                <td>{{$dat->phone}}</td>
                                <td>{{$dat->token}}</td>
                                <td>{{$dat->plan}}</td>
                                <td>{{$dat->refid}}</td>
                                <td>{{$dat->date}}</td>
                                <td><a href="profile/{{ $dat->username }}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@include('layouts.footer')
