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


<!-- Content Header (package header) -->
<section class="content-header">
    <h1>
        {{trans('admin.packages')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/packages')}}"> {{trans('admin.packages')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.member_add')}}</li>
    </ol>
</section>


<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.member_add')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/packages')}}" method="post" enctype="multipart/form-data">
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
                            <label for="name" class="col-sm-4 col-form-label">{{trans('admin.name')}}</label>
                            <div class="col-sm-8 ">
                                {{ Form::text('name', null, ['class'=>'form-control','id'=>'name']) }}
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-4 col-form-label">{{trans('admin.image')}}
                                <span dir="ltr"></span></label>
                            <div class="col-sm-8 custom-file" style="height: auto">
                                <input type="file" name="image" class="form-control" onchange="previewFile(this)">

                                @if($errors->has('image'))
                                    <div class="alert alert-danger">{{$errors->first('image')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rate"
                                   class="col-sm-4 col-form-label">{{trans('admin.rate')}}</label>
                            <div class="col-sm-8">
                                <input name="rate" type="number" min="0"  max="5" class="form-control" placeholder="{{trans('admin.rate')}}">
                                @if($errors->has('rate'))
                                    <div class="alert alert-danger">{{$errors->first('rate')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price"
                                   class="col-sm-4 col-form-label">{{trans('admin.price')}}</label>
                            <div class="col-sm-8">
                                {{ Form::text('price', null, ['class'=>'form-control','id'=>'price']) }}
                                @if($errors->has('price'))
                                    <div
                                        class="alert alert-danger">{{$errors->first('price')}}</div>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="is_discount"
                                   class="col-sm-4 col-form-label">{{trans('admin.is_discount')}}</label>
                            <div class="col-sm-8">
                                {{ Form::select('is_discount',[0=>trans('admin.no') , 1=>trans('admin.yes')], null, ['class'=>'form-control select2','id'=>'is_discount']) }}
                                @if($errors->has('is_discount'))
                                    <div class="alert alert-danger">{{$errors->first('is_discount')}}</div>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row discount" style="display: none" >
                            <label for="price_after_discount"
                                   class="col-sm-4 col-form-label">{{trans('admin.product_price_after_discount')}}</label>
                            <div class="col-sm-8">
                                {{ Form::text('price_after_discount', null, ['class'=>'form-control','id'=>'price_after_discount']) }}
                                @if($errors->has('price_after_discount'))
                                    <div class="alert alert-danger">{{$errors->first('price_after_discount')}}</div>
                                @endif
                            </div>
                        </div>

                        

         

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.add')}}</button>
                            <a href="{{URL::to('admin/packages')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
                        </div>
            
                    </form>
            
                </div>
            
            </section>
            
            
            @endsection
            @section('scripts')
            
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
             <script>
                var lang = '{!! app()->getLocale() !!}';
               
        
                $("body").on("change", "#is_discount", function (e) {
                    var discount = $('#is_discount').val();
                    if (discount == 1) {
                        $('.discount').show();
                    } else {
                        $('.discount').hide();
                    }
                });
                var discount = $('#is_discount').val();
                if (discount == 1) {
                    $('.discount').show();
                } else {
                    $('.discount').hide();
                }
            </script>
            @endsection
