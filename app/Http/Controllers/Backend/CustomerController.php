<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Exception;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer=Customer::paginate(10);
        return view ('backend.customer.index', compact('customer'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       return view('backend.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
        $customer= new Customer();
        $customer->name = $request->name;
        $customer->contact_num = $request->contact_num;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->status = $request->status;
        $customer->description = $request->description;
        $customer->save();
        $this->notice::success('Customer data saved');
        return redirect()->route('customer.index');
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
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
     $customer=Customer::findOrFail(encryptor('decrypt',$id));
        return view('backend.customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         try {

        $customer=Customer::find(encryptor('decrypt',$id));
        $customer->name = $request->name;
        $customer->contact_num = $request->contact_num;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->status = $request->status;
        $customer->description = $request->description;
        $customer->save();
        $this->notice::success('Customer data saved');
        return redirect()->route('customer.index');
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
    public function destroy(Customer $customer)
    {
        try {
            $decryptedId = decrypt($id);
            $customer = Customer::findOrFail($decryptedId);
            $customer->delete();

            return back()->with('success', 'Data deleted');
            } catch (\Exception $e) {
                // dd($e);
                return back()->with('error', 'Please try again');
            }
}
}

