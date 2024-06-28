<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="">
    <title>@yield('title')</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/frontend/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/custom.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/frontend/css/responsive.css')}}" rel="stylesheet" />

    {{-- === FONTAWSOME LINKS === --}}
    <link rel="stylesheet" href="{{ asset('assets/global/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/global/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/global/fontawesome/css/solid.css') }}">

</head>

<body>


    @yield('content')



    @include('frontend.layout.footer')
    <!-- jQery -->
    <script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/frontend/js/bootstrap.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
</body>
</html>
