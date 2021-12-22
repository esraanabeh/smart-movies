<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Site;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Session;

class ServiceSiteController extends Controller
{
    //
    public function services(){
        //
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        $services = Service::paginate('8');
        Session::put('page','services');
        return view('site.services.services',compact('services','social_media','site'));
    }


    public function servicedetails($id){
        Session::put('page','services');
        $site = Site::find(1);
        $social_media=SocialMedia::get();
          $services = Service::where('id',$id)->get();
        //   dd($service);
        return view('site.services.servicedetails',compact('services','social_media','site'));
    }
}
