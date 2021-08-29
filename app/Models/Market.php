<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $table = "market";
    protected $primaryKey = "market_id";

    protected $fillable = ["market_id", "income", "outcome", "product"];
    public $timestamps = false;

    public function products(){
        return $this->hasMany(Product::class, "product" , "product_id");
    }

    public function orders(){
        return $this->hasMany(Order::class, "orders", "orders_id");
    }
}
