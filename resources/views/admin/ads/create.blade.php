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
            {{trans('admin.ads')}}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
            <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/ads')}}"> {{trans('admin.ads')}}</a></li>
            <li class="breadcrumb-item active {{$pull}}">{{trans('admin.ads_add')}}</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('admin.ads_add')}}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <form action="{{URL::to('admin/ads')}}" method="post" enctype="multipart/form-data">
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
                                <label for="ar_name"
                                       class="col-sm-4 col-form-label">{{trans('admin.ads_name_ar')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::text('ar_name', null, ['class'=>'form-control','id'=>'ar_name']) }}
                                    @if($errors->has('ar_name'))
                                        <div class="alert alert-danger">{{$errors->first('ar_name')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="en_name"
                                       class="col-sm-4 col-form-label">{{trans('admin.ads_name_en')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::text('en_name', null, ['class'=>'form-control','id'=>'en_name']) }}
                                    @if($errors->has('en_name'))
                                        <div class="alert alert-danger">{{$errors->first('en_name')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sort"
                                       class="col-sm-4 col-form-label">{{trans('admin.sort')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::number('sort', null, ['min' => '0','class'=>'form-control','id'=>'sort']) }}
                                    @if($errors->has('sort'))
                                        <div class="alert alert-danger">{{$errors->first('sort')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="appear"
                                       class="col-sm-4 col-form-label">{{trans('admin.appear')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::select('appear',['splash'=>trans('admin.splash') , 'home'=>trans('admin.home')],
                                      request()->input('appear'), ['placeholder' => trans('admin.appear'),'class'=>'form-control select2','id'=>'appear','required'=>'required']) }}
                                    @if($errors->has('appear'))
                                        <div class="alert alert-danger">{{$errors->first('appear')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="link"
                                       class="col-sm-4 col-form-label">{{trans('admin.link')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::text('link', null, ['class'=>'form-control','id'=>'link']) }}
                                    @if($errors->has('link'))
                                        <div class="alert alert-danger">{{$errors->first('link')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label image-ar">{{trans('admin.image_ar')}}
                                    <span dir="ltr">(Width: 414px * Height:896px)</span></label>
                                <div class="col-sm-8">
                                    {{ Form::file('ar_image',['class'=>'form-control','id'=>'ar_image']) }}
                                    @if($errors->has('ar_image'))
                                        <div class="alert alert-danger">{{$errors->first('ar_image')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label image-en">{{trans('admin.image_en')}}
                                    <span dir="ltr">(Width: 414px * Height:896px)</span></label>
                                <div class="col-sm-8">
                                    {{ Form::file('en_image',['class'=>'form-control','id'=>'en_image']) }}
                                    @if($errors->has('en_image'))
                                        <div class="alert alert-danger">{{$errors->first('en_image')}}</div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-lg"
                            style="font-size: 16px;">{{trans('admin.add')}}</button>
                    <a href="{{URL::to('admin/ads')}}" class="btn btn-default btn-lg"
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
                $('.image-ar').html('<?php echo trans('admin.image_ar'); ?> <span dir="ltr">(Width: 414px *  Height:896px)</span>');
                $('.image-en').html('<?php echo trans('admin.image_en'); ?> <span dir="ltr">(Width: 414px *  Height:896px)</span>');
            } else {
                $('.image-ar').html('<?php echo trans('admin.image_ar'); ?> <span dir="ltr">(Width: 414px * Height:896px)</span>');
                $('.image-en').html('<?php echo trans('admin.image_en'); ?> <span dir="ltr">(Width: 414px * Height:896px)</span>');
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
                $('.image-ar').html('<?php echo trans('admin.image_ar'); ?> <span dir="ltr">(Width: 414px *  Height:896px)</span>');
                $('.image-en').html('<?php echo trans('admin.image_en'); ?> <span dir="ltr">(Width: 414px *  Height:896px)</span>');
            } else {
                $('.image-ar').html('<?php echo trans('admin.image_ar'); ?> <span dir="ltr">(Width: 414px * Height:896px)</span>');
                $('.image-en').html('<?php echo trans('admin.image_en'); ?> <span dir="ltr">(Width: 414px * Height:896px)</span>');
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


