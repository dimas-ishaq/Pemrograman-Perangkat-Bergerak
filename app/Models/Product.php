<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use HasFactory;
    protected $fillable = [

        "user_id",
        "name",
        "price",
        "stock",
        "description",
        "image",
        "is_deleted",
        "category_id",
        "status"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}
