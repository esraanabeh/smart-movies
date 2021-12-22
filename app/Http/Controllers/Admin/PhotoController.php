<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\Photo;
use App\Http\Requests\StorePhoto;
use App\Http\Requests\UpdatePhoto;

class PhotoController extends Controller
{
    function __construct(Photo $Photo) {
        $this->photo = $Photo;
        $this->middleware('role:photo_all', ['only' => ['index']]);
        $this->middleware('role:photo_add', ['only' => ['create', 'store']]);
        $this->middleware('role:photo_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:photo_delete', ['only' => ['destroy']]);
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
        $action->en_action = 'Open photo file';
        $action->ip = request()->ip();
        $action->save();

        $photo = $this->photo->getAll();
        return view('admin.photo.index', ['photo' => $photo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhoto $request)
    {
        //
        $photoName = '';

        if ($request->hasFile('photo')) {

            $photoName = time() . '.' . $request->photo->extension();

            $request->photo->move(public_path('photo'), $photoName);

            $photo = $request->file('photo');

        }

        $photo = new Photo();
        
        $photo->photo = $photoName;

        $photo->save();
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
        $photo = $this->photo->getById($id);
        return view('admin.photo.edit', ['photo' => $photo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhoto $request, $id)
    {
        
        $photo = Photo::findOrFail($id);
        $data = $request->except('photo');
        // return $data['photo'];
        if ($request->hasFile('photo')) {
            $filename = time() . '-' . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('photo'), $filename);
            $data['photo'] = $filename;
        }
        $photo->update($data);
        $message = trans('admin.edit_suc');
        return redirect('admin/photo')->with(['message' => $message]);
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
        $photo = Photo::find($id);
        $photo->delete();
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    
    }
}
