<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('IDPAY')}}</title>

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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="{{ asset('image/logo.svg') }}" alt="logo">
        <img class="logo-light" src="{{ asset('image/logo.svg') }}" alt="light logo">
    </div>
    <!-- ./ logo -->

    <h5>{{__('CREATE_ACCOUNT')}}</h5>

    <!-- form -->
    <form class="user" method="post" action="{{route('register')}}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" placeholder="{{__('EMAIL')}}" required autofocus name="email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{__('NAME')}}" required autofocus name="name">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="{{__('PASSWORD')}}" required name="password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="{{__('PASSWORD_CONFIRMATION')}}" required name="password_confirmation">
        </div>
        <button class="btn btn-primary btn-block">ثبت‌نام</button>
        <hr>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>

</html>
