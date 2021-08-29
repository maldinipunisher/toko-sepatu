<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->order_id =  1 ;
        $order->user= 1 ;
        $order->payment_method = 1 ;
        $order->quantity = 10;
        $order->market = 1;
        $order->save();
    }
}
