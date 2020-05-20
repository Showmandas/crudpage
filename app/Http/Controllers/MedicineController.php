<?php

namespace App\Http\Controllers;

use App\medichine;
use App\MedicineCategory;
use Illuminate\Http\Request;

class MedichineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $medichineCategories= MedicineCategory::all();
        $medichines = medichine::all();


       return view('medichine.index',compact('medichines','medichineCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ///
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $medichine = new medichine;

       $medichine->name= $request->name;
        $medichine->email = $request->email;
        $medichine->message = $request->message;
        $medichine->phone = $request->phone;

        $medichine->medicine_category_id = $request->medicine_category_id;
       $medichine->save();
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medichine  $medichine
     * @return \Illuminate\Http\Response
     */
    public function show(medichine $medichine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medichine  $medichine
     * @return \Illuminate\Http\Response
     */
    public function edit(medichine $medichine)
    {

       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medichine  $medichine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medichine $medichine)
    {
        $medichine->name= $request->name;

        $medichine->email = $request->email;
        $medichine->message = $request->message;
        $medichine->medicine_category_id = $request->medicine_category_id;
        $medichine->phone = $request->phone;

        $medichine->save();
         return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medichine  $medichine
     * @return \Illuminate\Http\Response
     */
    public function destroy(medichine $medichine)
    {
      $medichine->delete();
      return  back();
    }
}
