<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\sale;

class DashboardController extends Controller
{
    public function index(){
        if(fullAccess())
            return view ('backend.adminDashboard');
        else
            return view ('backend.dashboard');
    }

    // public function recentSales()
    // {
    //     // Get recent sales (example: last 10 sales)
    //     $recentSales = Sale::orderBy('created_at', 'desc')->take(10)->get();

    //     return view('backend.recent_sales', ['recentSales' => $recentSales]);
    // }
}
