<?php
use App\Models\SocialMedia;
use App\Models\Setting;
$social_media=SocialMedia::get();
$site = Setting::find(1);
?>
@extends('site.layouts.app')

@section('content')


    <!--start inner wrapper section-->
    <div class="main__pages__wrapper contact__us__wrapper">
        <div class="container">
            <div class="not_found_wrap">
                <div class="not__img">
                    <img src="{{ asset('site/img/404.png') }}" alt="" class="img-fluid">
                </div>
                <h3 class="not__title">404</h3>
                <h5 class="not__subtitle">{{__('page not found') }}</h5>
                <p class="not__des"> {{__('The page you are looking for was moved, removed, renamed or might never existed.') }}</p>
            </div>
        </div>
    </div>


        




   
@endsection