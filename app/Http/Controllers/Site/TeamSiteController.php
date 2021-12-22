<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Site;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Session;

class TeamSiteController extends Controller
{
    //
    public function teams() {
        Session::put('page','teams');
        //
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        $teams = Team::get();
       $teams = Team::paginate('6');
        return view('site.teams.teams',compact('teams','social_media','site'));
    }

    public function teamdetails($id){
        Session::put('page','teams');
        $site = Site::find(1);
        $social_media=SocialMedia::get();
        $teams = Team::where('id',$id)->get();
        // dd($teams);
      return view('site.teams.teamdetails',compact('teams','social_media','site'));
  }
}
