<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Site;
use App\Models\SocialMedia;
use App\Http\Requests\StorePage;
use App\Http\Requests\UpdatePage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class PageSiteController extends Controller
{
    //
    public function about() {
        Session::put('page','about');
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        $pages = Page::where('type','Welcome To Our Site')->get();
        return view('site.about.about',compact('pages','social_media','site'));
    }

    public function mission() {
        Session::put('page','about');
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        $pages = Page::where('type','Our Mission')->get();
        return view('site.about.mission',compact('pages','social_media','site'));
    }

    public function chairman() {
        Session::put('page','about');
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        $pages = Page::where('type','Chairman Message')->get();
        return view('site.about.chairman',compact('pages','social_media','site'));
    }
}
