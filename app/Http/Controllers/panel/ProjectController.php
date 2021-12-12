<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectGallery;
use App\Support\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.projects');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.create.project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|integer',
            'client' => 'required|max:255',
            'date' => 'required|max:255',
            'budget' => 'required|max:255',
            'duration' => 'required|max:255',
            'image' => 'required|mimes:png,jpg,jpeg,gif',
            'gallery' => 'required|array',
        ]);
        $project = new Project;
        $project->fill($request->all());
        $project->slug = Str::slug($request->title);
        $project->image = Helper::imageUpload($request->file('image'), 'images');
        $project->save();
        foreach ($request->gallery as $galleryItem) :
            $gallery = new ProjectGallery;
            $gallery->project_id = $project->id;
            $gallery->image = Helper::imageUpload($galleryItem, 'images');
            $gallery->save();
        endforeach;
        return back()->with('success', __('words.added_success'));
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
        $project = Project::findOrFail($id);
        return view('panel.update.project', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|integer',
            'client' => 'required|max:255',
            'date' => 'required|max:255',
            'budget' => 'required|max:255',
            'duration' => 'required|max:255',
            'image' => 'mimes:png,jpg,jpeg,gif',
        ]);
        $project = Project::findOrFail($id);
        $project->fill($request->all());
        $project->slug = Str::slug($request->title);
        if ($request->hasFile('image')) :
            $project->image = Helper::imageUpload($request->file('image'), 'images');
        endif;
        $project->save();
        if ($request->hasFile('gallery')) :
            foreach ($request->gallery as $galleryItem) :
                $gallery = new ProjectGallery;
                $gallery->project_id = $id;
                $gallery->image = Helper::imageUpload($galleryItem, 'images');
                $gallery->save();
            endforeach;
        endif;
        return back()->with('success', __('words.updated_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_success'));
    }
}
