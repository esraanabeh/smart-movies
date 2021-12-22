<?php
use App\Models\Slider;
use App\Models\Service;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\Photo;
use App\Models\Site;
$site = Site::find(1);
$pages = Page::where('type','Welcome To Our Site')->get();
$slider = Slider::where('active','yes')->get();
$services=Service::get();
$gallery=Gallery::get();
$photo=Photo::get();
?>

@extends('site.layouts.app')

@section('content')
    <!--start slider section-->
    <div class="main_slider_section">
        <div class="main__overlay"></div>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            
              @foreach ($slider as $slid)
              <div class="carousel-item @if ($loop->first) active @endif">
                @if(app()->getLocale() == 'en')
                <img src="{{URL::to('upload/slider/'.$slid['ar_image'])}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <h5><strong>{{ $slid['en_name'] }}</strong> {{ $slid['en_title'] }}</h5>
                        </div>
                    </div>
                    @else
                    <img src="{{URL::to('upload/slider/'.$slid['ar_image'])}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <h5><strong>{{ $slid['ar_name'] }}</strong> {{ $slid['ar_title'] }}</h5>
                        </div>
                    </div>
                    @endif
            </div>
              @endforeach
             
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">{{ __('Previous') }}</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">{{__('Next') }}</span>
            </button>
          </div>
    </div>
    

    <!--start consultant section-->
    <div class="consultant_section">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto consultant__wrapper wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                    <div class="consult_img">
                        <img src="{{ asset('site/img/avatar.png')}}" alt="">
                    </div>
                    <div class="consult__content">
                        <div class="request_cont">
                            <h3 class="consult_title">{{__('Request a Consultant') }}</h3>
                            @if(app()->getLocale() == 'en')
                            <p class="consult_des">{{ $site['en_cons'] }} : {{ $site['hotline'] }}</p>
                            @else <p class="consult_des">{{ $site['ar_cons'] }} : {{ $site['hotline'] }}</p>
                            @endif
                        </div>
                        <a href="{{ url('/consultants') }}" class="request_btn">{{ __('request here') }}</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- call_us.html --}}
       <!-- <a href="tel:{{ $site['phone'] }}" class="call__us__btn">
            <i class="fa fa-phone"></i>
        </a> -->
    </div>

    <!--start consultant section-->
    <div class="our_services_section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="services__img wow bounceIn" data-wow-duration="1s" data-wow-offset="300">
                        <img src="{{ asset('site/img/services.png')}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                   
                    <div class="services__wrapper">
                        <h5 class="sub_title">{{ __('The Best Care Is On our Side') }}</h5>
                        <h3 class="main__title">{{ __('our services') }}</h3>
                        <div class="services__points">
                            @foreach($services as $service)
                            <a href="{{URL::to('servicedetails/'.$service['id'])}}" class="service__link">
                                <img src="{{ asset('site/img/law.png')}}" alt="" class="law__img">
                                @if(app()->getLocale() == 'en')
                                {{$service['en_title']}}
                                @else{{$service['ar_title']}}
                                @endif
                            </a>
                            @endforeach
                            
                           
                        </div>
                        <a href="{{ url('/services') }}" class="main__btn">{{ __('view all') }}</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

     <!--start help section-->
    <div class="help_section">
        <div class="container">
            <div class="row">
                 <div class="col-12 col-md-6">
                    <h2 class="big__title">{{ __('We Help You In The Business You Need.') }}</h2>
                 </div>
                 <div class="col-12 col-md-6">
                    <div class="help__info">
                        @if(app()->getLocale() == 'en')
                        <p class="help_des">{{$site['en_help']}}</p>
                        @else
                        <p class="help_des">{{$site['ar_help']}}</p>
                        @endif
                    </div>
                 </div>
            </div>
        </div>
    </div>

    <!--start about us section-->
    <div class="about_section">
        <div class="container">
            <div class="row">
                 <div class="col-12 col-md-6">
                    <div class="welcome_wrap">
                        @foreach($pages as $page)
                        @if(app()->getLocale() == 'en')
                            <h3 class="main__title">{{ $page['en_title'] }}</h3>
                            <p class="inner__des">{{ $page['en_desc'] }}</p>
                            @else
                            <h3 class="main__title">{{ $page['ar_title'] }}</h3>
                            <p class="inner__des">{{ $page['ar_desc'] }}</p>
                        @endif
                        <a href="{{ url('/about') }}" class="main__btn"> {{ __('Read more') }}</a>
                        @endforeach
                    </div>
                 </div>
                 <div class="col-12 col-md-6">
                    <div class="about_img_wrapper wow bounceIn" data-wow-duration="1s" data-wow-offset="300">
                        <img src="{{URL::to('image/'.$site['image'])}}" alt="">
                    </div>
                 </div>
            </div>
        </div>
    </div>

     <!--start gallery section-->
     <div class="gallery_section">
        <div class="container">
            <h3 class="sub_title">{{ __('Have A Look') }}</h3>
            <h3 class="main__title_36">{{ __('gallery') }}</h3>
            <div class="gallery__bar">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link gallery_link active" href="#photo__gallery" data-toggle="tab">{{ __('photos') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link gallery_link" href="#video__gallery" data-toggle="tab">{{ __('videos') }}</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content"  id="myTabContent">
               
                <div class="all-imgs-gallery tab-pane fade show active" role="tabpanel" id="photo__gallery">
                   
                    <div class="row">
                        @foreach($photo as $one)
                        <div class="col-12 col-md-6 col-lg-4 wow bounceIn" data-wow-duration="1.3s" data-wow-offset="200">
                            <a href="{{URL::to('photo/'.$one['photo'])}}" class="lightbox"><img width="250" height="250" src="{{URL::to('photo/'.$one['photo'])}}" alt="" class="img-fluid gallery__img"></a>
                        </div>
                        @endforeach
                        
                    </div>
                    
                </div>
                

                
                <div class="all-videos-gallery tab-pane fade" role="tabpanel" id="video__gallery">
                    <div class="row">
                        @foreach($gallery as $one)
                        <div class="col-12 col-md-6 col-lg-3 gallery-video">
                            <div class="video__wrap">
                                <iframe width="250" height="250" src="{{ $one->file }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            @if(app()->getLocale() == 'en')
                            <a href="{{URL::to($one['file'])}} " target="-blank" class="video__title">{{$one['en_title']}}</a>
                            @else
                            <a href="{{URL::to($one['file'])}} " target="-blank"  class="video__title">{{$one['ar_title']}}</a>
                            @endif
                        </div>
                        
                       @endforeach
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection