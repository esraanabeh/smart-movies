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
        {{trans('admin.consultant')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/consultant')}}"> {{trans('admin.consultant')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.consultant_edit')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.consultant_edit')}} : {{$consultant[$lang.'_name']}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/consultant/'.$consultant['id'])}}" method="post" enctype="multipart/form-data">
            {{ Form::hidden('_method','PATCH') }}
            {{ csrf_field() }}

            <div class="box-body">
                <div class="row">
                    <div class="col-12">
                        @if (Session::has('consultant'))
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success alert-dismissible">
                                    {{ Session::get('consultant')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">{{trans('admin.name')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('name', $consultant['name'], ['class'=>'form-control','id'=>'name','readonly']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">{{trans('admin.email')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('email', $consultant['email'], ['class'=>'form-control','id'=>'email','readonly']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">{{trans('admin.phone')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('phone', $consultant['phone'], ['class'=>'form-control','id'=>'phone','readonly']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="consultant" class="col-sm-3 col-form-label">{{trans('admin.consultant')}}</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('consultant', $consultant['consultant'], ['class'=>'form-control','id'=>'consultant','rows'=>10,'readonly']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reply" class="col-sm-3 col-form-label">{{trans('admin.reply')}}</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('reply', $consultant['reply'], ['class'=>'form-control','id'=>'reply','rows'=>10]) }}
                                @if($errors->has('reply'))
                                <div class="alert alert-danger">{{$errors->first('reply')}}</div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.save')}}</button>
                <a href="{{URL::to('admin/consultant')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
            </div>

        </form>

    </div>

</section>

@endsection