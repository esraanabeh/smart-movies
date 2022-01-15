<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UpdateProfile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

    //
    function __construct(User $User) {
        $this->user = $User;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.profile.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfile $request, $id) {
        $this->user->edit($id, $request);
        $message = 'تم حفظ التعديل بنجاح';
        return back()->with(['message' => $message]);
    }

}
