<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetails extends Model
{
    use HasFactory;
    public function medicine()
{
    return $this->belongsTo(Medicine::class, 'medicine_id', 'id');
}

public function sale()
{
    return $this->belongsTo(Sale::class);
}
}
