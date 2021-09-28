<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primaryKey = "product_id";

    protected $fillable = [
        'product_id',
        'name',
        'description',
        'price',
        'stock',
        'supplier',
        'category',
        'updated_by',
        'product_photo',
        // 'cart',
        'order',
        // 'market',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, null,'product','user');
    }

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class, "supplier", "supplier_id");
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, "category", "category_id");
    }

    public function markets()
    {
        return $this->belongsTo(Market::class, "product_id");
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, "order", "order_id");
    }
}
