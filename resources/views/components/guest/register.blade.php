@extends('layout.guest')

@section('name')
<div class="card-body p-4">
    <div class="text-center mt-2">
        <h5 class="text-primary">Welcome Back !</h5>
        <p class="text-muted">Sign in to continue to Velzon.</p>
    </div>
    <div class="p-2 mt-4">
        <form action="https://themesbrand.com/velzon/html/minimal/index.html">

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username"  name="email">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" placeholder="Enter E-mail" name="email">
            </div>

            <div class="mb-3">
                <div class="float-end">
                    <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
                </div>
                <label class="form-label" for="password-input">Password</label>
                <div class="position-relative auth-pass-inputgroup mb-3">
                    <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input"  name="email">
                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="auth-remember-check" >
                <label class="form-check-label" for="auth-remember-check">Remember me</label>
            </div>

            <div class="mt-4">
                <button class="btn btn-success w-100" type="submit">Sign In</button>
            </div>

            <div class="mt-4 text-center">
                <div class="signin-other-title">
                    <h5 class="fs-13 mb-4 title">Sign In with</h5>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                    <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection