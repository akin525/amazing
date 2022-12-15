@include('layouts.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Waec Checker</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboards</a></li>
                            <li class="breadcrumb-item active">Waec Checker</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10">

                        <div class="page-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="page-title">Waec Result Checker</h3>
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
                                <div class="row text-left">
                                    <x-jet-validation-errors class="alert alert-success" />

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="numofpins" style="color: #000000">No of Pins</label>
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
                                </div>
                                <div class="row text-left">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="numofpins" style="color: #000000">Amount per Unit (₦)</label>
                                            <input id="amount" name="amount" class="form-control rounded-right py-4" value="{{$waec['tamount']}}" style="border-radius: 0px;" readonly="">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{rand(111111111, 999999999)}}">
                                </div>
                                <button class="btn-danger rounded btn-block font-weight-bold py-2 my-4" type="submit">Generate</button>
                            </form>
                            <a class="btn-success btn-block rounded text-center font-weight-bold py-2 my-4" href="{{route('dashboard')}}" style="text-decoration: none;">
                                Back to Dashboard
                            </a>
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
                                    <h3>Waec Pins</h3>

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


