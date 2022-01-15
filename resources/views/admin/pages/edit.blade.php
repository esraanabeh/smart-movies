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
        {{trans('admin.pages')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/pages')}}"> {{trans('admin.pages')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.page_edit')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.page_edit')}} : {{$page['title']}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/pages/'.$page['id'])}}" method="post" enctype="multipart/form-data">
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
                            <label for="title" class="col-sm-3 col-form-label">{{trans('admin.title')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('title', $page['title'], ['class'=>'form-control','id'=>'title']) }}
                                @if($errors->has('title'))
                                <div class="alert alert-danger">{{$errors->first('title')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label">@lang('Page type')</label>
                            <div class="col-sm-9">
                                <select name="type" class="form-control" id="">
                                    @foreach(page_types() as $type)
                                        <option value="{{ $type }}" {{ $type == $page['type'] ? 'selected' : '' }}>{{ __($type) }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('type'))
                                <div class="alert alert-danger">{{$errors->first('type')}}</div>
                                @endif
                            </div>
                        </div>
                        
                       

                        <div class="form-group row">
                            <label for="editor1" class="col-sm-3 col-form-label">{{trans('admin.page_content')}}</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('content', $page['content'], ['class'=>'form-control','id'=>'editor1','rows'=>10]) }}
                                @if($errors->has('content'))
                                <div class="alert alert-danger">{{$errors->first('content')}}</div>
                                @endif
                            </div>
                        </div>
                     
                      

                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.save')}}</button>
                <a href="{{URL::to('admin/pages')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
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
