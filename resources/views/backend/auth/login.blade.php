@extends('backend.auth.auth_master')

@section('auth_title')
    Login | Admin Panel
@endsection

@section('auth-content')
     <div class="customlogin-content">
        <div class="pt-4 pb-2">
            <a class="header-brand" href="index.html"> <img src="assets/images/brand/logo.png" class="header-brand-img custom-logo" alt="Daalu.com.ng" style="width: 70%"> <img src="assets/images/brand/logo-white.png" class="header-brand-img custom-logo-dark" alt="Daalu.com.ng"> </a>
        </div>
        <div class="p-4 pt-6">
            <h1 class="mb-2">Login</h1>
            <p class="text-muted">Sign In to your account</p>
        </div>
         @include('backend.layouts.partials.messages')
        <form class="card-body pt-3" id="login" name="login" method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
            <div class="form-group"> <label class="form-label">Mail or Username</label> <input class="form-control" placeholder="Email" type="email" name="email" value="superadmin@example.com">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
             </div>
            <div class="form-group"> <label class="form-label">Password</label> <input class="form-control" placeholder="password" type="password" name="password" value="12345678"> 
             <div class="text-danger"></div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group"> <label class="custom-control custom-checkbox"> <input
                        type="checkbox" class="custom-control-input" name="example-checkbox1"
                        value="option1"> <span class="custom-control-label">Remeber me</span> </label>
            </div>
               <button class="btn btn-primary  submit" id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
          
        </form>
        <div class="card-body border-top-0 pb-6 pt-2">
            <div class="text-center"> <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                        class="ri-facebook-line"></i></span> <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                        class="ri-instagram-line"></i></span> <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                        class="ri-twitter-line"></i></span> </div>
        </div>
    </div>
@endsection