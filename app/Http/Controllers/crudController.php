<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud=crud::all();
        return view('layout.crudpage',compact('crud'));
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
        $request->validate(['name'=>'required','email'=>'required','message'=>'required']);
        $crud=new crud();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->message=$request->message;
        $crud->save();
        return ['success'=>true,'message'=>'data inserted successfully'];

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
    public function update(Request $request,crud $crud)
    {
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->message=$request->message;
        $crud->save();
        return ['success'=>true,'message'=>'data updated successfully'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud,$id)
    {
        $crud->delete();
        return back();
    }
}
