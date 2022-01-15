<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Movie;
use App\Models\Package;
use App\Models\Page;
;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    //
    function __construct()
    {
    }

    public function getLogin()
    {
        if (Auth::Check()) {
            return redirect('admin');
        }
        return view('admin.home.login');
    }

    public function postLogin()
    {
        $inputs = Request()->all();

        $remember = FALSE;
        if (isset($inputs['remember'])) {
            $remember = TRUE;
        }
        if (Auth::attempt(['email' => $inputs['email'], 'password' => $inputs['password']], true)) {
            $active = Auth::user()->active;
            if ($active == 'yes') {
              

                return redirect()->intended('admin');
            } else {
                Auth::logout();
                return back()->withInput()->withError(trans('admin.not_allow'));
            }
        } else {
            return back()->withInput()->withError(trans('admin.wrong_login'));
        }
    }

    public function logout()
    {
      

        Auth::logout();
        return redirect('admin/login');
    }

    public function index()
    {
        
        if (!Auth::Check()) {
            return redirect('admin/login');
        }
        $movies = Movie::count();
        $packages = Package::count();
        $pages = page::count();
     
        
        return view('admin.home.index', compact("movies","packages","pages"));
    }

    public function not_allow()
    {
        return view('admin.home.deny');
    }

  

    public function edit_active($type, $id)
    {
        $permission = \App\Models\Permission::where('group_id', Auth::User()->group_id)->where('permission', $type . '_edit')->count();
        if ($permission == 0) {
            $data['status'] = 0;
            $data['message'] = trans('admin.not_allow');
            return response()->json($data);
        }

        if ($type == 'admins') {
            $admin = \App\Models\User::find($id);
            if ($admin['active'] == 'yes') {
                $admin->active = 'no';
            } elseif ($admin['active'] == 'no') {
                $admin->active = 'yes';
            }
            $admin->save();
            $ar_message = 'قام بتعديل تفعيل الموظف : ' . $admin['ar_name'] ;
            $en_message = 'Edit Activation of employee : ' . $admin['ar_name'] ;
        } elseif ($type == 'users') {
            $user = \App\Models\User::find($id);
            if ($user['active'] == 'yes') {
                $user->active = 'stopped';
            } elseif ($user['active'] == 'no' || $user['active'] == 'stopped') {
                $user->active = 'yes';
            }
            $user->save();
            $ar_message = 'قام بتعديل تفعيل العضو : ' . $user['ar_name'] ;
            $en_message = 'Edit Activation of user : ' . $user['ar_name'] ;
        }   

        $data['status'] = 1;
        $data['message'] = trans('admin.edit_suc');
        return response()->json($data);
    }
}
