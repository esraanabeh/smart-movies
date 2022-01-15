@extends('site.form.app')

@section('content')

<section class="contact-us bg-light">
    <div class="container">
        <h3 class="text-center">Sign Up To Join Us</h3>
     
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10">
                <div class="contact-form">
                    <form action="{{URL::to('/storedata')}}" method="post" enctype="multipart/form-data" class="request__form">
                        {{ method_field('POST') }}
                        {{ csrf_field() }}
                        <div class="form-group ">
                            <label for="inputName">Write Your Name</label>
                            <input name="name" type="text" class="form-control" id="name"
                                placeholder="Write Your Name">
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Your Email Addrss</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Write Your Email"  >
                        @if($errors->has('email'))
                        <div class="alert alert-danger">{{$errors->first('email')}}</div>
                        @endif    
                        </div>
                        <div class="form-group">
                            <label for="password">Enter Password </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder=" Write Your password">
                        </div>
                      
                        <div class="form-group">
                            <label for="ConfirmPassword">Confirm Password </label>
                            <input type="password"  name="ConfirmPassword" id="ConfirmPassword" class="form-control" placeholder="  Confirm Your password">
                        </div>

                        <div class="text-center p-2">
                           
                            <button type="submit" class="btn btn-gradiant"  >Sign Up</button>
                        </div>

                        <div >
                           <b> <span>Have An Account ?</span> <a href="{{ url('/login') }}" class="main-color ">Login</a></b>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection