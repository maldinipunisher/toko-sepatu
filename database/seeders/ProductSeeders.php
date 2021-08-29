<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->product_id = 101;
        $product->name = "Adidas Air 350";
        $product->description = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam recusandae officia praesentium odit rerum omnis, reiciendis nulla totam earum incidunt nostrum ex temporibus amet sit provident, numquam hic cupiditate voluptates.";
        $product->price = 2000000;
        $product->stock = 5 ;
        $product->supplier = 1 ;
        $product->category = 1 ;
        $product->order = 1 ;
        $product->market = 1 ;
        // $product->cart = 1 ;
        $product->save();
    }
}
