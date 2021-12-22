<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultant;
use App\Models\Site;
use App\Models\SocialMedia;
use App\Http\Requests\StoreConsultant;
use App\Http\Requests\UpdateConsultant;
use Illuminate\Support\Facades\Session;
use Mail;

class ConsultanstSiteController extends Controller
{
    //
    public function consultants(Request $request){
        Session::put('page','consultants');
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        
        // $attributes = [
        //     'data-theme' => 'dark',
        //     'data-type' => 'audio',
        // ];
        // $options = [
        //     'data-theme' => 'dark',
        //     'data-type'	=> 'audio',
        // ];
        // $this->contact->add($request);
        return view('site.consultants.consultants',compact('site','social_media'));

        
    }

    public function storeconsultant(StoreConsultant $request){
        // dd($request->name);
       
        $consultant = new Consultant();
        $consultant->name = $request->name;
       
        $consultant->phone = $request->phone;
        $consultant->email = $request->email;
        $consultant->consultant =$request->consultant; 
        $consultant->reply = '';
        $consultant->save();
        $message = trans('admin.thanks_suc');
        return back()->with(['message' => $message]);
    }
}
