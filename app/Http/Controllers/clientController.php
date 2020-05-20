<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientmodel;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientmodel = Clientmodel::all();

       return view('layout.newfile',compact('clientmodel'));

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
        $clientmodel= new Clientmodel();
        $clientmodel->name=$request->name;
        $clientmodel->email=$request->email;
        $clientmodel->phone=$request->phone;

        $clientmodel->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clientController  $clientmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Clientmodel $clientmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientmodel  $clientmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientmodel $clientmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clientmodel  $clientmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientmodel $clientmodel)
    {

        $clientmodel= new Clientmodel();
        $clientmodel->name=$request->name;
        $clientmodel->email=$request->email;
        $clientmodel->phone=$request->phone;

        $clientmodel->save();
        return back();
    }

    /**
     * 
     * 
     * Remove the specified resource from storage.
     *
     * @param  \App\clientmodel  $clientmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientmodel $clientmodel)
    {
        $clientmodel->delete();
        return back();
    }
}
