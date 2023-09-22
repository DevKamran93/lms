{{-- @extends('auth::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('auth.name') !!}
    </p>
@endsection --}}
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Epic :: Register</title>

<!-- Bootstrap Core and vandor -->
{{-- <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" /> --}}
<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

<!-- Core css -->
{{-- <link rel="stylesheet" href="../assets/css/style.min.css"/> --}}
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.min.css') }}">
{{-- <link rel="stylesheet" href="assets/css/default.css" /> --}}
<link rel="stylesheet" href="{{ asset('dashboard/university/assets/css/dark.css') }}">

</head>
<body class="font-muli theme-cyan gradient">

<div class="auth option2">
    <div class="auth_left">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('registerAttempt') }}" method="post">
                    @csrf
                    <div class="text-center">
                        <a class="header-brand" href="index.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
                        <div class="card-title">Create new account</div>
                        <button type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</button>
                        <a href="{{ route('redirectToGoogle') }}" type="button" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</a>
                        <h6 class="mt-3 mb-3">Or</h6>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control @error('name')
                            is-invalid
                        @enderror" placeholder="Enter name" name="name" >
                        @error('name')
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email')
                            is-invalid
                        @enderror" placeholder="Enter email" name="email">
                        @error('email')
                            <div class="alert alert-danger">
                                <p>{{ $message }} </p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control @error('password')
                            is-invalid
                        @enderror" placeholder="Password" name="password">
                        @error('password')
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Select User Type</label>
                        <select name="user_type" id="user_type" class="form-control form-select @error('user_type')
                            is-invalid
                            @enderror">
                            <option value="">Select One Below</option>
                            <option value="admin">Admin</option>
                            <option value="professor">Professor</option>
                            <option value="student">Student</option>
                            <option value="staff">Staff</option>
                        </select>
                        @error('user_type')
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" />
                        <span class="custom-control-label">Agree the <a href="#">terms and policy</a></span>
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                        <div class="text-muted mt-4">Already have account? <a href="{{ route('login') }}">Sign in</a></div>
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
