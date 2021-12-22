<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Http\Requests\StoreTeam;
use App\Http\Requests\UpdateTeam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function __construct(Team $team) {
        $this->team = $team;
        $this->middleware('role:teams_all', ['only' => ['index']]);
        $this->middleware('role:teams_add', ['only' => ['create', 'store']]);
        $this->middleware('role:teams_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:teams_delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بفتح صفحة فريق الموقع';
        $action->en_action = 'Open website team';
        $action->ip = request()->ip();
        $action->save();

        $teams = $this->team->getAll();
        return view('admin.teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeam $request)
    {
        $imageName = '';

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imageName);

            $image = $request->file('image');

        }
        $team = new Team();
        
        $team->ar_name = $request->ar_name;

        $team->en_name = $request->en_name;

        $team->ar_title = $request->ar_title;

        $team->en_title = $request->en_title;

        $team->ar_details =  $request->ar_details;

        $team->en_details = $request->en_details;

        $team->image = $imageName;
        $team->save();

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بإضافة خدمة جديدة ' . $request['ar_title'];
        $action->en_action = 'Add new team ' . $request['en_title'];
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
        $team = $this->team->getById($id);
        return view('admin.teams.edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeam $request, $id)
    {
        //
        $imageName = "";
        $team = Team::findOrFail($id);
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imageName);

            $image = $request->file('image');
            $team->image = $imageName;
        }
        $team->ar_name = $request->ar_name;

        $team->en_name = $request->en_name;
        
        $team->ar_title = $request->ar_title;

        $team->en_title = $request->en_title;

        $team->en_details =  $request->en_details;
        
        $team->ar_details = $request->ar_details;

        $team->save();

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بتعديل  خدمة حالية ' . $request['ar_title'];
        $action->en_action = 'Edit current team ' . $request['en_title'];
        $action->ip = request()->ip();
        $action->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/teams')->with(['message' => $message]);
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
        $team = Team::find($id);

        $action = new \App\Models\Action();
        $action->user_id = Auth::User()->id;
        $action->ar_action = 'قام بحذف عضو حالي ' . $team['ar_title'];
        $action->en_action = 'Delete current member ' . $team['en_title'];
        $action->ip = request()->ip();
        $action->save();
        $team->delete();
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }

    
   

   
}
