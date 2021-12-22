
@extends('site.layouts.app')

@section('content')


 <!--start inner wrapper section-->
 <div class="main__pages__wrapper">
    <div class="container">
        @foreach ($services as $service )
       
        <div class="row message_card">
            <div class="col-12 col-lg-6">
                <div class="message_img">
                    <div class="main__overlay"></div>
                    <img src="{{URL::to('image/'.$service['image'])}}" alt="" >
                </div>
            </div>
           
               
            @if(app()->getLocale() == 'en')
            <div class="col-12 col-lg-6">
                <h3 class="main__title">{{ $service['en_title'] }}</h3>
                <p class="inner__des">{{ $service['en_desc'] }}</p>
                @else
                <h3 class="main__title">{{ $service['ar_title'] }}</h3>
                <p class="inner__des">{{ $service['ar_desc'] }}</p>
                
            </div>
            @endif
        </div>
        {{-- @if(app()->getLocale() == 'en')
        <p class="inner__des">{{ $service['en_desc'] }}</p>
        @else
        <p class="inner__des">{{ $service['ar_desc'] }}</p>
        @endif --}}
             @endforeach
            
    </div>
</div>









@endsection