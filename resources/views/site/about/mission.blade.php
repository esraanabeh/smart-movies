
@extends('site.layouts.app')
@section('content')

       <!--start banner section-->
       <div class="about-banner">
        @foreach($pages as $page)
        <div class="main__overlay"></div>
        <img src="{{URL::to('image/'.$page['image'])}}" alt="" class="img-fluid">
    </div>

    <!--start inner wrapper section-->
    <div class="inner-wrapper">
        <div class="container">
            @if(app()->getLocale() == 'en')
            <h3 class="main__title">{{ $page['en_title'] }}</h3>
            <p class="inner__des">{{ $page['en_desc'] }}</p>
            @else
            <h3 class="main__title">{{ $page['ar_title'] }}</h3>
            <p class="inner__des">{{ $page['ar_desc'] }}</p>
            @endif
        </div>
        @endforeach
    </div>










    @endsection