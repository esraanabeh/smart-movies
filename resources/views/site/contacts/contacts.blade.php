<?php
use App\Models\Site;
$site = Site::find(1);
// element attributes
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
 <div class="main__pages__wrapper contact__us__wrapper">
    <div class="container">
        <h3 class="main__title">{{ __('contact us') }}</h3>
       <div class="row">
           <div class="col-12 col-md-6">
               <div class="contact__info">
                    <h5 class="normal__title">{{ __('Get In Touch With Us') }}</h5>
                    @if(app()->getLocale() == 'en')
                    <p class="inner__des">{{ $site['en_touch'] }}</p>
                    @else
                    <p class="inner__des">{{ $site['ar_touch'] }}</p>
                    @endif
               </div> 
               
                <form action="{{URL::to('/storecontact')}}" method="post" enctype="multipart/form-data" class="request__form">
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

                    <div class="form-group">
                        <input name="name" type="text" class="form-control" id="name" placeholder="{{ __('name') }}" >
                        @if($errors->has('name'))
                        <div class="alert alert-danger">{{$errors->first('name')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" id="email" placeholder="{{ __('email address') }}" >
                        @if($errors->has('email'))
                        <div class="alert alert-danger">{{$errors->first('email')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input name="phone" type="text" class="form-control" id="phone" placeholder="{{ __('phone number') }}">
                    </div>
                    <div class="form-group">
                        <input name="message" type="text" class="form-control" id="message" placeholder="{{ __('message') }}">
                        @if($errors->has('message'))
                        <div class="alert alert-danger">{{$errors->first('message')}}</div>
                        @endif
                    </div>
                             {{-- ReCApcha --}}
                    <div class="form-group mt-5">
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
                    
                    <button type="submit" class="main__btn form__btn"  >{{ __('send') }}</button>

                    
                </form>  
                
               

               
           </div>
           <div class="col-12 col-md-6">
                <div class="contact__info">
                    <h5 class="normal__title">{{ __('Find Our Office') }}</h5>
                  
                    {{-- <a href="{{URL::to($site['location'])}}" target="-blank"  >{{$site['location']}}</a> --}}
                    <div style="width: 960px;">
                        <iframe src="{{URL::to($site['location'])}}" width="400" height="" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                </div>
                <div class="footer__links">
                    <a  class="footer_link contact_link">
                        <div class="call_icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <span>{{ $site['phone1'] }} | {{ $site['phone2'] }} | {{ $site['phone3'] }} | {{ $site['phone4'] }}</span>
                         </a>
                    <a href="tel:{{ $site['phone'] }}" class="footer_link contact_link">
                        <div class="call_icon">
                            <img src="{{ asset('site/img/fax.png') }}" alt="">
                        </div>
                        <span>{{$site['phone']}}</span>
                    </a>
                    <a href="mailto:{{ $site['email'] }}" class="footer_link contact_link">
                        <div class="call_icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <span>{{$site['email']}}</span>
                    </a>
                </div>
        </div>
       </div>
       
    </div>
</div>


@endsection
<script type="text/javascript">
    var onloadCallback = function() {
      alert("grecaptcha is ready!");
    };
  </script>