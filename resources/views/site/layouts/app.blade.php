<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Alsanea') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('site/img/logo.png')}}" sizes="16x16"> 
    <link href="{{ asset('site/css/simple-lightbox.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('site/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('site/css/hover.css')}}" rel="stylesheet">
    <link href="{{ asset('site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('site/css/main.css')}}" rel="stylesheet">
    @if(app()->getLocale() == 'en')
    <link href="{{ asset('site/css/style-en.css')}}" rel="stylesheet">
    @else
    <link href="{{ asset('site/css/style-ar.css')}}" rel="stylesheet">
    @endif
    <script src="https://use.fontawesome.com/d10920a460.js"></script>
    @yield('styles')
       <!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
</head>

<body>

     <!--loader-->
     <div class="loader-container" id="loader-container">
        <div class="loader">
            <div class="loader-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!--start header-->
    @include('site.layouts.header')
    <!--end header-->

     @yield('content')

    @include('site.layouts.footer')
      <script src="{{ url('site/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ url('site/js/simple-lightbox.min.js')}}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{ url('site/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('site/js/main.js')}}"></script>
    <script src="{{ url('site/js/wow.min.js')}}"></script>
    @yield('scripts')
    <script>
        new WOW().init(); 
    </script>
</body>

</html>