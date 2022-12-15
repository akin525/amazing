@include('admin.layouts.sidebar')
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Admin/Reno Reseller Price</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('admin/dashboard')}}">Dashboards</a></li>
                            <li class="breadcrumb-item active">Admin/Reno Reseller Price</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted mb-4 font-13">Product Controller</p>
                        <div class="table-responsive">
                            <table id="data-table-buttons" class="table table-striped table-bordered align-middle">
                                <thead>
                                <tr>
                                    <th>Network</th>
                                    <th>Plan</th>
                                    <th>Reno amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $seller)
                                    <tr>

                                        <td> {{$seller['network']}} </td>
                                        <td> {{$seller['plan']}}</td>
                                        <td> {{$seller['ramount']}}</td>
                                    <td>@if($seller['status']=="1")<h6 class="btn-success">Active</h6>@else<h6
                                                class="btn-warning">
                                                Not-Active</h6> @endif
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
@include('layouts.footer')
