<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Group;
use App\Http\Requests\StoreAdmin;
use App\Http\Requests\UpdateAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class AdminsController extends Controller {
    function __construct(User $User, Group $Group) {
        $this->user = $User;
        $this->group = $Group;
        $this->middleware('role:admins_all', ['only' => ['index']]);
        $this->middleware('role:admins_add', ['only' => ['create', 'store']]);
        $this->middleware('role:admins_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:admins_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحة المشرفين';
        $action->en_action = 'Open supervisors page';
        $action->ip = request()->ip();
        $action->save();

        $admins = User::where(['type'=>'admin'])->latest()->get();
        return view('admin.admins.index', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $groups = $this->group->getList();
        $groups = Arr::add($groups, '', trans('admin.choose_group'));
        $groups = array_reverse($groups, TRUE);

        return view('admin.admins.create', ['groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmin $request) {
        // die;
        $request['type'] = 'admin';
        $request['active'] = 'no';
        $this->user->add($request);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بإضافة مشرف جديد ' . $request['first_name'] . ' ' . $request['last_name'];
        $action->en_action = 'Add new supervisor ' . $request['first_name'] . ' ' . $request['last_name'];
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
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $admin = $this->user->getById($id);

        $groups = $this->group->getList();
        $groups = Arr::add($groups, '', trans('admin.choose_group'));
        $groups = array_reverse($groups, TRUE);

        return view('admin.admins.edit', ['admin' => $admin, 'groups' => $groups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmin $request, $id) {
        //
        $this->user->edit($id, $request);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بتعديل مشرف حالي ' . $request['ar_name'] ;
        $action->en_action = 'Edit current supervisor ' . $request['ar_name'] ;
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/admins')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $admin = User::find($id);
        $admin->delete();
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بحذف مشرف حالي ' . $admin['ar_name'] ;
        $action->en_action = 'Delete current supervisor ' . $admin['en_name'] ;
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);

    }

}
