<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Http\Requests\GalleryStore;
use App\Http\Requests\GalleryUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class GalleryController extends Controller
{
    function __construct(Gallery $Gallery) {
        $this->gallery = $Gallery;
        $this->middleware('role:gallery_all', ['only' => ['index']]);
        $this->middleware('role:gallery_add', ['only' => ['create', 'store']]);
        $this->middleware('role:gallery_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:gallery_delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحة معرض الصور ';
        $action->en_action = 'Open gallery file';
        $action->ip = request()->ip();
        $action->save();

        $gallery = $this->gallery->getAll();
        return view('admin.gallery.index', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryStore $request)
    {
        $data = $request->all();
       if($request->type == "image"){
                if($request->hasFile('file')) {
                    $destinationPath = public_path('upload/gallery/');
                    $file = $request['file'];
                    $filename = Str::random(5) . '.' . $file->getClientOriginalName();
                    $file->move($destinationPath, $filename);
                }

       }
       $gallary = Gallery::create($data);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بإضافة صورة جديدة بعارض الصور ' . $request['ar_name'];
        $action->en_action = 'Add new gallery ' . $request['en_name'];
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.add_suc');
        return back()->with(['message' => $message]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gallery = $this->gallery->getById($id);

        return view('admin.gallery.edit', ['gallery' => $gallery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryUpdate $request, $id)
    {
        $this->gallery->edit($id, $request);
        
        $gallery = Gallery::findOrFail($id);
        $filename = FALSE;
       
        if($request->type == "image"){

        if ($request->hasFile('file')) {
            $file = $request['file'];
            $filename = Str::random(5) . '.' . $file->getClientOriginalName();
            $destinationPath = public_path('upload/gallery/');
            $file->move($destinationPath, $filename);
        }
    }
        // $gallery->type =  $request->type;
        $gallery->ar_title =  $request->ar_title;
        $gallery->en_title =  $request->en_title;
        $gallery->file = $request->file; 
        $gallery->save();
        // $this->gallery->edit($id, $request, $filename);


        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بتعديل  صورة حالية بعارض الصور ' . $request['ar_name'];
        $action->en_action = 'Edit current gallery ' . $request['en_name'];
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/gallery')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gallery = Gallery::find($id);
        $gallery->delete();

        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }
}
