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


<!-- Content Header (movie header) -->
<section class="content-header">
    <h1>
        {{trans('admin.movies')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/movies')}}"> {{trans('admin.movies')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.movie_add')}}</li>
    </ol>
</section>


<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.movie_add')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/movies')}}" method="post" enctype="multipart/form-data">
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
                            <label for="name" class="col-sm-3 col-form-label">{{trans('admin.name')}}</label>
                            <div class="col-sm-8 ">
                                {{ Form::text('name', null, ['class'=>'form-control','id'=>'name']) }}
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">{{trans('admin.image')}}
                                <span dir="ltr"></span></label>
                            <div class="col-sm-8 custom-file" style="height: auto">
                                <input type="file" name="image" class="form-control" onchange="previewFile(this)">

                                @if($errors->has('image'))
                                    <div class="alert alert-danger">{{$errors->first('image')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">{{trans('admin.video')}}
                                <span dir="ltr"></span></label>
                            <div class="col-sm-8 custom-file" style="height: auto">
                                <input type="file" name="video" class="form-control" onchange="previewFile(this)">

                                @if($errors->has('video'))
                                    <div class="alert alert-danger">{{$errors->first('video')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="package_id"
                                   class="col-sm-3 col-form-label">{{trans('admin.package_id')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::select('package_id',$movies, null, ['class'=>'form-control select2','id'=>'package_id']) }}
                                @if($errors->has('package_id'))
                                    <div class="alert alert-danger">{{$errors->first('package_id')}}</div>
                                @endif
                            </div>
                        </div>

                        

         

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.add')}}</button>
                            <a href="{{URL::to('admin/movies')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
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
