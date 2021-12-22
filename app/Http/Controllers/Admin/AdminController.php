<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Client;
use App\Models\Consultant;
use App\Models\Team;
use App\Models\Service;
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
                $action = new \App\Models\Action();
                $action->user_id = Auth::User()->id;
                $action->ar_action = 'قام بتسجيل الدخول للوحة التحكم';
                $action->en_action = 'Login to dashboard';
                $action->ip = request()->ip();
                $action->save();

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
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بتسجيل الخروج من لوحة التحكم';
        $action->en_action = 'Logout from admin dashboard';
        $action->ip = request()->ip();
        $action->save();

        Auth::logout();
        return redirect('admin/login');
    }

    public function index()
    {
        
        if (!Auth::Check()) {
            return redirect('admin/login');
        }
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح الرئيسية للوحة التحكم';
        $action->en_action = 'Go to admin dashboard homepage';
        $action->ip = request()->ip();
        $action->save();
       
        
        $clients = Client::count();
        $services = Service::count();
        $teams = Team::count();
        $consultant = Consultant::count();
        // $gallery =Gallery::
       


        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحه طباعه الرئيسية للوحة التحكم';
        $action->en_action = 'Go to admin dashboard homepage';
        $action->ip = request()->ip();
        $action->save();
        return view('admin.home.index', compact("clients","services","teams","consultant"));
    }
    public function not_allow()
    {
        return view('admin.home.deny');
    }

    public function delete_all($type)
    {
        $request = request()->all();
        $permission = \App\Models\Permission::where('group_id', Auth::User()->group_id)->where('permission', $type . '_delete')->count();
        if ($permission == 0) {
            $error = trans('admin.not_allow');
            return back()->with(['error' => $error]);
        }

        
        
        elseif ($type == 'banks') {
            $banks = \App\Models\Bank::whereIn('id', $request['ids'])->get();
            foreach ($banks as $bank) {
                foreach ($bank['Users'] as $one_user) {
                    $user = \App\Models\User::find($one_user['id']);
                    $user->bank_id = 0;
                    $user->save();
                }
            }
            \App\Models\Bank::whereIn('id', $request['ids'])->delete();
            $ar_message = 'قام بحذف كل البنوك';
            $en_message = 'Delete all banks';
        }
         elseif ($type == 'groups') {
            \App\Models\Group::whereIn('id', $request['ids'])->delete();
            \App\Models\Permission::whereIn('group_id', $request['ids'])->delete();
            $ar_message = 'قام بحذف كل الصلاحيات';
            $en_message = 'Delete all supervisors powers';
        } 
        elseif ($type == 'admins') {
            $admins = \App\Models\User::whereIn('id', $request['ids'])->get();
            foreach ($admins as $admin) {
                $admin->active = 'delete';
                $admin->deleted_at = now();
                $admin->save();
            }
            $ar_message = 'قام بحذف كل المشرفين';
            $en_message = 'Delete all supervisors';
        } elseif ($type == 'users') {
            $users = \App\Models\User::whereIn('id', $request['ids'])->get();
            foreach ($users as $user) {
                $user->active = 'delete';
                $user->deleted_at = now();
                $user->save();
            }
            $ar_message = 'قام بحذف كل الأعضاء';
            $en_message = 'Delete all users';

        } elseif ($type == 'ads') {
            \App\Models\Ads::whereIn('id', $request['ids'])->delete();
            $ar_message = 'قام بحذف كل الإعلانات';
            $en_message = 'Delete all ads';

        } 
       
      
       
       
      
        elseif ($type == 'slider') {
            \App\Models\Slider::whereIn('id', $request['ids'])->delete();
            $ar_message = 'قام بحذف كل الصور بعارض الصور';
            $en_message = 'Delete all images in slider';
        }
         elseif ($type == 'pages') {
            \App\Models\Page::whereIn('id', $request['ids'])->where('id', '>', 6)->delete();
            $ar_message = 'قام بحذف كل صفحات الموقع';
            $en_message = 'Delete all website pages';
        }

        elseif ($type == 'clients') {
            \App\Models\Client::whereIn('id', $request['ids'])->where('id', '>', 6)->delete();
            $ar_message = 'قام بحذف كل عملاء';
            $en_message = 'Delete all website clients';
        }

        elseif ($type == 'teams') {
            \App\Models\Team::whereIn('id', $request['ids'])->where('id', '>', 6)->delete();
            $ar_message = 'قام بحذف كل  اعضاء الفريق';
            $en_message = 'Delete all website teams';
        }

        elseif ($type == 'services') {
            \App\Models\Service::whereIn('id', $request['ids'])->where('id', '>', 6)->delete();
            $ar_message = 'قام بحذف كل الخدمات';
            $en_message = 'Delete all website services';
        }
         elseif ($type == 'contact') {
            \App\Models\Contact::whereIn('id', $request['ids'])->delete();
            $ar_message = 'قام بحذف كل رسائل الإتصال بنا';
            $en_message = 'Delete all messages in contact us';
        }

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = $ar_message;
        $action->en_action = $en_message;
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
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
        } elseif ($type == 'ads') {
            $ads = \App\Models\Ads::find($id);
            if ($ads['active'] == 'yes') {
                $ads->active = 'no';
            } elseif ($ads['active'] == 'no') {
                $ads->active = 'yes';
            }
            $ads->save();
            $ar_message = 'قام بتعديل تفعيل الاعلان : ' . $ads['ar_name'];
            $en_message = 'Edit Activation of ads : ' . $ads['en_name'];
           } elseif ($type == 'product') {
            $product = \App\Models\Product::find($id);
            if ($product['active'] == 'yes') {
                $product->active = 'no';
            } elseif ($product['active'] == 'no') {
                $product->active = 'yes';
            }
            $product->save();
            $ar_message = 'قام بتعديل تفعيل المنتج : ' . $product['ar_name'];
            $en_message = 'Edit Activation of product : ' . $product['en_name'];
        } elseif ($type == 'mall') {
            $mall = \App\Models\Mall::find($id);
            if ($mall['active'] == 'yes') {
                $mall->active = 'no';
            }
             elseif ($mall['active'] == 'no') {
                $mall->active = 'yes';
            }
            $mall->save();
            $ar_message = 'قام بتعديل تفعيل الاعلان : ' . $mall['ar_name'];
            $en_message = 'Edit Activation of mall : ' . $mall['en_name'];

            
        } 

        
        elseif ($type == 'tutorials') {
            $tutorials = \App\Models\Tutorial::find($id);
            if ($tutorials['active'] == 'yes') {
                $tutorials->active = 'no';
            } elseif ($tutorials['active'] == 'no') {
                $tutorials->active = 'yes';
            }
            $tutorials->save();
            $ar_message = 'قام بتعديل تفعيل الإرشاد : ' . $tutorials['ar_desc'];
            $en_message = 'Edit Activation of tutorials : ' . $tutorials['en_desc'];
        } elseif ($type == 'slider') {
            $slider = \App\Models\Slider::find($id);
            if ($slider['active'] == 'yes') {
                $slider->active = 'no';
            } elseif ($slider['active'] == 'no') {
                $slider->active = 'yes';
            }
            $slider->save();
            $ar_message = 'قام بتعديل تفعيل الاعلان : ' . $slider['ar_name'];
            $en_message = 'Edit Activation of ads : ' . $slider['en_name'];
        }elseif($type == 'offers'){
            $offer = \App\Models\Offer::find($id);
            if ($offer['available'] == 'yes') {
                $offer->available = 'no';
            } elseif ($offer['available'] == 'no') {
                $offer->available = 'yes';
            }
            $offer->save();
            $ar_message = 'قام بتعديل تفعيل العرض : ' . $offer['code_no'];
            $en_message = 'Edit Activation offer : ' . $offer['code_no'];

        }

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = $ar_message;
        $action->en_action = $en_message;
        $action->ip = request()->ip();
        $action->save();

        $data['status'] = 1;
        $data['message'] = trans('admin.edit_suc');
        return response()->json($data);
    }
}
