
<?php
use App\Models\Site;
$site = Site::find(1);
$attributes = [
    'data-theme' => 'dark',
    'data-type' => 'audio',
];
$options = [
    'data-theme' => 'dark',
    'data-type'	=> 'audio',
];
?>
@extends('site.layouts.app')

@section('content')
 <!--start inner wrapper section-->
 <div class="main__pages__wrapper">
    <div class="container">
        <h3 class="main__title">{{ __('Request Consultant') }}</h3>
        <div class="consult__alert">
            <span>{{ __('Consultation will be answered within 48 hours, or you can contact') }} </span>
            <span>{{ __('our hotline') }} : <strong>{{ $site['hotline'] }}</strong></span>
        </div>
        <form action="{{URL::to('/storeconsultant')}}" method="post" enctype="multipart/form-data" class="request__form">
            {{ method_field('POST') }}
            {{ csrf_field() }}

            @if (Session::has('message'))
            <div class="modal fade thank_modal show" id="thankModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true"  style="padding-right: 17px; display: block;">
     
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body"> 
                                <h3 class="modal__title">{{ __('thank you!') }}</h3>
                                <p class="modal__des">{{ __('Thank for your message.') }}
                                {{ __('We will contact you soon.') }}</p>
                                <a href="/" class="main__btn mx-auto">ok</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">

            <div class="form-group col-12 col-md-6">
                <input name="name" type="text" class="form-control" id="name" placeholder="{{ __('name') }}" >
                @if($errors->has('name'))
                <div class="alert alert-danger">{{$errors->first('name')}}</div>
                @endif
            </div>
            <div class="form-group col-12 col-md-6">
                <input name="email" type="email" class="form-control" id="email" placeholder="{{ __('email address') }}" >
                @if($errors->has('email'))
                <div class="alert alert-danger">{{$errors->first('email')}}</div>
                @endif
            </div>
            <div class="form-group col-12 col-md-6">
                <input name="phone" type="text" class="form-control" id="phone" placeholder="{{ __('phone number') }}">
            </div>
            <div class="form-group col-12 col-md-6">
                <input name="consultant" type="text" class="form-control" id="consultant" placeholder="{{ __('consultant') }}">
                @if($errors->has('consultant'))
                <div class="alert alert-danger">{{$errors->first('consultant')}}</div>
                @endif
            </div>

                 {{-- ReCApcha --}} 
                 
                 <div class="form-group col-12 col-md-6">
                    @if($errors->has('captcha'))
                    <div class="alert alert-danger">{{$errors->first('captcha')}}</div>
                    @endif
                    @if(app()->getLocale() == 'en')
                    {!! app('captcha')->display($attributes = [], $options = ['lang'=> 'en']) !!}
                    @else
                    {!! app('captcha')->display($attributes = [], $options = ['lang'=> 'ar']) !!}
                @endif
            </div>
                {{-- endReCApcha --}}

            <button type="submit" class="main__btn form__btn" data-toggle="modal" data-target="#thankModal" >{{ __('send') }}</button>

            </div>
        </form>  
       
    </div>
</div>


     
@endsection