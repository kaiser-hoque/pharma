<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Purchase;
use DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function  PurchaseReport()
    {
        return view('backend.report.phurchasereport' );
    }

}
