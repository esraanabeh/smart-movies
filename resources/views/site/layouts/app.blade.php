<!DOCTYPE html>
<html>

<head>
    <title> Smart Movies </title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="RoQaY">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Smart Movies website">
    <meta name="keywords" content=" Smart Movies ">
    <meta name="csrf-token" content="V2G8zLS7dL5HzdfwxaBDewvJvAKCyeThQE4NBtJv">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('site/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('site/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('site/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('site/css/style.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ url('site/css/responsive.css') }}">
    <link rel="icon" href="{{ url('favicon/logo-m.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('favicon/logo-m.png') }}">
</head>

<body>
    <div class="body_wrapper">
        @include('site.layouts.header')

        @yield('content')

        @include('site.layouts.footer')
        <span class="scroll-top"> <a href="#"><i class="fas fa-chevron-up"></i></a> </span>
    </div>
    <script src="{{ url('site/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('site/js/popper.min.js') }}"></script>
    <script src="{{ url('site/js/lazysizes.min.js') }}"></script>
    <script src="{{ url('site/js/fontawesome.min.js') }}"></script>
    <script src="{{ url('site/js/all.min.js') }}"></script>
    <script src="{{ url('site/js/wow.min.js') }}"></script>
    <script src="{{ url('site/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>