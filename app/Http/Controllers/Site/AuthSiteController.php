<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorUser;
use App\Http\Requests\StorLogin;
use App\Models\User;
use App\Models\Package;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthSiteController extends Controller
{
    //

    public function index()
    {
        return view('site.form.signup');

        
    }


    public function storedata(StorUser $request){
        // dd($request->all());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = 'user';
        $user->active = 'yes';
        $user->password =  Hash::make($request['password']); 
        $user->image_profile = '1642090393.png';
        $user->save();
       // dd($user);
       return redirect()->route('index_site');
    }



    
    public function login()
    {
        return view('site.form.login');

        
    }

    public function siteLogin(StorLogin $request) {
        $request = Request()->all();
       
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], TRUE)) {
            // $active = Auth::user()->active;
            return redirect()->route('index_site');
            
        } else {
           
            $message = __('wrong_login');
            return back()->with(['message' => $message]);
        }
    }
    public function logout() {
        Auth::logout();
        $message = 'logout successfully';
        return redirect('/')->with(['message' => $message]);
    }
}
