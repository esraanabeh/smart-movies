@extends('site.layouts.app')

@section('content')
<section class="check_demo_movie">
    <div class="container">
        <h2 class=" wow fadeInDown">Check Our <span class="main-color"> Packages</span></h2>
        @foreach ($site as $sit)
       <p>{{$sit['package_text']}}</p>
        @endforeach
        <div class="row">
            @foreach($packages as $package)
            <div class="col-md-4">
                <div class="card wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="card-header">
                        <img src="{{URL::to('image/'.$package['image'])}}"  class="lazyload">
                    </div>
                    <div class="card-body">
                        <h4> <a href="#"> {{$package['name']}}</a></h4>
                        <div class="rating">
                            <ul class="d-flex justify-content-center rating_stars">
                                <li><i class="fas fa-star star_gold"></i></li>
                                <li><i class="fas fa-star star_gold"></i></li>
                                <li><i class="fas fa-star star_gold"></i></li>
                                <li><i class="fas fa-star star_gold"></i></li>
                                <li><i class="fas fa-star star_gold"></i></li>
                            </ul>
                        </div>
                        <p class="package-price">
                            <span>{{$package['price_after_discount']}} $</span>
                            <span><del class="text-danger">{{$package['price']}} $</del></span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
           
           
        </div>
    </div>
</section>
@endsection