<?php

namespace App\Http\Controllers;

use App\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = about::all();
        return view('back.about', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.aboutcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about=new About();
        $about->titre2=request('titre2');
        $about->description2=request('description2');
        $about->img_about=request('img_about');
        $about->save();
        return redirect()->route('about');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts = about::find($id);
        return view('edit.aboutedit', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $abouts = about::find($id);
        $abouts ->titre2=request('titre2');
        $abouts ->description2=request('description2');
        $abouts ->img_about=request('img_about');
        $abouts ->save();
        return redirect()->route('about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();
        return redirect()->back();
    }
}
