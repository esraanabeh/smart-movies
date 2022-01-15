<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\SocialMedia;
use App\Models\Setting;
use Config;

class HomeController extends Controller {

    public function __construct() {

    }

    public function language() {
        $lang = Config::get('app.locale');
        if ($lang == "ar") {
            Request()->session()->put('locale', 'en');
        } else {
            Request()->session()->put('locale', 'ar');
        }
        return back();
    }

    

    public function error_page() {
        $social_media=SocialMedia::get();
        $site = Setting::find(1);
        return view('errors.404');
    }

}
