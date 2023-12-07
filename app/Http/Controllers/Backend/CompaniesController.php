<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use Illuminate\Http\Request;
use Exception;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies=Companies::paginate(10);
        return view ('backend.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $companies= new Companies();
            $companies->name = $request->name;
            $companies->contact_num = $request->contact_num;

            $companies->email = $request->email;
            $companies->address = $request->address;
            $companies->status = $request->status;
            $companies->division = $request->division;

            $companies->description = $request->description;
            $companies->save();
            $this->notice::success('companies data saved');
            return redirect()->route('companies.index');
           }
           catch(Exception $e){
            $this->notice::error('Please try again');
             dd($e);
            return redirect()->back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $companies=Companies::find(encryptor('decrypt',$id));
        return view('backend.companies.edit',compact('companies'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $companies=Companies::find(encryptor('decrypt',$id));
            $companies->name = $request->name;
            $companies->contact_num = $request->contact_num;
            $companies->email = $request->email;
            $companies->address = $request->address;
            $companies->status = $request->status;
            $companies->division = $request->division;
            $companies->description = $request->description;
            $companies->save();
            $this->notice::success('companies data saved');
            return redirect()->route('companies.index');
           }
           catch(Exception $e){
            $this->notice::error('Please try again');
             dd($e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        try {
            $decryptedId = decrypt($id);
            $companies = Companies::findOrFail($decryptedId);
            $companies->delete();

            return back()->with('success', 'Data deleted');
            } catch (\Exception $e) {
                // dd($e);
                return back()->with('error', 'Please try again');
            }


    }
}
