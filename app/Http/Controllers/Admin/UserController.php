<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Bank;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller {

    //
    function __construct(User $User, Bank $Bank) {
        $this->user = $User;
        $this->bank = $Bank;
        $this->middleware('role:users_all', ['only' => ['index']]);
        $this->middleware('role:users_add', ['only' => ['create', 'store']]);
        $this->middleware('role:users_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:users_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحة أعضاء التطبيقات';
        $action->en_action = 'Open application users page';
        $action->ip = request()->ip();
        $action->save();

        $users = User::where('type','user')->latest()->get();
        return view('admin.users.index', ['users' => $users]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('admin.users.create');
    }

    
    public function store(StoreUser $request) {
        
          $data = $request->except('image_profile','password','active');
           if ($request->hasFile('image_profile')) {
              $filename = time() . '-' . $request->image_profile->getClientOriginalName();
              $request->image_profile->move(public_path('upload/users'), $filename);
              $data['image_profile'] = $filename;
          }
         
          $data['password'] = Hash::make($request->password);
          $data['active'] = 'yes';
        
         User::create($data);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بإضافة عضو بالتطبيق ' . $request['name'] ;
        $action->en_action = 'Add new user ' . $request['name'] ;
        $action->ip = request()->ip();
        $action->save();
        $message = trans('admin.add_suc');

        return   redirect()->route('users.index')->with(['message' => $message]);
    }
    public function show(User $user)
    {
      $addresses  = Address::where('user_id', $user->id)->latest()->get();
      return view('admin.users.addresses', compact('addresses'));
    }
    public function user_orders($id){
       
        $orders = Order::where('user_id',$id)->latest()->get();
        return view('admin.users.orders', compact('orders'));
    }
    public function user_wishlists($id){
       
        $wishlists = Wishlist::where('user_id',$id)->latest()->get();
        return view('admin.users.wishlists', compact('wishlists'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user = $this->user->getById($id);

        $banks = $this->bank->getList();
        $banks = Arr::add($banks, '', trans('admin.choose_bank'));
        $banks = array_reverse($banks, TRUE);

        return view('admin.users.edit', ['user' => $user, 'banks' => $banks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $filename = FALSE;
        if ($request->hasFile('image_profile')) {
            $file = $request['image_profile'];
            $filename = Str::random(5) . '.' . $file->getClientOriginalName();
            $destinationPath = public_path('upload/users');
            $file->move($destinationPath, $filename);
        }

        $this->user->edit_user($id, $request, $filename);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بتعديل  عضو حالي ' . $request['name'] ;
        $action->en_action = 'Edit current user ' . $request['name'] ;
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/users')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $user = $this->user->getById($id);
        $this->user->remove($id);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بحذف عضو حالي بالتطبيق ' . $user['name'] ;
        $action->en_action = 'Delete current application user ' .  $user['name'];
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }

}
