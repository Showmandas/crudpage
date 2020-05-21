<?php

namespace App\Http\Controllers;

use App\MedicineCategory;
use Illuminate\Http\Request;

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
        $medicine->description=$request->description;
        $medicine->reaction=$request->reaction;
        $medicine->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedichineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineCategory $medichineCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedichineCategory  $medichineCategory
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
        $medichineCategory->description = $request->description;
        $medichineCategory->reaction = $request->reaction;

        $medichineCategory->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedichineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineCategory $medichineCategory)
    {
        $medichineCategory->delete();
        return back();
    }
}
