<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Http\Requests\StoreLocation;
use App\Http\Requests\UpdateLocation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class LocationController extends Controller
{
    function __construct(Location $location) {
        $this->location = $location;
        $this->middleware('role:locations_all', ['only' => ['index']]);
        $this->middleware('role:locations_add', ['only' => ['create', 'store']]);
        $this->middleware('role:locations_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:locations_delete', ['only' => ['destroy']]);
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
        $action->ar_action = 'قام بفتح صفحة  الموقع';
        $action->en_action = 'Open website locations';
        $action->ip = request()->ip();
        $action->save();

        $locations = $this->location->getAll();
        return view('admin.locations.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocation $request)
    {
        //
        $this->location->add($request);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocation $request, $id)
    {
        //
        $this->location->edit($id, $request);
        $location = Location::findOrFail($id);
        $location->longitude =  $request->longitude;

        $location->latitude = $request->latitude;
        
        $location->save();
        $message = trans('admin.edit_suc');
        return redirect('admin/locations')->with(['message' => $message]);
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
        $location = $this->location->getById($id);
        $this->location->remove($id);

        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }
}
