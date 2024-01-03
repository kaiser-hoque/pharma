<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use DB;

use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $stock=DB::select("SELECT medicines.id,medicines.bname,sum(`quantity`) as balance,(`quantity` * `unit_price`) as stock_value FROM `stocks` JOIN medicines on medicines.id=stocks.medicine_id GROUP BY stocks.medicine_id");
        return view('backend.stock.index',compact('stock'));
    }

    /**
     * Show the form for creating a new resource...
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
