<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view ('backend.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view ('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    try {
        $data = new Category();
        $data->category_name = $request->medicine_category;
        dd($request->category_name);

        if ($data->save()) {
            return redirect()->route('category.index')->with('success', 'Category successfully saved.');
        }
    } catch (Exception $e) {
        // dd($e);
        return redirect()->back()->withInput()->with('error', 'Error saving category. Please try again.');
    }
}


    /**
     * Display the specified resource.
     */
    // public function show(category $category)
    // {
        //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
