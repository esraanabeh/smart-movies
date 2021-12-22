<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\SocialMedia;
use App\Models\Site;
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

    public function index() {
        $social_media=SocialMedia::get();
        $site = Site::find(1);
        $attributes = [
            'data-theme' => 'dark',
            'data-type' => 'audio',
        ];
        $options = [
            'data-theme' => 'dark',
            'data-type'	=> 'audio',
        ];
        Session::put('page','home');
        return view('index',compact('social_media','site','attributes','options'));
    }

    public function error_page() {
        $social_media=SocialMedia::get();
        $site = Site::find(1);
        return view('errors.404');
    }

}
