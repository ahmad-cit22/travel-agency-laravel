<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Ravelo - Travel & Tour Booking HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/logos/favicon.png" type="image/x-icon">

    @include('includes.styles')

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        @include('partials.header')

        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        @include('partials.hidden-sidebar')


        @yield('content')


        @include('partials.footer')

    </div>
    <!--End pagewrapper-->


    @include('includes.scripts')

</body>

<!-- Mirrored from webtendtheme.net/html/2024/ravelo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2024 10:34:24 GMT -->

</html>
