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
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.movie_edit')}}</li>
    </ol>
</section>


<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.movie_edit')}} : {{$movie['name']}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/movies/'.$movie['id'])}}" method="post" enctype="multipart/form-data">
            {{ Form::hidden('_method','PATCH') }}
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
                            <div class="col-sm-9">
                                {{ Form::text('name', $movie['name'], ['class'=>'form-control','id'=>'name']) }}
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">{{ trans('admin.image') }}
                                <span dir="ltr"></span></label>
                            <div class="col-sm-9 custom-file" style="height: auto">
                                <input type="file" name="image" class="form-control" onchange="previewFile(this)">

                                <img src="{{URL::to('image/'.$movie['image'])}}" id="previewImg" alt="image"
                                    style="max-width:130px;margin-top:20px;">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">{{ trans('admin.video') }}
                                <span dir="ltr"></span></label>
                            <div class="col-sm-9 custom-file" style="height: auto">
                                <input type="file" name="video" class="form-control" onchange="previewFile(this)">

                                <video src="{{URL::to('video/'.$movie['video'])}}" id="previewImg" alt="video"
                                    style="max-width:130px;margin-top:20px;">

                            </div>
                        </div>
                        @if($movie['id '] == 1)
                        <div class="form-group row">
                            <label for="video" class="col-sm-3 col-form-label video">{{trans('admin.video')}} (650px * 650px)</label>
                            <div class="col-sm-9">
                                {{ Form::file('video',['class'=>'form-control','id'=>'video']) }}
                                @if($errors->has('video'))
                                <div class="alert alert-danger">{{$errors->first('video')}}</div>
                                @endif
                            </div>
                        </div>
                        
                       

                        <div class="form-group row">
                            <label for="input_4" class="col-sm-3 col-form-label video_current_ar">{{trans('admin.video_current')}}</label>
                            <div class="col-sm-9">
                                <img src="{{URL::to('video/'.$movie['video'])}}" class="img-thumbnail video_current">
                            </div>
                        </div>
                        @endif

                       

                        
                        <div class="form-group row">
                            <label for="package_id"
                                   class="col-sm-3 col-form-label">{{trans('admin.package_id')}}</label>
                            <div class="col-sm-9">
                                {{ Form::select('package_id',$movies, $movie['package_id'], ['class'=>'form-control select2','id'=>'package_id']) }}
                                @if($errors->has('package_id'))
                                    <div class="alert alert-danger">{{$errors->first('package_id')}}</div>
                                @endif
                            </div>
                        </div>

                        

                        
                
                        @if($movie['id '] == 1)
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label image">{{trans('admin.image')}} (650px * 650px)</label>
                            <div class="col-sm-9">
                                {{ Form::file('image',['class'=>'form-control','id'=>'image']) }}
                                @if($errors->has('image'))
                                <div class="alert alert-danger">{{$errors->first('image')}}</div>
                                @endif
                            </div>
                        </div>
                        
                       

                        <div class="form-group row">
                            <label for="input_4" class="col-sm-3 col-form-label image_current_ar">{{trans('admin.image_current')}}</label>
                            <div class="col-sm-9">
                                <img src="{{URL::to('image/'.$movie['image'])}}" class="img-thumbnail image_current">
                            </div>
                        </div>
                        @endif

                      

                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.save')}}</button>
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


                        
