<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Site;
use App\Models\SocialMedia;
use App\Http\Requests\StoreClient;
use App\Http\Requests\UpdateClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
 

class ClientSiteController extends Controller
{
    //

    
    public function clients() {
        Session::put('page','clients');
        //
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        $clients = Client::paginate('6');
        return view('site.clients.clients',compact('clients','site','social_media'));
    }
}


