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
        $category = Category::all();
        return view('backend.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = new Category();
            $data->medicine_category = $request->category_name;



            if ($data->save())
                $this->notice::success('Successfully saved');
            return redirect()->route('category.index');
        } catch (Exception $e) {
            // dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Category::findOrFail(encryptor('decrypt', $id));
        return view('backend.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $data = Category::findOrFail(encryptor('decrypt', $id));
            $data->medicine_category = $request->category_name;
            if ($data->save())
                $this->notice::success('Successfully updated');
            return redirect()->route('category.index');
        } catch (Exception $e) {
            // dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $decryptedId = decrypt($id);
            $data = Category::findOrFail($decryptedId);
            $data->delete();

            return back()->with('success', 'Data deleted');
        } catch (\Exception $e) {
            // dd($e);
            return back()->with('error', 'Please try again');
        }
    }
}
