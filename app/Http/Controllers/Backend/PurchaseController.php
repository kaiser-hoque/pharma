<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Exception;
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.purchase.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.purchase.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pur= new Purchase;
        $pur->supplier_id=$request->supplierName;
        $pur->purchase_date = $request->purchase_date;
        $pur->reference_no=$request->reference_no;
        $pur->total_quantity=$request->total_qty;
        $pur->sub_amount=$request->tsubtotal;
        $pur->discount_type=$request->discount_all_type;
        $pur->discount=$request->discount_all;
        $pur->other_charge=$request->tother_charge;
        $pur->round_of=$request->troundof;
        $pur->grand_total=$request->tgrandtotal;
        $pur->note=$request->note;
        $pur->created_by=currentUserId();
        $pur->payment_status=0;
        $pur->status=1;
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        return view ('backend.purchase.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
