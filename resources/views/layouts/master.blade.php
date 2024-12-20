<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Shatabdi Aviation | @yield('title', 'Your Hajj & Umrah Solution')</title>

    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets/images/logos/favicon1.png') }}" type="image/x-icon">

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

</html>
