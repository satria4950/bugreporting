@extends('layouts.mainlogin')

@section('container')

{{-- <div class="row justify-content-center">
    <div class="col-md-4">
    
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
    @endif

    @if (session()->has('gagal'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('gagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
    @endif

    <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        <form action="/login" method="post">
            @csrf
            <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>
            <div class="form-floating">
            <input type="password" name= "password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="auth/google"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Google</a>
        <small class="d-block text-center mt-3"> Not registered yet? <a href="/register">Register Now</a></small>
    </main>
    </div>
</div> --}}

<div class="limiter">
    <div class="container-login100" style="background-image: url('csslogin/images/bg-01.jpg');">
        
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
        @endif

        @if (session()->has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('gagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
        @endif
            <form class="login100-form validate-form" action="/login" method="post">
                @csrf
                <span class="login100-form-title p-b-49">
                    Login
                </span>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
                    <span class="label-input100">Email Address</span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input type="password" name= "password" class="form-control" id="password" placeholder="Password" required>
                    <span class="focus-input100"></span>
                </div>
                
                <div class="container-login100-form-btn mt-3">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </div>
                <div class="flex-col-c p-t-10">
                    <span class="txt1 p-b-17">
                        Not Registered yet?<a href="/register" class="txt2"> Register Here</a>
                    </span>
                    
                </div>


                
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

@endsection