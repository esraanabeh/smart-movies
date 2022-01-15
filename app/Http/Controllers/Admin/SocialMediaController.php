<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSocial;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateSocialMedia;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Auth;

class SocialMediaController extends Controller
{

    //
    public function __construct(SocialMedia $SocialMedia)
    {
        $this->social_media = $SocialMedia;
        $this->middleware('role:social_media_all', ['only' => ['index']]);
        $this->middleware('role:social_media_add', ['only' => ['create', 'store']]);
        $this->middleware('role:social_media_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:social_media_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       

        $social_media = $this->social_media->getAll();
        return view('admin.social_media.index', ['social_media' => $social_media]);
    }

    public function create()
    {

        return view('admin.social_media.create');
    }

    public function show()
    {
        //
    }

    public function store(StoreSocial $request)
    {
        

        
        $social_media = new SocialMedia();
        $type = $request->type;
        $social_media->type = $type;
        $link = $request->link;
        $social_media->link = $link;
       
        $social_media->save();

       

        $message = trans('admin.add_suc');
        return back()->with(['message' => $message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $social_media = $this->social_media->getById($id);
        return view('admin.social_media.edit', ['social_media' => $social_media]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialMedia $request, $id)
    {
        //
        $this->social_media->edit($id, $request);

       

        $social_media = SocialMedia::findOrFail($id);
        

        $type = $request->type;
        $link = $request->link;
        $social_media->type = $type;
        $social_media->link = $link;
        $social_media->save();
        $message = trans('admin.edit_suc');
        return redirect('admin/social_media')->with(['message' => $message]);
    }

    public function destroy($id)
    {
        //
        $social_media = SocialMedia::find($id);
        // dd($social_media,$id);

     

        $social_media->delete();

        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }

    


}