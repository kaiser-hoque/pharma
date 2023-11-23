<?php
namespace App\Http\Controllers\Backend;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        if(fullAccess())
            return view ('backend.adminDashboard');
        else
            return view ('backend.dashboard');
    }
}
