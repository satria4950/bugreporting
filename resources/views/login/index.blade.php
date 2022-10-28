@extends('layouts.mainlogin')

@section('container')

<main class="main-content  mt-0">
    <div class="page-header-login align-items-start min-vh-100">
      <span class="mask bg-gradient-dark opacity-6"></span>
<div class="container my-auto">
        
    <div class="row">
      <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
              <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
            </div>
          </div>
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
          <div class="card-body">
            <form class="text-start" action="/login" method="post">
            @csrf
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Password</label>
                <input type="password" name= "password" class="form-control" id="password" required>
              </div>
              {{-- <div class="form-check form-switch d-flex align-items-center mb-3">
                <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
              </div> --}}
              <div class="text-center">
                <button class="btn bg-gradient-primary w-100 my-4 mb-2" type="submit">Login</button>
              </div>
              <p class="mt-4 text-sm text-center">
                Don't have an account?
                <a href="/register" class="text-primary text-gradient font-weight-bold">Register</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</main>
@endsection