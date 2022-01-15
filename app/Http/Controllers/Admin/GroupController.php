<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Permission;
use App\Http\Requests\StoreGroup;
use App\Http\Requests\UpdateGroup;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller {

    function __construct(Group $Group, Permission $Permission) {
        $this->group = $Group;
        $this->permission = $Permission;
        $this->middleware('role:groups_all', ['only' => ['index']]);
        $this->middleware('role:groups_add', ['only' => ['create', 'store']]);
        $this->middleware('role:groups_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:groups_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
      
        $groups = $this->group->where('type','admin')->get();
        return view('admin.groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('admin.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroup $request) {


        $new = $this->group->add($request);
        if (isset($request['permissions'])) {
            $premissions = $request['permissions'];
            foreach ($premissions as $pre) {
                $this->permission->add($pre, $new);
            }
        }

        

        $message = trans('admin.add_suc');
        return back()->with(['message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group) {
        //
        // $group = $this->group->getById($id);
        return view('admin.groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroup $request, $id) {
        //
        $this->group->edit($id, $request);
        $this->permission->delByGroup($id);
        if (isset($request['permissions'])) {
            $premissions = $request['permissions'];
            foreach ($premissions as $pre) {
                $this->permission->add($pre, $id);
            }
        }

     

        $message = trans('admin.edit_suc');
        return redirect('admin/groups')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $group = $this->group->getById($id);
        $this->group->remove($id);
        $this->permission->delByGroup($id);


        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }

}
