<x-guest-layout>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid ps-2 pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{route('login')}}">
                            Amazing Data
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{route('dashboard')}}">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{route('profile.show')}}">
                                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{route('register')}}">
                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                        Sign Up
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{route('login')}}">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                        Sign In
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Sign Up</h4>
                                    <p class="mb-0">Enter your email and password to register</p>
                                </div>
                                <div class="card-body">
                                    <center>
                                        <img width="100" src="{{asset('ama.jpeg')}}">
                                    </center>
                        <form method="post" role="form" action="{{ route('register') }}">
                            @csrf
                            <x-jet-validation-errors class="alert text-white alert-danger" />

                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required/>
                            </div>
                            @if(isset($request->refer))
                                <div class="input-group input-group-outline mb-3">
{{--                                    <label class="form-label">Refer</label>--}}
                                    <input type="text" name="refer" value="{{$request->refer}}" class="form-control" readonly/>
                                </div>
                            @else
                                <div class="field">
                                    <input id="username" class="block mt-1 w-full" type="hidden" name="refer" value="1" required autofocus autocomplete="username" readonly/>
                                </div>
                            @endif
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" name="number" class="form-control">
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Confirm-Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <div class="form-check form-check-info text-start ps-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up<span class="load loading"></span></button>
                            </div>
                        </form>
                            <script>
                                    const btns = document.querySelectorAll('button');
                                    btns.forEach((items)=>{
                                        items.addEventListener('click',(evt)=>{
                                            evt.target.classList.add('activeLoading');
                                        })
                                    })
                                </script>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-2 text-sm mx-auto">
                                        Already have an account?
                                        <a href="{{route('login')}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
