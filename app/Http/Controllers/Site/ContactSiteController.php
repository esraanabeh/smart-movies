<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Site;
use App\Models\SocialMedia;
use App\Http\Requests\UpdateContact;
use App\Http\Requests\StoreContact;
use Illuminate\Support\Facades\Session;
use Mail;

class ContactSiteController extends Controller
{
    //
    public function contacts(Request $request){
        Session::put('page','contacts');
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        // $this->contact->add($request);
        return view('site.contacts.contacts',compact('site','social_media'));

        
    }

    
    public function storecontact(StoreContact $request){
        // dd($request->name);
       
        $contact = new Contact();
        $contact->name = $request->name;
       
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message =$request->message; 
        $contact->reply = '';
        $contact->save();

       
        $message = trans('admin.thanks_suc');
        return back()->with(['message' => $message]);
       
       
        
    }
}
