<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Http\Requests\StoreNotification;
use App\Http\Library\PushNotifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class NotificationsController extends Controller {

    //
    function __construct(Notification $Notification) {
        $this->notification = $Notification;
        $this->middleware('role:notifications_all', ['only' => ['index']]);
        $this->middleware('role:notifications_add', ['only' => ['store']]);
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
        $action->ar_action = 'قام بفتح صفحة الإشعارات';
        $action->en_action = 'Open notifications page';
        $action->ip = request()->ip();
        $action->save();

        return view('admin.notifications.index',['notifications'=>Notification::whereNull('user_id')->whereNull('guest_id')->get()]);

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotification $request) {
        $filename = FALSE;
        $destinationPath = public_path('upload/notifications/');
        if ($request->hasFile('image')) {
            $file = $request['image'];
            $filename = Str::random(5) . '.png';
            $file->move($destinationPath, $filename);
        }

        $this->notification->add($request, $filename);
        $image = '';
        if ($filename) {
            $image = url('upload').'/notifications/'.$filename;
        }

        $ios_data_ar = ['action' => 'open', 'title' => $request['ar_title'], 'alert' => $request['ar_message'], 'image' => $image];
        $ios_data_en = ['action' => 'open', 'title' => $request['ar_title'], 'alert' => $request['en_message'], 'image' => $image];
        $android_data_ar = ['action' => 'open', 'title' => $request['ar_title'], 'message' => $request['ar_message'], 'image' => $image];
        $android_data_en = ['action' => 'open', 'title' => $request['en_title'], 'message' => $request['en_message'], 'image' => $image];

        if ($request['platform'] == 'all' || $request['platform'] == 'ios') {
            send_fcm(null , null , $request['ar_title'] , $request['ar_message'] , 'general' , null , 'IOSAR');
            send_fcm(null , null , $request['en_title'] , $request['en_message'] , 'general' , null , 'IOSEN');
            // PushNotifications::ios('IOSAR', $ios_data_ar, 'topic');
            // PushNotifications::ios('IOSEN', $ios_data_en, 'topic');
        }

        if ($request['platform'] == 'all' || $request['platform'] == 'android') {
            send_fcm(null , null , $request['ar_title'] , $request['ar_message'] , 'general' , null , 'AndroidAr');
            send_fcm(null , null , $request['en_title'] , $request['en_message'] , 'general' , null , 'AndroidEn');
            // PushNotifications::android('AndroidAr', $android_data_ar, 'topic');
            // PushNotifications::android('AndroidEn', $android_data_en, 'topic');
        }

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بإرسال إشعار جديد ' . $request['ar_message'];
        $action->en_action = 'Send new notification ' . $request['en_message'];
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.notification_suc');
        return back()->with(['message' => $message]);
    }

}
