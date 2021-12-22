

<header>
    <div class="menu-logo fixed-top">
         <div class="top-bar">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="call__wrap">
                        <a href="tel:{{ $site['phone'] }}" class="call__link">
                            <i class="fa fa-phone"></i>
                            <span>  {{$site['phone']}}</span>
                           
                        </a>
                        <a href="mailto:{{ $site['email'] }}" class="call__link">
                            <i class="fa fa-envelope"></i>
                            <span>{{$site['email']}}</span>
                        </a>
                    </div>
                    
                   
                    <div class="social__wrap d_mob_none">
                       
                        @foreach ( $social_media as $one)
                        {{-- @dd($one->link) --}}
                            @if($one['type'] == 'facebook')
                                <a target="-blank"  href="{{URL::to($one['link'])}}" class="social__link">
                                
                                    <i class="fa fa-facebook"></i>
                                </a>
                            @endif
                        @endforeach


                        @foreach ( $social_media as $one)
                        @if($one['type'] == 'instagram')
                       <a target="-blank"  href="{{URL::to($one['link'])}}" class="social__link">
                            <i class="fa fa-instagram"></i>
                        </a>
                        @endif
                        @endforeach

                        @foreach ( $social_media as $one)
                        @if($one['type'] == 'Youtube')
                        <a target="-blank" href="{{URL::to($one['link'])}}" class="social__link">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                        @endif
                        @endforeach

                        @foreach ( $social_media as $one)
                        @if($one['type'] == 'twitter')
                        <a target="-blank"  href="{{URL::to($one['link'])}}" class="social__link">
                            <i class="fa fa-twitter"></i>
                        </a>
                        @endif
                        @endforeach

                        @foreach ( $social_media as $one)
                        @if($one['type'] == 'WhatsApp')
                        <a target="-blank"  href="{{URL::to($one['link'])}}" class="social__link">
                            <i class="icon-whats"></i>
                        </a>
                        @endif
                        @endforeach
                        
                       
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="dektop_logo_wrapper">
            <a href="{{url('/')}}" class="main_logo">
                <img src="{{ asset('site/img/main_logo.png')}}" alt="">
            </a>
        </div>
        <!--headerNav-->
        <div class="headerNav">
            <div class="mobile_nav__wrapper">
                <button class="navbar-toggler mobile_menu_toggler" type="button" >
                    <i class="fa fa-bars"></i>
                </button>                    
                <a class="mobile_logo d-lg-none" href="index.html">
                    <img src="{{ asset('site/img/logo.png')}}" alt="">
                </a>
            </div>   
            
            <div class="mobile_menu">
                <ul class="site_links">
                    <li class="nav-item ">
                        <a class="nav-link {{Session::get('page') == "home" ? 'active' : ''}}" href="{{url('/')}}">{{__('Home')}} <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{Session::get('page') == "about" ? 'active' : ''}}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                           {{__('About Us')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/about') }}">{{__('about us') }}</a>
                            <a class="dropdown-item" href="{{ url('/mission') }}">{{__('our mission') }}</a>
                            <a class="dropdown-item" href="{{ url('/chairman') }}">{{__('chairman message') }}</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Session::get('page') == "services" ? 'active' : ''}} " href="{{ url('/services') }}">{{__('Our Services') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Session::get('page') == "clients" ? 'active' : ''}}" href="{{ url('/clients') }}">{{__('Our Clients') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Session::get('page') == "consultants" ? 'active' : ''}}" href="{{ url('/consultants') }}">{{__('Request Consultant') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Session::get('page') == "teams" ? 'active' : ''}}" href="{{ url('/teams') }}">{{__('Our Team') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Session::get('page') == "contacts" ? 'active' : ''}}" href="{{ url('/contacts') }}">{{__('Contact Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ URL::to('lang') }}">
                            <i class="fa fa-language"></i>
                            @if (App::getLocale() == 'ar')
                                <span>English </span>
                            @else
                                <span> العربية</span>
                            @endif
                        </a>
                        
                    </li>
                </ul>
            </div>    
        </div>
    </div>
  
</header>