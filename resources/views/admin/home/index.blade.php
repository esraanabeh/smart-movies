@extends('admin.layouts.index')


@section('content')
    <style>
        .content .small-box h3 {
            font-size: 19px;
    font-weight: 700;
    margin: 0 0 10px;
    white-space: nowrap;
    overflow: hidden;
    padding: 0;
    text-overflow: ellipsis;
        }
      
    </style>
    <?php
    $lang = App::getLocale();
    $text = 'text-left';
    $pull = 'pull-left';
    $pulll = 'pull-right';
    if ($lang == 'ar') {
        $text = 'text-right';
        $pull = 'pull-right';
        $pulll = 'pull-left';
    }
    ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ trans('admin.admin') }}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i>
                    {{ trans('admin.home') }}</a></li>
        </ol>
    </section>

    <!-- Main content -->

    <section class="content">

        <div class="row">
            @if (Session::has('message'))
                <div class="col-lg-12 col-xl-12">
                    <div class="alert alert-success alert-dismissible">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">

      

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <a href="{{ URL::to('admin/movies') }}">
                <div class="small-box bg-green">

                    <div class="inner">
                        <p>{{ trans('admin.movies') }}</p>
                        <h3>{{ $movies }}</h3>

                    </div>
                    <div class="icon" style="font-size: -webkit-xxx-large;">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <a href="{{ URL::to('admin/packages') }}">
                <div class="small-box bg-green">

                    <div class="inner">
                        <p>{{ trans('admin.packages') }}</p>
                        <h3>{{ $packages }}</h3>

                    </div>
                    <div class="icon" style="font-size: -webkit-xxx-large;">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <a href="{{ URL::to('admin/pages') }}">
                <div class="small-box bg-green">

                    <div class="inner">
                        <p>{{ trans('admin.pages') }}</p>
                        <h3>{{ $pages }}</h3>

                    </div>
                    <div class="icon" style="font-size: -webkit-xxx-large;">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </a>
        </div>

      


        

    </div>


    




        
       
        
        


       




    </section>

    <!-- /.content -->


@endsection
