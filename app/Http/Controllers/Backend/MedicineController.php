<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\Companies;
use App\Models\Supplier;
use App\Models\Dose;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicine = Medicine::paginate(10);
        return view('backend.medicine.index', compact('medicine'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::get();
        $company = Companies::get();
        $supplier = Supplier::get();
        $dose = Dose::get();
        return view('backend.medicine.create', compact('category', 'company', 'supplier', 'dose'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $medicine = new Medicine;
            $medicine->companies_id = $request->companies_id;
            $medicine->bname = $request->bname;
            $medicine->gname = $request->gname;
            $medicine->category_id = $request->category_id;
            $medicine->supplier_id = $request->supplier_id;
            $medicine->dose_id = $request->dose_id;
            $medicine->price = $request->price;
            $medicine->status = $request->status;
            $medicine->description = $request->description;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/medicine'), $imageName);
                $medicine->image = $imageName;
            }

            if ($medicine->save()) {
                $this->notice::success('Medicine Data Successfully saved');
                return redirect()->route('medicine.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
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
    public function edit( $id)
    {
        $category = Category::get();
        $company = Companies::get();
        $supplier = Supplier::get();
        $dose = Dose::get();
        $medicine = Medicine::findOrFail(encryptor('decrypt',$id));
        return view('backend.medicine.create', compact('category', 'company', 'supplier', 'dose'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try {
            $medicine=Supplier::find(encryptor('decrypt',$id));
            $medicine->companies_id = $request->companies_id;
            $medicine->bname = $request->bname;
            $medicine->gname = $request->gname;
            $medicine->category_id = $request->category_id;
            $medicine->supplier_id = $request->supplier_id;
            $medicine->dose_id = $request->dose_id;
            $medicine->price = $request->price;
            $medicine->status = $request->status;
            $medicine->description = $request->description;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/medicine'), $imageName);
                $medicine->image = $imageName;
            }

            if ($medicine->save()) {
                $this->notice::success('Medicine Data Successfully saved');
                return redirect()->route('medicine.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

       try
       {
           $medicine = Medicine::findOrFail(encryptor('decrypt',$id));
           if($medicine->delete())
               return back()->with('success', 'Data deleted');
       }

       catch (\Exception $e) {
           // dd($e);
           return back()->with('error', 'Please try again');
       }
    }
}
