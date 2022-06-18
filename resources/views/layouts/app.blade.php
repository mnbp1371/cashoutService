<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('IDPAY_CASH_OUT') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('image/favicon.ico')}}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="vendors/datepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/Datepiker/persian-datepicker.css">


    <!-- Fullcalendar -->
    <link rel="stylesheet" href="vendors/fullcalendar/fullcalendar.min.css" type="text/css">
    <link href='assets/Cal/fullcalendar.css' rel='stylesheet'/>
    <link href='assets/Cal/fullcalendar.print.css' rel='stylesheet' media='print'/>

    <!-- Vmap -->
    <link rel="stylesheet" href="vendors/vmap/jqvmap.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
</head>
<body>

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<!-- begin::header -->
<div class="header">

</div>
<!-- end::header -->

<!-- begin::main -->
<div id="main">
    @include('layouts.sidebar')

    <!-- begin::main-content -->
    <div class="main-content">

        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>{{ $title ?? '' }}</h4>
            </div>
        </div>
        <!-- end::page-header -->

        <!-- begin::page content -->
        <div class="container-fluid">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </div>
        <!-- end::page content -->

        <!-- begin::footer -->
        <footer>
            <div class="container-fluid">
            </div>
        </footer>
        <!-- end::footer -->

    </div>
    <!-- end::main-content -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- Chartjs -->
<script src="vendors/charts/chartjs/chart.min.js"></script>

<!-- Apex chart -->
<script src="vendors/charts/apex/apexcharts.min.js"></script>

<!-- Circle progress -->
<script src="vendors/circle-progress/circle-progress.min.js"></script>

<!-- Peity -->
<script src="vendors/charts/peity/jquery.peity.min.js"></script>
<script src="assets/js/examples/charts/peity.js"></script>

<!-- Datepicker -->
<script src="vendors/datepicker/daterangepicker.js"></script>
<script src="assets/Datepiker/persian-datepicker.js"></script>
<script src="vendors/datepicker/bootstrap-datepicker.fa.min.js"></script>


<!-- Slick -->
<script src="vendors/slick/slick.min.js"></script>

<!-- Vamp -->
<script src="vendors/vmap/jquery.vmap.min.js"></script>
<script src="vendors/vmap/maps/jquery.vmap.usa.js"></script>
<script src="assets/js/examples/vmap.js"></script>


<!-- a -->
<script src='assets/Cal/moment.js'></script>
<script src='assets/Cal/moment-jalaali.js'></script>
<script src='assets/Cal/fullcalendar.js'></script>
<script src='assets/Cal/fa.js'></script>


<!-- Dashboard scripts -->
<script src="assets/js/examples/dashboard.js"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>


<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>

</html>
