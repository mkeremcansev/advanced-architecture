<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Support\Helper;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.sliders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.create.slider');
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
            'image' => 'required|mimes:png,jpg,jpeg,gif',
        ]);
        $slider = new Slider;
        $slider->fill($request->all());
        $slider->image = Helper::imageUpload($request->file('image'), 'images');
        $slider->save();
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
        $slider = Slider::findOrFail($id);
        return view('panel.update.slider', compact('slider'));
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
            'image' => 'mimes:png,jpg,jpeg,gif',
        ]);
        $slider = Slider::findOrFail($id);
        $slider->fill($request->all());
        if ($request->hasFile('image')) {
            $slider->image = Helper::imageUpload($request->file('image'), 'images');
        }
        $slider->save();
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
        Slider::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_success'));
    }
}
