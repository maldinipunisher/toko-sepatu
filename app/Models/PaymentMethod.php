<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    protected $table = "payment_methods";
    protected $primaryKey = "payment_id";

    protected $fillable = [
        'payment_id',
        'type'
    ];
    public $timestamps = false;


    protected $hidden = [
        'type'
    ];

    public function orders(){
        return $this->hasMany(Order::class, 'payment_id');
    }
}
