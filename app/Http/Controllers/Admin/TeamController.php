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
        
        $team->name = $request->name;
 $team->image = $imageName;
        $team->save();

   

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
        $team->name = $request->name;

      

        $team->save();

      

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

        $team->delete();
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }

    
   

   
}
