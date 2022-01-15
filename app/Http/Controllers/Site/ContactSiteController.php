<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\UpdateContact;
use App\Http\Requests\StoreContact;
use Mail;

class ContactSiteController extends Controller
{
    

    
    public function storecontact(StoreContact $request){
        // dd($request->name);
       
        $contact = new Contact();
        
        $contact->email = $request->email;
        
        
        $contact->save();

       
        $message = trans('admin.thanks_suc');
        return back()->with(['message' => $message]);
       
       
        
    }
}
