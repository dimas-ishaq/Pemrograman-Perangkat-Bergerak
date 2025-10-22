<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $fillable = [
        "order_id",
        "product_id",
        "quantity",
        "is_deleted"
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}


