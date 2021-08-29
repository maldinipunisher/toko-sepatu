<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $primaryKey = "order_id";

    protected $fillable = [
        "order_id",
        "user",
        "product",
        "quantity",
        "payment_method"
    ];

    public $timestamps = false;


    public function paymentmethods(){
        return $this->belongsTo(PaymentMethod::class, "payment_method", "payment_id");
    }

    public function users(){
        return $this->belongsTo(User::class, "user", "user_id");
    }

    public function products(){
        return $this->hasMany(Product::class, "order_id");
    }

    public function markets(){
        return $this->belongsTo(Market::class, "order_id");
    }
}
