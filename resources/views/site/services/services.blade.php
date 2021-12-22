@extends('site.layouts.app')

@section('content')
       <!--start inner wrapper section-->
       <div class="inner-wrapper">
        <div class="container">
            <h3 class="main__title">{{ __('Our services') }}</h3>
            <div class="row services__row">
                @foreach($services as $service)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="service__card">
                        <a class="service__img" href="{{URL::to('servicedetails/'.$service['id'])}}">
                            
                            <img src="{{URL::to('image/'.$service['image'])}}" style="height: 180px; width: 180px;" alt="">
                        </a>
                        <a href="{{URL::to('servicedetails/'.$service['id'])}}">
                            @if(app()->getLocale() == 'en')
                            <h3 class="service_card_title">{{$service['en_title']}}</h3>
                            @else
                            <h3 class="service_card_title">{{$service['ar_title']}}</h3>
                            @endif
                        </a>
                    </div>
                
            </div>
            @endforeach
        </div>

            <nav aria-label="Page navigation pages__pagination">
                <ul class="pagination">
                 
                  {{ $services->links() }}
                  
                  
                </ul>
            </nav>
        </div>
    </div>








@endsection