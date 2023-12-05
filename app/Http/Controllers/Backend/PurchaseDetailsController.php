<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\PurchaseDetails;
use Illuminate\Http\Request;
use Exception;

class PurchaseDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pd=PurchaseDetails::paginate(10);
        return view ('backend.PurchaseDetails.index', compact('pd'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('backend.purchasedetails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    try {
        $pd= new PurchaseDetails();
        $pd->purchase_id=$request->pur;
        $pd->medicine_id=$request->medicine_id;
        $pd->quantity=$request->qty;
        $pd->unit_price=$request->price;
        $pd->tax=$request->tax;
        $pd->tax=$request->tax;
        $pd->discount_type=$request->discount_type;
        $pd->discount=$request->discount;
        $pd->sub_amount=$request->unit_cost;
        $pd->total_amount=$request->subtotal;
        $pd->save();
        $this->notice::success('purchase details data saved');
        return redirect()->route('purchasedetails.index');
       }
       catch(Exception $e){
        $this->notice::error('Please try again');
         //dd($e);
        return redirect()->back()->withInput();
    }


         $pd=new PurchaseDetails;
            
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaseDetails $purchaseDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchaseDetails $purchaseDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PurchaseDetails $purchaseDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseDetails $purchaseDetails)
    {
        //
    }
}
