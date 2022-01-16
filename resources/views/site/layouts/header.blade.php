<div class="preloader">
    <div class="preloader-loading">
        <img src="{{ asset('site/images/logo-m.png') }}" data-src="{{ asset('site/images/logo-m.png') }}" class="lazyload">
    </div>
</div>
<div class="top_nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <ul class="d-flex about-site">
                    <li><a href="#">Questions</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Terms Of Privacy</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul class="d-flex social ">
                    @foreach ( $social_media as $one)
                    @if($one['type'] == 'facebook')
                    <li> <a target="-blank" href="{{URL::to($one['link'])}}"> <i class="fab fa-facebook-f"></i>
                     </a></li>
                    @endif
                    @endforeach

                    @foreach ( $social_media as $one)
                    @if($one['type'] == 'twitter')
                    <li> <a target="-blank" href="{{URL::to($one['link'])}}"> <i class="fab fa-twitter"></i> </a></li>
                    @endif
                    @endforeach

                    @foreach ( $social_media as $one)
                    @if($one['type'] == 'instagram')
                    <li> <a target="-blank" href="{{URL::to($one['link'])}}"> <i class="fab fa-instagram"></i> </a></li>
                    @endif
                    @endforeach

                    @foreach ( $social_media as $one)
                    @if($one['type'] == 'SnapChat')
                    <li> <a target="-blank" href="{{URL::to($one['link'])}}"> <i class="fab fa-snapchat-ghost"></i> </a></li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('site/images/logo-m.png') }}" data-src="{{asset('site/images/logo-m.png') }}"
                class="lazyload"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <ul class="menu-bars">
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                </ul>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Movies Demos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                @if(!Auth::user())
                <li class="nav-item">
                    <button class="btn btn-gradiant">
                        <a href="{{ url('/login') }}">login</a>
                    </button>
                </li>
                @else
                <li class="nav-item">
                    <button class="btn btn-gradiant">
                        <a href="{{ url('/site-logout') }}">logout</a>
                    </button>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>