<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Consultant;
use App\Http\Requests\StoreConsultant;
use App\Http\Requests\UpdateConsultant;
use Illuminate\Support\Facades\Session;
use Mail;
use Illuminate\Support\Facades\Auth;

class ConsultantController extends Controller
{
    function __construct(Consultant $Consultant)
    {
        $this->consultant = $Consultant;

        $this->middleware('role:consultant_all', ['only' => ['index']]);
        $this->middleware('role:consultant_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:consultant_delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحة  طلب استشاري';
        $action->en_action = 'Open request consultant page';
        $action->ip = request()->ip();
        $action->save();

        $consultants = Consultant::where(function ($q) use ($request) {
            if($request->status == 'viewed'){
                $q->where('seen' , 'yes');
            }elseif($request->status == 'new'){
                $q->where('seen', 'no');
            }
        })->get();
        return view('admin.consultant.index', ['consultants' => $consultants]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح  رسالة طلب استشاري ' . $id;
        $action->en_action = 'Open consultant message No. ' . $id;
        $action->ip = request()->ip();
        $action->save();

        $consultant = $this->consultant->getById($id);
        $this->consultant->update_seen($id);
        return view('admin.consultant.edit', ['consultant' => $consultant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultant $request, $id)
    {
        //
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بالرد علي رسالة طلب استشاري رقم ' . $id;
        $action->en_action = 'Reply to consultant message No. ' . $id;
        $action->ip = request()->ip();
        $action->save();

        $consultant = $this->consultant->getById($id);
        $this->consultant->edit($id, $request);

        // if ($consultant['reply'] != $request['reply']) {
        //     try {
        //         $res = \Mail::to($consultant->email)->send(new \App\Mail\ReplyConsultantMail($consultant));
        //     } catch (Exception $ex) {
        //       $res = $ex->getMessage();
        //     }

      
        // }

        $message = trans('admin.send_suc');
        return redirect('admin/consultant')->with(['message' => $message]);
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
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بحذف  رسالة طلب استشاري رقم ' . $id;
        $action->en_action = 'Delete consultant message No. ' . $id;
        $action->ip = request()->ip();
        $action->save();

        $this->consultant->remove($id);
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }


   
}
