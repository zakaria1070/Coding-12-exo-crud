<?php

namespace App\Http\Controllers;

use App\subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribes = subscribe::all();
        return view('back.subscribe', compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.subscribecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscribe=new Subscribe();
        $subscribe->titre=request('titre');
        $subscribe->description=request('description');
        $subscribe->save();
        return redirect()->route('subscribe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscribes = subscribe::find($id);
        return view('edit.subscribeedit', compact('subscribes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $subscribes = subscribe::find($id);
        $subscribes ->titre=request('titre');
        $subscribes ->description=request('description');
        $subscribes ->save();
        return redirect()->route('subscribe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subscribe::find($id)->delete();
        return redirect()->back();
    }
}
