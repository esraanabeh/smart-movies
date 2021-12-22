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
        {{trans('admin.users')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/users')}}"> {{trans('admin.users')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.user_edit')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.user_edit')}} : {{$user['name']}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
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
                            <label for="name" class="col-sm-2 col-form-label">{{trans('admin.name')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('name', $user['name'], ['class'=>'form-control','id'=>'name']) }}
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  for="email" class="col-sm-2 col-form-label required">{{trans('admin.email')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('email', $user['email'], ['class'=>'form-control','id'=>'email']) }}
                                @if($errors->has('email'))
                                <div class="alert alert-danger">{{$errors->first('email')}}</div>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">{{trans('admin.password')}}</label>
                            <div class="col-sm-10">
                                {{ Form::input('password','password', null, ['class'=>'form-control','id'=>'password']) }}
                                @if($errors->has('password'))
                                <div class="alert alert-danger">{{$errors->first('password')}}</div>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">{{trans('admin.phone')}}</label>
                            <div class="col-sm-10">
                                {{ Form::text('phone', $user['phone'], ['class'=>'form-control','id'=>'phone']) }}
                                @if($errors->has('phone'))
                                <div class="alert alert-danger">{{$errors->first('phone')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image_profile" class="col-sm-2 col-form-label image">{{trans('admin.image_profile')}}
                                <span dir="ltr">(Width: 72px * Height:72px)</span></label>
                            <div class="col-sm-10">
                                {{ Form::file('image_profile',['class'=>'form-control','id'=>'image_profile']) }}
                                @if($errors->has('image_profile'))
                                <div class="alert alert-danger">{{$errors->first('image_profile')}}</div>
                                @endif
                                <img style="hight:120px;width:120px;margin:5px;" src="{{ asset('upload/users/' . $user->image_profile	) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-2 col-form-label image">{{trans('admin.gender')}}</label>
                            <div class="col-sm-10">
                              <select id="myList" class="form-control" name="gender" >
                                <option>{{trans('admin.first_select_gender')}} </option>
                                <option value="Male" @if($user->gender =='Male')selected @endif >{{trans('admin.male')}}</option>
                                <option value="Female" @if($user->gender =='Female')selected @endif >{{trans('admin.female')}}</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birth_date" class="col-sm-2 col-form-label image">{{trans('admin.birth_date')}}</label>
                            <div class="col-sm-10">
                              <input class="form-control" type="date" id="start" name="birth_date" value="{{$user->birth_date}}">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.save')}}</button>
                <a href="{{URL::to('admin/users')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
            </div>

        </form>

    </div>

</section>

@endsection
