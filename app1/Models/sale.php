<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function medicine(){
        return $this->belongsTo(medicine::class,'medicine_id','id');
    }
    public function details(){
        return $this->hasMany(SaleDetails::class,'sales_id','id');
    }

}
