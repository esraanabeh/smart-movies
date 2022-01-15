<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Http\Requests\StorePackage;
use App\Http\Requests\UpdatePackage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    function __construct(Package $package) {
        $this->package = $package;
        $this->middleware('role:packages_all', ['only' => ['index']]);
        $this->middleware('role:packages_add', ['only' => ['create', 'store']]);
        $this->middleware('role:packages_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:packages_delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packages = $this->package->getAll();
        return view('admin.packages.index', ['packages' => $packages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackage $request)
    {
        //
        
            $imageName = '';
    
            if ($request->hasFile('image')) {
    
                $imageName = time() . '.' . $request->image->extension();
    
                $request->image->move(public_path('image'), $imageName);
    
                $image = $request->file('image');
    
            }
            $package = new Package();
        
            $package->name = $request->name;
    
            $package->price = $request->price;
    
            $package->rate = $request->rate;
    
            $package->is_discount = $request->is_discount;
    
            $package->price_after_discount =  $request->price_after_discount;
    
            $package->image = $imageName;

            $package->save();
    
       
    
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
        $package = $this->package->getById($id);
        return view('admin.packages.edit', ['package' => $package]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackage $request, $id)
    {
        //

        $imageName = "";
        $package = Package::findOrFail($id);
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imageName);

            $image = $request->file('image');
            $package->image = $imageName;
        }

        $package->name = $request->name;
        $package->rate = $request->rate;

        $package->price = $request->price;
        
        $package->is_discount = $request->is_discount;

        $package->price_after_discount = $request->price_after_discount;

        $package->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/packages')->with(['message' => $message]);
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
        $package = Package::find($id);

        $package->delete();
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }
}
