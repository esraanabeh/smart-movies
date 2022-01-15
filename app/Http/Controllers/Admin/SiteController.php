<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
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
      

        $site = \App\Models\Setting::find(1);
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

        $site = \App\Models\Setting::find(1);
        $site->ar_title =  $request->ar_title;
        $site->en_title =  $request->en_title;
        $site->package_text =  $request->package_text;
        $site->footer_text =  $request->footer_text;
        $site->email =  $request->email;
        $site->save();

        // $site->edit($request);

       

        $message = trans('admin.edit_suc');
        return back()->with(['message' => $message]);
    }

}
