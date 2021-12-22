@extends('site.layouts.app')

@section('content')

<!--start inner wrapper section-->
<div class="main__pages__wrapper">
    <div class="container">
        <div class="row message_card">
            @foreach ($teams as $team )
            <div class="col-12 col-lg-6">
                <div class="message_img">
                    <div class="main__overlay"></div>
                    <img src="{{URL::to('image/'.$team['image'])}}" alt="" >
                </div>
            </div>
            
            <div class="col-12 col-lg-6">
                @if(app()->getLocale() == 'en')
                <h3 class="main__title">{{ $team['en_name'] }}</h3>
                <h5 class="main__position">{{ $team['en_title'] }}</h5>
                <p class="inner__posi">{{ $team['en_details'] }}</p>
                @else
                <h3 class="main__title">{{ $team['ar_name'] }}</h3>
                <h5 class="main__position">{{ $team['ar_title'] }}</h5>
                <p class="inner__posi">{{ $team['ar_details'] }}</p>
                @endif
            </div> 
            @endforeach
           
        </div>
       
    </div>
</div>

@endsection