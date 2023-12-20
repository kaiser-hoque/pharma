<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\backend\SaleController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\sale;
use App\Models\Purchase;
use App\Models\Customer;
use App\Models\Stock;
use App\Models\Medicine;
use Illuminate\Support\Carbon;
use App\Models\SaleDetails;

class DashboardController extends Controller
{
    public function index(){
        $totalSales =sale::count();
        $totalPurchase =Purchase::count();
        $totalCustomer =Customer::count();
        $totalStock =Stock::count();
        $medicine = Medicine::get();
        $today = today();
        $dailySales = Sale::whereDate('created_at', $today)->sum('grand_total');
        $yesterdaySales = Sale::whereDate('created_at', Carbon::yesterday())->sum('grand_total');

        if(fullAccess())
            return view ('backend.adminDashboard',compact('totalSales'));
        else
            return view ('backend.dashboard',compact('totalSales','totalPurchase','totalCustomer','totalStock','medicine','dailySales','yesterdaySales'));
    }



    // public function recentSales()
    // {
    //     // Get recent sales (example: last 10 sales)
    //     $recentSales = Sale::orderBy('created_at', 'desc')->take(10)->get();

    //     return view('backend.recent_sales', ['recentSales' => $recentSales]);
    // }
}
