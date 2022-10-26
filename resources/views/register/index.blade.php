@extends('layouts.mainlogin')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
    <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
        <form action="/register" method="POST">
            @csrf
            <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>
            <div class="form-floating">
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
            <label for="name@example.com">Email Address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>
            <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
            @enderror
            </div>
            <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3"> Already registered? <a href="/login">Login Now</a></small>
    </main>
    </div>
</div>

<div class="limiter">
    <div class="container-login100" style="background-image: url('csslogin/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="/register" method="post">
                @csrf
                <span class="login100-form-title p-b-49">
                    Registrasi
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

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username Is Required">
                    <span class="label-input100">Username</span>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="name@example.com" required value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Name is required">
                    <span class="label-input100">Name</span>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name@example.com" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                    <span class="label-input100">Role Akun</span>
                    <span class="focus-input100"></span><br>                                  
                    <select class="form-select" name="role_id">
                        <option value="2" selected>Board Of Director</option>
                        <option value="3">Project Manager</option>
                        <option value="4">Marketing</option>
                        <option value="5">Sales Agent</option>
                      </select>
                      
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input type="password" name= "password" class="form-control" id="password" placeholder="Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

                
                
                <div class="container-login100-form-btn mt-3">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                    </div>
                </div>
                <div class="flex-col-c p-t-10">
                    <span class="txt1 p-b-17">
                        Already registered? <a href="/login" class="txt2">Login Now</a>
                    </span>
                    
                </div>


                
            </form>
        </div>
    </div>
</div>

@endsection