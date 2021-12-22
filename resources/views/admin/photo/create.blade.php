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

<!-- Content Header (photo header) -->
<section class="content-header">
    <h1>
        {{trans('admin.photo')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/photo')}}"> {{trans('admin.photo')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.photo_add')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.photo_add')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-
                tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>


        <form action="{{URL::to('admin/photo')}}" method="post" enctype="multipart/form-data">
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
                            <label for="file" class="col-sm-3 col-form-label">{{trans('admin.photo')}}
                                <span dir="ltr"></span></label>
                            <div class="col-sm-9 custom-file" style="height: auto">
                                <input type="file" name="photo" class="form-control" onchange="previewFile(this)">

                                {{-- <img id="previewImg" alt="photo" style="max-width:130px;margin-top:20px;"> --}}
                                @if($errors->has('photo'))
                                    <div class="alert alert-danger">{{$errors->first('photo')}}</div>
                                @endif
                            </div>
                        </div>


                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.add')}}</button>
                            <a href="{{URL::to('admin/photo')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
                        </div>
            
                    </form>
            
                </div>
            
            </section>
            
            <script>
                function previewFile(input) {
                    var photo = $('input[type=file]').get(0).files[0];
                    if (photo) {
                        var reader = new FileReader();
                        reader.onload = function() {
                            $('#previewImg').attr("src", reader.result);
                        }
                        reader.readAsDataURL(photo);
                    }
            
                }
            </script>
            
            @endsection
