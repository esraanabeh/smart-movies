
@extends('site.layouts.app')

@section('content')
<!--start inner wrapper section-->
<div class="inner-wrapper">
    <div class="container">
        <h3 class="main__title">{{ __('Our team') }}</h3>
        <div class="row services__row">
            @foreach ($teams as $team )
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="service__card">
                    <a class="service__img" href="{{URL::to('teamdetails/'.$team['id'])}}">
                        <img src="{{URL::to('image/'.$team['image'])}}" alt="">
                    </a>
                    @if(app()->getLocale() == 'en')
                    <h5 class="position__title">{{ $team['en_title'] }}</h5>
                    <a href="{{URL::to('teamdetails/'.$team['id'])}}">
                        <h3 class="service_card_title">{{ $team['en_name'] }}</h3>
                    </a>
                    @else
                    <h5 class="position__title">{{ $team['ar_title'] }}</h5>
                    <a href="{{URL::to('teamdetails/'.$team['id'])}}">
                        <h3 class="service_card_title">{{ $team['ar_name'] }}</h3>
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
           
           
        </div>

        <nav aria-label="Page navigation pages__pagination">
            <ul class="pagination">
              {{ $teams->links() }}
            </ul>
        </nav>
    </div>
</div>




@endsection