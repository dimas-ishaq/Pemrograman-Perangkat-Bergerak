<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = [
        "id",
        "user_id",
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cartItem(){
        return $this->hasMany(CartItem::class);
    }
}
