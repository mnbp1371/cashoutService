<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('IDPAY') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('image/favicon.ico')}}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="{{ asset('image/logo.svg') }}" alt="logo">
        <img class="logo-light" src="{{ asset('image/logo.svg') }}" alt="light logo">
    </div>
    <!-- ./ logo -->

    <h5>{{__('LOGIN')}}</h5>

    <!-- form -->
    <form class="user" method="post" action="{{route('login')}}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" placeholder="{{ __('ENTER_YOUR_EMAIL') }}" required autofocus name="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="{{__('PASSWORD')}}" required name="password">
        </div>
        <button class="btn btn-primary btn-block">{{__('LOGIN')}}</button>
        <hr>
        <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm">{{__('REGISTER')}}</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>

</html>
