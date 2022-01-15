<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Package;
use App\Http\Requests\StoreMovie;
use App\Http\Requests\UpdateMovie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function __construct(Movie $movie , Package $package) {
        $this->movie = $movie;
        $this->package = $package;
        $this->middleware('role:movies_all', ['only' => ['index']]);
        $this->middleware('role:movies_add', ['only' => ['create', 'store']]);
        $this->middleware('role:movies_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:movies_delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = $this->movie->getAll();
        return view('admin.movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = $this->package->getList();
        return view('admin.movies.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovie $request)
    {
        //
        $imageName = '';
    
            if ($request->hasFile('image')) {
    
                $imageName = time() . '.' . $request->image->extension();
    
                $request->image->move(public_path('image'), $imageName);
    
                $image = $request->file('image');
    
            }
            $videoName = '';
            if ($request->hasFile('video')) {
    
                $videoName = time() . '.' . $request->video->extension();
    
                $request->video->move(public_path('video'), $videoName);
    
                $video = $request->file('video');
    
            }
            $movie = new Movie();
        
            $movie->name = $request->name;
            $movie->package_id = $request->package_id;
            $movie->image = $imageName;
            $movie->video = $videoName;

            $movie->save();
    
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
       
        $movies = $this->package->getList();
        $movie = $this->movie->getById($id);
        return view('admin.movies.edit', ['movie' => $movie ,'movies' => $movies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovie $request, $id)
    {
        //
        $imageName = "";
        $movie = Movie::findOrFail($id);
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imageName);

            $image = $request->file('image');
            $movie->image = $imageName;
        }

        $videoName = "";
       
        if ($request->hasFile('video')) {

            $videoName = time() . '.' . $request->video->extension();

            $request->video->move(public_path('video'), $videoName);

            $video = $request->file('video');
            $movie->video = $videoName;
        }

        $movie->name = $request->name;
        $movie->package_id = $request->package_id;

        $movie->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/movies')->with(['message' => $message]);
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
        $movie = Movie::find($id);

        $movie->delete();
        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }
}
