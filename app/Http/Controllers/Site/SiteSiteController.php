<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;
use App\Models\Setting;
use App\Models\Package;

class SiteSiteController extends Controller
{
    //
    public function index() {
        $social_media=SocialMedia::get();
        $site=Setting::get();
        // dd($site);
        $packages=Package::get();
        return view('site.index',compact('site', 'packages','social_media'));
    }
}
