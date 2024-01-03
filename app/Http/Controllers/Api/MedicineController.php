<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
   public function medicine()
    {
        $data=Medicine::get();
        return response ($data, 200);
    }
}
