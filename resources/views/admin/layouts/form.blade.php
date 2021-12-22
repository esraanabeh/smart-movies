<!DOCTYPE html>
<?php
$lang = App::getLocale();
$dir = "";
$arrow = "right";
$pull = "pull-left";
if ($lang == "ar") {
    $dir = "rtl";
    $arrow = "left";
    $pull = "pull-right";
}
$site = App\Models\Site::first();
?>
<html lang="{{$lang}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" href="{{ url('favicon/logo.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('favicon/logo.png') }}">

        <meta property="og:title" content="{{$site[$lang.'_title']}}">
        <meta property="og:description" content="{{$site[$lang.'_desc']}}">
        <meta property="og:site_name" content="{{url('/')}}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{url('/')}}">
        <meta property="og:image" content="../og.png">

        <title>{{$site[$lang.'_title']}} - {{trans('admin.admin')}} </title>

        <!-- Bootstrap 4.0-->
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

        <!-- Bootstrap 4.0-->
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/assets/vendor_components/font-awesome/css/font-awesome.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/assets/vendor_components/Ionicons/css/ionicons.min.css">

        <!-- bootstrap datepicker -->	
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css">

        <!-- Select2 -->
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/assets/vendor_components/select2/dist/css/select2.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/css/{{$lang}}/master_style.css">

        <!-- Tsawaaqadmin Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{URL::to('admin_panel')}}/css/{{$lang}}/skins/_all-skins.css">

        @yield('styles')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            @include('admin.layouts.include.header')

            @include('admin.layouts.include.sidebar')

            <div class="content-wrapper" dir="{{$dir}}">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->

            @include('admin.layouts.include.footer')

            <input type="hidden" value="{{URL::to('/')}}" id="base-url">
        </div>
        <!-- jQuery 3 -->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_components/jquery/dist/jquery.js"></script>
        <script src="{{url('admin_panel')}}/js/notify.js"></script>
        <script src="{{url('admin_panel')}}/js/ion.sound.js"></script>

        <script>
            $('.user-menu').click(function() {
                if($(this).hasClass('show')){
                    $(this).removeClass('show');
                }else{
                    $(this).addClass('show');
                }
            });
        </script>

        <!-- popper -->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_components/popper/dist/popper.min.js"></script>

        <!-- Bootstrap 4.0-->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Select2 -->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_components/select2/dist/js/select2.full.js"></script>

        <!-- SlimScroll -->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

        <!-- FastClick -->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_components/fastclick/lib/fastclick.js"></script>

        <!-- Tsawaaqadmin App -->
        <script src="{{URL::to('admin_panel')}}/js/template.js"></script>

        <!-- Tsawaaqadmin for demo purposes -->
        <script src="{{URL::to('admin_panel')}}/js/demo.js"></script>

        <!-- bootstrap datepicker -->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

        <!-- bootstrap time picker -->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>

        <script src="{{URL::to('admin_panel')}}/assets/vendor_components/ckeditor/ckeditor.js"></script>

        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{URL::to('admin_panel')}}/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>

        <!-- Tsawaaqadmin for editor -->
        <script src="{{URL::to('admin_panel')}}/js/pages/editor.js"></script>

        @yield('scripts')
        <script>
$('#spark').hide();
$('.select2').select2();
        </script>
    </body>
</html>

