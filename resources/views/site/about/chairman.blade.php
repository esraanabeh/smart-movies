
@extends('site.layouts.app')
@section('content')


    <!--start inner wrapper section-->
    <div class="main__pages__wrapper">
        <div class="container">
            @foreach($pages as $page)
            <div class="row message_card">
                <div class="col-12 col-lg-6">
                    <div class="message_img">
                        <div class="main__overlay"></div>
                        <img src="{{URL::to('image/'.$page['image'])}}" alt="" >
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    @if(app()->getLocale() == 'en')
                    <h3 class="main__title">{{ $page['en_title'] }}</h3>
                    <p class="inner__des">{{ $page['en_desc'] }}</p>
                    @else
                    <h3 class="main__title">{{ $page['ar_title'] }}</h3>
                    <p class="inner__des">{{ $page['ar_desc'] }}</p>
                    @endif
                </div>
            </div>
           @endforeach
        </div>
    </div>










 @endsection