
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('site/images/logo-m.png') }}"
                            data-src="{{ asset('site/images/logo-m.png') }}" class="lazyload"></a>
                            @foreach ($site as $sit)
                    <p> {{$sit['footer_text'] ?? ' '}} </p>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <h5>Links</h5>
                    <div class="links d-flex">
                        <ul>
                            <li> <a href="{{ url('/signup') }}"> > Create Account</a></li>
                            <li> <a href="#"> > movie</a></li>
                            <li> <a href="#"> > Team </a></li>
                            <li> <a href="#"> > Company </a></li>
                        </ul>
                        <ul>
                            <li> <a href="#"> > Questions</a></li>
                            <li> <a href="#"> > Blog</a></li>
                            <li> <a href="#"> > Terms of Privacy </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <div><a href="mailto:info@smartmovie.com"> <i class="fas fa-envelope"></i>
                        {{$sit['email'] ?? ''}}</a></div>
                        <form action="{{URL::to('/storecontact')}}" method="post" enctype="multipart/form-data" class="request__form">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}
                        <div class="input-group mb-2">
                            <input name="email" type="email" class="form-control" id="email"
                                placeholder=" Your Email ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                 
                                    <button type="submit" class="btn btn-gradiant m-0"  >{{ __('send') }}</button>

                                </div>
                            </div>
                        </div>
                    </form>
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
        <div class="copyrights">
            <p>© All Rights reserved to Smart Movies website 2017</p>
        </div>
    </footer>