@extends('admin.layouts.form')

@section('content')
<?php
$lang = App::getLocale();
$text = "text-left";
$pull = "pull-left";
if ($lang == "ar") {
    $text = "text-right";
    $pull = "pull-right";
}
?>

<!-- Content Header (client header) -->
<section class="content-header">
    <h1>
        {{trans('admin.clients')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/clients')}}"> {{trans('admin.clients')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.client_add')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.client_add')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-
                tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>


        <form action="{{URL::to('admin/clients')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="box-body">
                <div class="row">
                    <div class="col-12">
                        @if (Session::has('message'))
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success alert-dismissible">
                                    {{ Session::get('message')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="ar_name" class="col-sm-3 col-form-label">{{trans('admin.ar_name')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('ar_name', null, ['class'=>'form-control','id'=>'ar_name']) }}
                                @if($errors->has('ar_name'))
                                <div class="alert alert-danger">{{$errors->first('ar_name')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="en_name" class="col-sm-3 col-form-label">{{trans('admin.en_name')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('en_name', null, ['class'=>'form-control','id'=>'en_name']) }}
                                @if($errors->has('en_name'))
                                <div class="alert alert-danger">{{$errors->first('en_name')}}</div>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">{{trans('admin.logo')}}
                                <span dir="ltr">(Width: 46px * Height:38px)</span></label>
                            <div class="col-sm-9 custom-file" style="height: auto">
                                <input type="file" name="logo" class="form-control" onchange="previewFile(this)">

                                {{-- <img id="previewImg" alt="logo" style="max-width:130px;margin-top:20px;"> --}}
                                @if($errors->has('logo'))
                                    <div class="alert alert-danger">{{$errors->first('logo')}}</div>
                                @endif
                            </div>
                        </div>


                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.add')}}</button>
                            <a href="{{URL::to('admin/clients')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
                        </div>
            
                    </form>
            
                </div>
            
            </section>
            
            <script>
                function previewFile(input) {
                    var logo = $('input[type=file]').get(0).files[0];
                    if (logo) {
                        var reader = new FileReader();
                        reader.onload = function() {
                            $('#previewImg').attr("src", reader.result);
                        }
                        reader.readAsDataURL(logo);
                    }
            
                }
            </script>
            
            @endsection

