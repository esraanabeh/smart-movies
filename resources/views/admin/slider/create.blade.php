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
            {{trans('admin.slider')}}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
            <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/slider')}}"> {{trans('admin.slider')}}</a>
            </li>
            <li class="breadcrumb-item active {{$pull}}">{{trans('admin.slider_add')}}</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('admin.slider_add')}}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <form action="{{URL::to('admin/slider')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            @if (Session::has('message'))
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="alert alert-success alert-dismissible">
                                            {{ Session::get('message')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="sort" class="col-sm-4 col-form-label">{{trans('admin.sort')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::number('sort', 0, ['min' => '0','class'=>'form-control','id'=>'sort']) }}
                                    @if($errors->has('sort'))
                                        <div class="alert alert-danger">{{$errors->first('sort')}}</div>
                                    @endif
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label for="link" class="col-sm-4 col-form-label">{{trans('admin.link')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::text('link', null, ['class'=>'form-control','id'=>'link']) }}
                                    @if($errors->has('link'))
                                        <div class="alert alert-danger">{{$errors->first('link')}}</div>
                                    @endif
                                </div>
                            </div> --}}

                            

                            <div class="form-group row">
                                <label for="ar_name"
                                       class="col-sm-4 col-form-label">{{trans('admin.slider_name_ar')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::text('ar_name', null, ['class'=>'form-control','id'=>'ar_name']) }}
                                    @if($errors->has('ar_name'))
                                        <div class="alert alert-danger">{{$errors->first('ar_name')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="en_name"
                                       class="col-sm-4 col-form-label">{{trans('admin.slider_name_en')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::text('en_name', null, ['class'=>'form-control','id'=>'en_name']) }}
                                    @if($errors->has('en_name'))
                                        <div class="alert alert-danger">{{$errors->first('en_name')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ar_title"
                                       class="col-sm-4 col-form-label">{{trans('admin.ar_title')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::text('ar_title', null, ['class'=>'form-control','id'=>'ar_title']) }}
                                    @if($errors->has('ar_title'))
                                        <div class="alert alert-danger">{{$errors->first('ar_title')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="en_title"
                                       class="col-sm-4 col-form-label">{{trans('admin.en_title')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::text('en_title', null, ['class'=>'form-control','id'=>'en_title']) }}
                                    @if($errors->has('en_title'))
                                        <div class="alert alert-danger">{{$errors->first('en_title')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image"
                                       class="col-sm-4 col-form-label image-ar">{{trans('admin.image')}}
                                    <span dir="ltr">(Width: 848px * Height:762px)</span></label>
                                <div class="col-sm-8">
                                    {{ Form::file('ar_image',['class'=>'form-control','id'=>'ar_image']) }}
                                    @if($errors->has('ar_image'))
                                        <div class="alert alert-danger">{{$errors->first('ar_image')}}</div>
                                    @endif
                                </div>
                            </div>

                                {{-- <div class="form-group row">
                                    <label for="image"
                                           class="col-sm-4 col-form-label image-en">{{trans('admin.image_en')}}
                                        <span dir="ltr">(Width: 848px * Height:762px)</span></label>
                                    <div class="col-sm-8">
                                        {{ Form::file('en_image',['class'=>'form-control','id'=>'en_image']) }}
                                        @if($errors->has('en_image'))
                                            <div class="alert alert-danger">{{$errors->first('en_image')}}</div>
                                        @endif
                                    </div>
                                </div> --}}

                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-lg"
                            style="font-size: 16px;">{{trans('admin.add')}}</button>
                    <a href="{{URL::to('admin/slider')}}" class="btn btn-default btn-lg"
                       style="font-size: 16px;">{{trans('admin.back')}}</a>
                </div>

            </form>

        </div>

    </section>

@endsection

@section('scripts')
    <script>
        var base_url = $('#base-url').val();

        $("body").on("change", "#type", function (e) {
            var type = $('#type').val();
            if (type == "web") {
                $('.image').html('<?php echo trans('admin.image'); ?> <span dir="ltr">(Width: 1930px *  Height:840px)</span>');
            } else {
                $('.image').html('<?php echo trans('admin.image'); ?> <span dir="ltr">(Width: 375px * Height:1250px)</span>');
            }
        });

        $("body").on("change", "#link", function (e) {
            var link = $('#link').val();
            if (link == "none") {
                $('.category').hide();
                $('.product').hide();
            } else if (link == "product") {
                $('.category').hide();
                $('.product').show();
            } else if (link == "category") {
                $('.product').hide();
                $('.category').show();
            }
        });

        $(document).ready(function () {
            var type = $('#type').val();
            if (type == "web") {
                $('.image').html('<?php echo trans('admin.image'); ?> <span dir="ltr">(Width: 1930px *  Height:840px)</span>');
            } else {
                $('.image').html('<?php echo trans('admin.image'); ?> <span dir="ltr">(Width: 375px * Height:1250px)</span>');
            }

            var link = $('#link').val();
            if (link == "none") {
                $('.category').hide();
                $('.product').hide();
            } else if (link == "product") {
                $('.category').hide();
                $('.product').show();
            } else if (link == "category") {
                $('.product').hide();
                $('.category').show();
            }
        });
    </script>
@endsection

