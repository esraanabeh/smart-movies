@extends('site.layouts.app')

@section('content')


 <!--start inner wrapper section-->
 <div class="inner-wrapper">
    <div class="container">
        <h3 class="main__title">{{ __('Our clients') }}</h3>
        <div class="row services__row">
            @foreach ($clients as $client )
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="service__card">
                    <a class="service__img" >
                        <img src="{{URL::to('logo/'.$client['logo'])}}" alt="">
                    </a>
                    <a >
                        @if(app()->getLocale() == 'en')
                        <h3 class="service_card_title">{{ $client['en_name'] }}</h3>
                        @else
                        <h3 class="service_card_title">{{ $client['ar_name'] }}</h3>
                        @endif
                    </a>
                </div>
            </div>
            @endforeach
           
          
        </div>
                {{-- pagination --}}
        <nav aria-label="Page navigation pages__pagination">
          <ul class="pagination">
           
            {{ $clients->links() }}
            
            
          </ul>
      </nav>
    </div>
</div>






@endsection