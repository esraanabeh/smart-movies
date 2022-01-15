@extends('site.form.app')

@section('content')

<section class="contact-us bg-light">
    <div class="container">
        <h3 class="text-center">Login To Join Us</h3>
     
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10">
                <div class="contact-form">
                    <form action="{{URL::to('/site-login')}}" method="post" enctype="multipart/form-data" class="request__form">
                        {{ method_field('POST') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputEmail">Your Email Addrss</label>
                            <input type="email" name="email" id="inputEmail" class="form-control"
                                placeholder="Write Your Email">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Your Password </label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder=" Write Your password">
                        </div>
                       

                        <div class="text-center p-2">
                            <button type="submit" class="btn btn-gradiant">
                               login
                            </button>
                        </div>

                        <div >
                           <b> <span>Don't Have An Account ?</span> <a href="{{ url('/signup') }}" class="main-color ">Sign Up</a></b>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection