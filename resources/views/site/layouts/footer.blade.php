
    <!--Start footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6"> 
                    <h3 class="footer__title">{{ __('Stay in Touch') }}</h3>
                    <div class="footer__links">
                        <a  class="footer_link">
                            <div class="call_icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>{{ $site['phone1'] }} | {{ $site['phone2'] }} | {{ $site['phone3'] }} | {{ $site['phone4'] }}</span>
                        </a>
                        <a href="tel:{{ $site['phone'] }}" class="footer_link">
                            <div class="call_icon">
                                <img src="{{ asset('site/img/fax.png')}}" alt="">
                            </div>
                            <span>{{$site['phone']}}</span>
                        </a>
                        <a href="mailto:{{ $site['email'] }}" class="footer_link">
                            <div class="call_icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <span>{{$site['email']}}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="footer__title">{{ __("Tweets by") }} ‎@alsaneagroup</h3>
                    <div class="tweet__wrap">
                        <a class="twitter-timeline" data-width="600" data-height="300" href="https://twitter.com/alsaneagroup?ref_src=twsrc%5Etfw">{{ __("Tweets by alsaneagroup") }}</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                    </div>
                </div>

            </div>
        </div>
     </div>
     <!--copyrights-->
     <div class="copyrights">
        <div class="container">
            <div class="social__wrap">
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
                <p class="rights__des">Copyright © 2021 Al Sanea. All rights reserved.</p>
                <p class="powered__des">Powered By <strong>Line</strong></p>
            </div>
        </div>
    </div>
    <a href="#" class="go-top" data-toggle="tooltip" title="" data-placement="left" data-original-title="go to top" >
        <i class="fa fa-arrow-up"></i>
    </a>
    
     {{-- call_us.html --}}
        <a href="tel:{{ $site['phone'] }}" class="call__us__btn">
            <i class="fa fa-phone"></i>
        </a>

    