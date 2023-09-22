<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Epic :: Login</title>

<!-- Bootstrap Core and vandor -->
{{-- <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" /> --}}
<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

<!-- Core css -->
{{-- <link rel="stylesheet" href="../assets/css/style.min.css"/> --}}
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.min.css') }}">

</head>
<body class="font-muli theme-cyan gradient">

<div class="auth option2">
    <div class="auth_left">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('loginAttempt') }}" method="post">
                    @csrf
                    <div class="text-center">
                        <a class="header-brand" href="index.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
                        <div class="card-title mt-3">Login to your account</div>
                        <a href="{{ route('redirectToFacebook') }}" type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</a>
                        <a type="button" href="{{ route('redirectToGoogle') }}" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</a>
                        <h6 class="mt-3 mb-3">Or</h6>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="form-label"><a href="{{ route('forgotPassword') }}" class="float-right small">I forgot password</a></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" />
                        <span class="custom-control-label">Remember me</span>
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block" title="">Sign in</button>
                        <div class="text-muted mt-4">Don't have account yet? <a href="{{ route('register') }}">Sign up</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
{{-- <script src="../assets/bundles/lib.vendor.bundle.js"></script> --}}
<script src="{{ asset('dashboard/assets/bundles/lib.vendor.bundle.js') }}"></script>

<!-- Start project main js  and page js -->
{{-- <script src="../assets/js/core.js"></script> --}}
<script src="{{ asset('dashboard/assets/js/core.js') }}"></script>
</body>
</html>
