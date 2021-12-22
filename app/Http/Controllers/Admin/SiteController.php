<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Site;
use App\Http\Requests\UpdateSite;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller {

    //
    function __construct() {
        $this->middleware('role:site_edit', ['only' => ['index', 'update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحة إعدادات الموقع';
        $action->en_action = 'Open site settings page';
        $action->ip = request()->ip();
        $action->save();

        $site = \App\Models\Site::find(1);
        return view('admin.site.index', ['site' => $site]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSite $request) {

        $site = \App\Models\Site::find(1);
        $imageName1 = '';
        $imageName2 = '';

        if ($request->hasFile('image')) {

            $imageName1 = time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imageName1);

            $image = $request->file('image');

        }

        if ($request->hasFile('twitter_image')) {

            $imageName2 = time() . '.' . $request->twitter_image->extension();

            $request->twitter_image->move(public_path('twitter_image'), $imageName2);

            $twitter_image = $request->file('twitter_image');

        }
        $site->ar_title =  $request->ar_title;
        $site->en_title =  $request->en_title;
        $site->ar_desc =  $request->ar_desc;
        $site->en_desc =  $request->en_desc;
        $site->ar_touch =  $request->ar_touch;
        $site->en_touch =  $request->en_touch;
        $site->ar_cons =  $request->ar_cons;
        $site->en_cons =  $request->en_cons;
        $site->ar_help =  $request->ar_help;
        $site->en_help =  $request->en_help;
        $site->email =  $request->email;
        $site->phone1 =  $request->phone1;
        $site->phone2 =  $request->phone2;
        $site->phone3 =  $request->phone3;
        $site->phone4 =  $request->phone4;
        $site->phone =  $request->phone;
        $site->hotline =  $request->hotline;
        $site->whatsapp =  $request->whatsapp;
        $site->location =  $request->location; 
        $site->image = $imageName1;
        $site->twitter_image = $imageName2;
        $site->save();

        // $site->edit($request);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بتعديل إعدادات الموقع';
        $action->en_action = 'Edit site settings ';
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.edit_suc');
        return back()->with(['message' => $message]);
    }

}
