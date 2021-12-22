<?php

namespace App\Http\Controllers\Admin;
use App\Models\Service;
use App\Http\Requests\StoreService;
use App\Http\Requests\UpdateService;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ServiceController extends Controller
{

    function __construct(Service $service) {
        $this->service = $service;
        $this->middleware('role:services_all', ['only' => ['index']]);
        $this->middleware('role:services_add', ['only' => ['create', 'store']]);
        $this->middleware('role:services_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:services_delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحة صفحات الموقع';
        $action->en_action = 'Open website services';
        $action->ip = request()->ip();
        $action->save();

        $services = $this->service->getAll();
        return view('admin.services.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreService $request)
    {
        $imageName = '';

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imageName);

            $image = $request->file('image');

        }
        $service = new Service();
        
        
        $service->ar_title = $request->ar_title;

        $service->en_title = $request->en_title;

        $service->ar_desc =  $request->ar_desc;

        $service->en_desc = $request->en_desc;

        $service->image = $imageName;
        $service->save();

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بإضافة خدمة جديدة ' . $request['ar_title'];
        $action->en_action = 'Add new service ' . $request['en_title'];
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
        $service = $this->service->getById($id);
        return view('admin.services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateService $request, $id)
    {
        //
        
        $imageName = "";
        $service = Service::findOrFail($id);
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imageName);

            $image = $request->file('image');
            $service->image = $imageName;
        }

        
        $service->ar_title = $request->ar_title;

        $service->en_title = $request->en_title;

        $service->en_desc =  $request->en_desc;
        
        $service->ar_desc = $request->ar_desc;

        $service->save();

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بتعديل  خدمة حالية ' . $request['ar_title'];
        $action->en_action = 'Edit current service ' . $request['en_title'];
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/services')->with(['message' => $message]);
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
        $service = Service::find($id);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بحذف صفحة حالية ' . $service['ar_title'];
        $action->en_action = 'Delete current servi$service ' . $service['en_title'];
        $action->ip = request()->ip();
        $action->save();
        $service->delete();
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }

    


}
