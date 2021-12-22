<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Http\Requests\StoreClient;
use App\Http\Requests\UpdateClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
 

class ClientController extends Controller
{
    function __construct(Client $client) {
        $this->client = $client;
        $this->middleware('role:clients_all', ['only' => ['index']]);
        $this->middleware('role:clients_add', ['only' => ['create', 'store']]);
        $this->middleware('role:clients_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:clients_delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحة عملاء الموقع';
        $action->en_action = 'Open website clients';
        $action->ip = request()->ip();
        $action->save();

        $clients = $this->client->getAll();
        return view('admin.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClient $request)
    {
        //
        $logoName = '';

        if ($request->hasFile('logo')) {

            $logoName = time() . '.' . $request->logo->extension();

            $request->logo->move(public_path('logo'), $logoName);

            $logo = $request->file('logo');

        }

        $client = new Client();
        
        
        $client->ar_name = $request->ar_name;

        $client->en_name = $request->en_name;

        $client->logo = $logoName;

        $client->save();

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بإضافة عميل جديدة ' . $request['ar_title'];
        $action->en_action = 'Add new client ' . $request['en_title'];
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
        $client = $this->client->getById($id);
        return view('admin.clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClient $request, $id)
    {
        //
        $logoName = "";
        $client = Client::findOrFail($id);
        if ($request->hasFile('logo')) {

            $logoName = time() . '.' . $request->logo->extension();

            $request->logo->move(public_path('logo'), $logoName);

            $logo = $request->file('logo');
            $client->logo = $logoName;
        }

        $client->ar_name = $request->ar_name;

        $client->en_name = $request->en_name;

        $client->save();

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بتعديل  عميل حالية ' . $request['ar_title'];
        $action->en_action = 'Edit current client ' . $request['en_title'];
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/clients')->with(['message' => $message]);
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
        $client = Client::find($id);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بحذف عميل حالية ' . $client['ar_title'];
        $action->en_action = 'Delete current client ' . $client['en_title'];
        $action->ip = request()->ip();
        $action->save();
        $client->delete();
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }


   
}
