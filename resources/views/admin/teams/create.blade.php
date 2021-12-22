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


<!-- Content Header (team header) -->
<section class="content-header">
    <h1>
        {{trans('admin.teams')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/teams')}}"> {{trans('admin.teams')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.member_add')}}</li>
    </ol>
</section>


<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.member_add')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/teams')}}" method="post" enctype="multipart/form-data">
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
                            <label for="ar_title" class="col-sm-3 col-form-label">{{trans('admin.ar_title')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('ar_title', null, ['class'=>'form-control','id'=>'ar_title']) }}
                                @if($errors->has('ar_title'))
                                <div class="alert alert-danger">{{$errors->first('ar_title')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="en_title" class="col-sm-3 col-form-label">{{trans('admin.en_title')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('en_title', null, ['class'=>'form-control','id'=>'en_title']) }}
                                @if($errors->has('en_title'))
                                <div class="alert alert-danger">{{$errors->first('en_title')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editor1" class="col-sm-3 col-form-label">{{trans('admin.ar_details')}}</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('ar_details', null, ['class'=>'form-control','id'=>'editor1','rows'=>10]) }}
                                @if($errors->has('ar_details'))
                                <div class="alert alert-danger">{{$errors->first('ar_details')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editor2" class="col-sm-3 col-form-label">{{trans('admin.en_details')}}</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('en_details', null, ['class'=>'form-control','id'=>'editor2','rows'=>10]) }}
                                @if($errors->has('en_details'))
                                <div class="alert alert-danger">{{$errors->first('en_details')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">{{trans('admin.image')}}
                                <span dir="ltr">(Width: 46px * Height:38px)</span></label>
                            <div class="col-sm-9 custom-file" style="height: auto">
                                <input type="file" name="image" class="form-control" onchange="previewFile(this)">

                                {{-- <img id="previewImg" alt="image" style="max-width:130px;margin-top:20px;"> --}}
                                @if($errors->has('image'))
                                    <div class="alert alert-danger">{{$errors->first('image')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.add')}}</button>
                            <a href="{{URL::to('admin/teams')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
                        </div>
            
                    </form>
            
                </div>
            
            </section>
            
            <script>
                function previewFile(input) {
                    var image = $('input[type=file]').get(0).files[0];
                    if (image) {
                        var reader = new FileReader();
                        reader.onload = function() {
                            $('#previewImg').attr("src", reader.result);
                        }
                        reader.readAsDataURL(image);
                    }
            
                }
            </script>
            
            @endsection
