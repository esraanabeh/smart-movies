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
                            <label for="ar_desc" class="col-sm-2 col-form-label">{{trans('admin.site_desc_ar')}}</label>
                            <div class="col-sm-10">
                                {{ Form::textarea('ar_desc',  $site['ar_desc'], ['class'=>'form-control','id'=>'ar_desc','rows'=>3]) }}
                                @if($errors->has('ar_desc'))
                                <div class="alert alert-danger">{{$errors->first('ar_desc')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="en_desc" class="col-sm-2 col-form-label">{{trans('admin.site_desc_en')}}</label>
                            <div class="col-sm-10">
                                {{ Form::textarea('en_desc',  $site['en_desc'], ['class'=>'form-control','id'=>'en_desc','rows'=>3]) }}
                                @if($errors->has('en_desc'))
                                <div class="alert alert-danger">{{$errors->first('en_desc')}}</div>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="tags" class="col-sm-2 col-form-label">{{trans('admin.site_tags')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('tags',  $site['tags'], ['class'=>'form-control','id'=>'tags']) }}
                                @if($errors->has('tags'))
                                <div class="alert alert-danger">{{$errors->first('tags')}}</div>
                                @endif
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="ar_touch" class="col-sm-2 col-form-label">{{trans('admin.ar_touch')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('ar_touch',  $site['ar_touch'], ['class'=>'form-control','id'=>'ar_touch']) }}
                                @if($errors->has('ar_touch'))
                                <div class="alert alert-danger">{{$errors->first('ar_touch')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="en_touch" class="col-sm-2 col-form-label">{{trans('admin.en_touch')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('en_touch',  $site['en_touch'], ['class'=>'form-control','id'=>'en_touch']) }}
                                @if($errors->has('en_touch'))
                                <div class="alert alert-danger">{{$errors->first('en_touch')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ar_cons" class="col-sm-2 col-form-label">{{trans('admin.ar_cons')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('ar_cons',  $site['ar_cons'], ['class'=>'form-control','id'=>'ar_cons']) }}
                                @if($errors->has('ar_cons'))
                                <div class="alert alert-danger">{{$errors->first('ar_cons')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="en_cons" class="col-sm-2 col-form-label">{{trans('admin.en_cons')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('en_cons',  $site['en_cons'], ['class'=>'form-control','id'=>'en_cons']) }}
                                @if($errors->has('en_cons'))
                                <div class="alert alert-danger">{{$errors->first('en_cons')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ar_help" class="col-sm-2 col-form-label">{{trans('admin.ar_help')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('ar_help',  $site['ar_help'], ['class'=>'form-control','id'=>'ar_help']) }}
                                @if($errors->has('ar_help'))
                                <div class="alert alert-danger">{{$errors->first('ar_help')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="en_help" class="col-sm-2 col-form-label">{{trans('admin.en_help')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('en_help',  $site['en_help'], ['class'=>'form-control','id'=>'en_help']) }}
                                @if($errors->has('en_help'))
                                <div class="alert alert-danger">{{$errors->first('en_help')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">{{ trans('admin.image') }}
                                <span dir="ltr"></span></label>
                            <div class="col-sm-10 custom-file" style="height: auto">
                                <input type="file" name="image" class="form-control" onchange="previewFile(this)">

                                <img src="{{URL::to('image/'.$site['image'])}}" id="previewImg" alt="image"
                                    style="max-width:130px;margin-top:20px;">

                            </div>
                        </div>

                        

                        

                        

                        <div class="form-group row">
                            <label for="whatsapp" class="col-sm-2 col-form-label">{{trans('admin.whatsapp')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('whatsapp',  $site['whatsapp'], ['class'=>'form-control','id'=>'whatsapp']) }}
                                @if($errors->has('whatsapp'))
                                <div class="alert alert-danger">{{$errors->first('whatsapp')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">{{trans('admin.phone')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('phone',  $site['phone'], ['class'=>'form-control','id'=>'phone']) }}
                                @if($errors->has('phone'))
                                <div class="alert alert-danger">{{$errors->first('phone')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone1" class="col-sm-2 col-form-label">{{trans('admin.phone1')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('phone1',  $site['phone1'], ['class'=>'form-control','id'=>'phone1']) }}
                                @if($errors->has('phone1'))
                                <div class="alert alert-danger">{{$errors->first('phone1')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone2" class="col-sm-2 col-form-label">{{trans('admin.phone2')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('phone2',  $site['phone2'], ['class'=>'form-control','id'=>'phone2']) }}
                                @if($errors->has('phone2'))
                                <div class="alert alert-danger">{{$errors->first('phone1')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone3" class="col-sm-2 col-form-label">{{trans('admin.phone3')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('phone3',  $site['phone3'], ['class'=>'form-control','id'=>'phone3']) }}
                                @if($errors->has('phone3'))
                                <div class="alert alert-danger">{{$errors->first('phone3')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone4" class="col-sm-2 col-form-label">{{trans('admin.phone4')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('phone4',  $site['phone4'], ['class'=>'form-control','id'=>'phone4']) }}
                                @if($errors->has('phone4'))
                                <div class="alert alert-danger">{{$errors->first('phone4')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hotline" class="col-sm-2 col-form-label">{{trans('admin.hotline')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('hotline',  $site['hotline'], ['class'=>'form-control','id'=>'hotline']) }}
                                @if($errors->has('hotline'))
                                <div class="alert alert-danger">{{$errors->first('hotline')}}</div>
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
                        

                        <div class="form-group row">
                            <label for="location" class="col-sm-2 col-form-label">{{trans('admin.location')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('location',  $site['location'], ['class'=>'form-control','id'=>'location']) }}
                                @if($errors->has('location'))
                                <div class="alert alert-danger">{{$errors->first('location')}}</div>
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