<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicineCategory;


class MedicineCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MedicineCategory::all();

       return view('layout.categories',compact('categories'));

    }

    public function medichineCategoryListApi()
{
    $medichineCategories = MedicineCategory::all();

    return $medichineCategories;

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
        $medicine= new MedicineCategory();
        $medicine->name=$request->name;
        $medicine->email=$request->email;
        $medicine->message=$request->message;
        $medicine->phone=$request->phone;

        $medicine->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineCategory $medichineCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineCategory $medichineCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedichineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineCategory $medichineCategory)
    {
        $medichineCategory->name= $request->name;
        $medichineCategory->email = $request->email;
    $medichineCategory->message = $request->message;
    $medichineCategory->phone = $request->phone;

        $medichineCategory->save();
        return back();
    }

    /**
     * 
     * 
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineCategory $medichineCategory)
    {
        $medichineCategory->delete();
        return back();
    }
}
