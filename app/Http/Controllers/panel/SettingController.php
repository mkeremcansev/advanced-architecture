<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Support\Helper;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.update.setting');
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
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'keywords' => 'required|max:1000',
            'adress' => 'required|max:255',
            'map' => 'required|max:500',
            'facebook' => 'required|max:255',
            'instagram' => 'required|max:255',
            'twitter' => 'required|max:255',
            'mail' => 'required|max:255',
            'whatsapp' => 'required|max:255',
            'phone' => 'required|max:255',
            'footer' => 'required|max:255',
            'logo' => 'mimes:jpeg,png,jpg,svg|max:4096',
            'favicon' => 'mimes:ico,png|max:2048',
        ]);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'adress' => $request->adress,
            'map' => $request->map,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'mail' => $request->mail,
            'whatsapp' => $request->whatsapp,
            'phone' => $request->phone,
            'footer' => $request->footer,
        ];
        if ($request->hasFile('logo')) {
            $data['logo'] = Helper::imageUpload($request->file('logo'), 'images');
        }
        if ($request->hasFile('favicon')) {
            $data['favicon'] = Helper::imageUpload($request->file('favicon'), 'images');
        }
        setting($data)->save();
        return back()->with('success', __('words.updated_success'));
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
        //
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
    }
}
