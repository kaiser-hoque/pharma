<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Exception;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier=Supplier::paginate(10);
        return view ('backend.supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
            $supplier= new Supplier();
            $supplier->name = $request->name;
            $supplier->contact_num = $request->contact_num;

            $supplier->email = $request->email;
            $supplier->address = $request->address;
            $supplier->status = $request->status;
            $supplier->supplier = $request->supplier;

            $supplier->description = $request->description;
            $supplier->save();
            $this->notice::success('supplier data saved');
            return redirect()->route('supplier.index');
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
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier=Supplier::find(encryptor('decrypt',$id));
        return view('backend.supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      try {
            $supplier=Supplier::find(encryptor('decrypt',$id));
            $supplier->name = $request->name;
            $supplier->contact_num = $request->contact_num;
            $supplier->email = $request->email;
            $supplier->address = $request->address;
            $supplier->status = $request->status;
            $supplier->supplier = $request->supplier;
            $supplier->description = $request->description;
            $supplier->save();
            $this->notice::success('supplier data saved');
            return redirect()->route('supplier.index');
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
    public function destroy(Supplier $supplier)
    {
       try {
            $supplier->delete();
            return back()->with('success', 'Data deleted');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again');
        }
    }
}
