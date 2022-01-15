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
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{trans('admin.site')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.site_edit')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.site_edit')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/site/1')}}" method="post" enctype="multipart/form-data">
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
                            <label for="ar_title" class="col-sm-2 col-form-label">{{trans('admin.site_title_ar')}}</label>
                            <div class="col-sm-10">
                               
                                {{ Form::text('ar_title',  $site['ar_title'], ['class'=>'form-control','id'=>'ar_title']) }}
                                @if($errors->has('ar_title'))
                                <div class="alert alert-danger">{{$errors->first('ar_title')}}</div>
                                @endif
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="en_title" class="col-sm-2 col-form-label">{{trans('admin.site_title_en')}}</label>
                            <div class="col-sm-10">
                               
                                {{ Form::text('en_title',  $site['en_title'], ['class'=>'form-control','id'=>'en_title']) }}
                               @if($errors->has('en_title'))
                                <div class="alert alert-danger">{{$errors->first('en_title')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="package_text" class="col-sm-2 col-form-label">{{trans('admin.site_desc_ar')}}</label>
                            <div class="col-sm-10">
                          {{ Form::textarea('package_text',  $site['package_text'], ['class'=>'form-control','id'=>'package_text','rows'=>3]) }}
                          @if($errors->has('package_text'))
                                <div class="alert alert-danger">{{$errors->first('package_text')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="footer_text" class="col-sm-2 col-form-label">{{trans('admin.site_desc_en')}}</label>
                            <div class="col-sm-10">
                               
                                {{ Form::textarea('footer_text',  $site['footer_text'], ['class'=>'form-control','id'=>'footer_text','rows'=>3]) }}
            
                                @if($errors->has('footer_text'))
                                <div class="alert alert-danger">{{$errors->first('footer_text')}}</div>
                                @endif
                            </div>
                        </div>


                    
                        <div class="form-group row">
                           
                            <label for="email" class="col-sm-2 col-form-label">{{trans('admin.email')}}</label>
                            <div class="col-sm-10">
                                
                                {{ Form::text('email',  $site['email'], ['class'=>'form-control','id'=>'email']) }}
                                
                                @if($errors->has('email'))
                                <div class="alert alert-danger">{{$errors->first('email')}}</div>
                                @endif
                            </div>
                        </div>
                       
                      
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.save')}}</button>
                <a href="{{URL::to('admin')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
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