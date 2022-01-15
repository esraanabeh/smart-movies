<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Http\Requests\StorePage;
use App\Http\Requests\UpdatePage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PageController extends Controller {

    //
    function __construct(Page $Page) {
        $this->page = $Page;
        $this->middleware('role:pages_all', ['only' => ['index']]);
        $this->middleware('role:pages_add', ['only' => ['create', 'store']]);
        $this->middleware('role:pages_edit', ['only' => ['edit', 'update']]);
        $this->middleware('role:pages_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //

        $pages = $this->page->getAll();
        return view('admin.pages.index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePage $request) {
       
        // $this->page->add($request);
        $imageName = '';

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('image'), $imageName);

            $image = $request->file('image');

        }
        $page = new Page();
        $page->type = $request->type;
        $page->title = $request->title;
        $page->content = $request->content;
       
        $page->save();

    

        $message = trans('admin.add_suc');
        return back()->with(['message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $page = $this->page->getById($id);
        return view('admin.pages.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePage $request, $id) {
        //
        $this->page->edit($id, $request);
        $page = Page::findOrFail($id);
       
        $page->type =  $request->type;
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();

        $message = trans('admin.edit_suc');
        return redirect('admin/pages')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $page = $this->page->getById($id);
        $this->page->remove($id);

        $message = trans('admin.delete_suc');
        return back()->with(['message' => $message]);
    }


}
