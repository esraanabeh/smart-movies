<!DOCTYPE html>
<?php
$lang = App::getLocale();
$dir = '';
$arrow = 'right';
$pull = 'pull-left';
if ($lang == 'ar') {
    $dir = 'rtl';
    $arrow = 'left';
    $pull = 'pull-right';
}
?>

<html lang="{{ $lang }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{ url('favicon/logo-m.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('favicon/logo-m.png') }}">

    <meta property="og:title" content="{{$site[$lang.'_title'] ?? ''}}">
    <meta property="og:description" content="{{$site[$lang.'_title'] ?? ''}}">
    <meta property="og:site_name" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="../og.png">

    <title>{{$site[$lang.'_title'] ?? ''}} - {{trans('admin.admin')}} </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet"
        href="{{ URL::to('admin_panel') }}/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet"
        href="{{ URL::to('admin_panel') }}/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ URL::to('admin_panel') }}/assets/vendor_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::to('admin_panel') }}/assets/vendor_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('admin_panel') }}/css/{{ $lang }}/master_style.css">

    <!-- Tsawaaqadmin Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::to('admin_panel') }}/css/{{ $lang }}/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <style>
        html {
            position: relative;
        }

        .login-back img {
            position: absolute;
            z-index: -10;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            opacity: 0.8;
        }

        .login-page {
            background-image: unset;
            background-color: #000;
        }

    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-back">
        <img src="{{ url('bg.jpg') }}" alt="">
    </div>
    <div class="login-box" dir="{{ $dir }}">

        <div class="login-logo">
            <a href="{{ URL::to('/') }}" title="{{ $site[$lang . '_title'] ?? '' }}">
                <img  style= "height: 100px; width: 300px;" width: 300px; src="{{ asset('admin_panel/images/alsanea.png') }}"
                    alt="{{ $site[$lang . '_title'] ?? '' }}" >
            </a>
        </div>

        @yield('content')
    </div>
    <!-- /.login-box -->


    <!-- jQuery 3 -->
    <script src="{{ URL::to('admin_panel') }}/assets/vendor_components/jquery/dist/jquery.min.js"></script>

    <!-- popper -->
    <script src="{{ URL::to('admin_panel') }}/assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ URL::to('admin_panel') }}/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
