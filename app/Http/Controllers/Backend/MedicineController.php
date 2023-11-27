<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Medicine;
use App\Models\Companies;
use App\Models\Category;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicine=Medicine::paginate(10);
        return view('backend.medicine.index',compact('medicine'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::get();
        $companies = Companies::get();
        return view('backend.medicine.create',compzt('companies','category'));     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        try {
            $medicine= new medicine();
            $medicine->brand_id=$request->brand_id;
            $medicine->bname=$request->bname;
            $medicine->category_id=$request->category_id;
            $medicine->supplier_id=$request->supplier_id;
            $medicine->dose_id=$request->dose_id;
            $medicine->price=$request->price;
            $medicine->image=$request->image;
            $medicine->status=$request->status;
            $medicine->description=$request->description;
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
