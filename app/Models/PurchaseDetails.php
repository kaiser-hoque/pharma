<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;
    public function medicine()
{
    return $this->belongsTo(Medicine::class, 'medicine_id', 'id');
}

public function purchase()
{
    return $this->belongsTo(Purchase::class, 'purchase_id', 'id');
}

}

