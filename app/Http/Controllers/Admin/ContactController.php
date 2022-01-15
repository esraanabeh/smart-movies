<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\UpdateContact;
use App\Http\Requests\StoreContact;
use Illuminate\Support\Facades\Session;
use Mail;
use Illuminate\Support\Facades\Auth;
 
class ContactController extends Controller
{

    //
    function __construct(Contact $Contact)
    {
        $this->contact = $Contact;

        $this->middleware('role:contact_all', ['only' => ['index']]);
        $this->middleware('role:contact_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:contact_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    

        $contacts = Contact::where(function ($q) use ($request) {
            if($request->status == 'viewed'){
                $q->where('seen' , 'yes');
            }elseif($request->status == 'new'){
                $q->where('seen', 'no');
            }
        })->get();
        return view('admin.contact.index', ['contacts' => $contacts]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $contact = $this->contact->getById($id);
        $this->contact->update_seen($id);
        return view('admin.contact.edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContact $request, $id)
    {
      
        $contact = $this->contact->getById($id);
        $this->contact->edit($id, $request);
        // if ($contact['reply'] != $request['reply']) {
        //     try {
        //         $res = \Mail::to($contact->email)->send(new \App\Mail\ReplyContactMail($contact));
        //     }
        //      catch (Exception $ex) {
        //     //   $res = $ex->getMessage();
        //     }
        // }

        $message = trans('admin.send_suc');
        return redirect('admin/contact')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      
         $this->contact->remove($id);
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }



     

}
