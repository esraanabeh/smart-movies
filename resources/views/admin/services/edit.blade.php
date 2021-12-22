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
<!-- Content Header (service header) -->
<section class="content-header">
    <h1>
        {{trans('admin.services')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/services')}}"> {{trans('admin.services')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.service_edit')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.service_edit')}} : {{$service[$lang.'_title']}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/services/'.$service['id'])}}" method="post" enctype="multipart/form-data">
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
                            <label for="ar_title" class="col-sm-3 col-form-label">{{trans('admin.service_title_ar')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('ar_title', $service['ar_title'], ['class'=>'form-control','id'=>'ar_title']) }}
                                @if($errors->has('ar_title'))
                                <div class="alert alert-danger">{{$errors->first('ar_title')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="en_title" class="col-sm-3 col-form-label">{{trans('admin.service_title_en')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('en_title', $service['en_title'], ['class'=>'form-control','id'=>'en_title']) }}
                                @if($errors->has('en_title'))
                                <div class="alert alert-danger">{{$errors->first('en_title')}}</div>
                                @endif
                            </div>
                        </div>

                       
                        
                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">{{ trans('admin.image') }}
                                <span dir="ltr">(Width: 46px * Height:38px)</span></label>
                            <div class="col-sm-9 custom-file" style="height: auto">
                                <input type="file" name="image" class="form-control" onchange="previewFile(this)">

                                <img src="{{URL::to('image/'.$service['image'])}}" id="previewImg" alt="image"
                                    style="max-width:130px;margin-top:20px;">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editor1" class="col-sm-3 col-form-label">{{trans('admin.service_desc_ar')}}</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('ar_desc', $service['ar_desc'], ['class'=>'form-control','id'=>'editor1','rows'=>10]) }}
                                @if($errors->has('ar_desc'))
                                <div class="alert alert-danger">{{$errors->first('ar_desc')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editor2" class="col-sm-3 col-form-label">{{trans('admin.service_desc_en')}}</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('en_desc', $service['en_desc'], ['class'=>'form-control','id'=>'editor2','rows'=>10]) }}
                                @if($errors->has('en_desc'))
                                <div class="alert alert-danger">{{$errors->first('en_desc')}}</div>
                                @endif
                            </div>
                        </div>

                        @if($service['id '] == 1)
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
                                <img src="{{URL::to('image/'.$service['image'])}}" class="img-thumbnail image_current">
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.save')}}</button>
                <a href="{{URL::to('admin/services')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
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
