<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\sale;
use App\Models\SaleDetails;
use App\Models\PurchaseDetails;
use DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    
public function PurchaseReport(Request $request)
{
    $fromDate = $request->input('from_date')." 00:00:00";
    $toDate =$request->input('to_date')." 23:59:59";
    
    $purchase = Purchase::whereBetween('purchase_date', [$fromDate, $toDate])->get();
    
    return view('backend.report.purchaseReport', compact('purchase', 'fromDate', 'toDate'));
}

public function SaleReport(Request $request)
{
    $fromDate = $request->input('from_date')." 00:00:00";
    $toDate =$request->input('to_date')." 23:59:59";
    
    $sale = sale::whereBetween('sale_date', [$fromDate, $toDate])->get();
    
    return view('backend.report.saleReport', compact('sale', 'fromDate', 'toDate'));
}


}



 