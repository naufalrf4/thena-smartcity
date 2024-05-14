@extends('layouts.master-without-nav')

@section('title')
    Reset Password
@endsection

@section('page-title')
    Reset Password
@endsection

@section('content')
    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="mb-4 pb-2">
                            <a href="index" class="d-block auth-logo">
                                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="30"
                                    class="auth-logo-dark me-start">
                                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30"
                                    class="auth-logo-light me-start">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5>Create New Password</h5>
                                    <p class="text-muted">Secure your account with webadmin.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{ route('password.update') }}" class="auth-input">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ $email ?? old('email') }}" required
                                                autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- Rest of your form remains the same -->
                                        <!-- Password inputs, confirmation, submit button, etc. -->
                                        <!-- Remember password link -->
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Remember your password? <a href="{{ route('login') }}"
                                                    class="fw-medium text-primary">Login</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center p-4">
                            <p>© <script> document.write(new Date().getFullYear()) </script> webadmin. Crafted with <i
                                    class="mdi mdi-heart text-danger"></i> by Themesdesign </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
