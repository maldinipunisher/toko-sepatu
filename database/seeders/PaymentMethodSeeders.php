<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = new PaymentMethod();
        $payment->payment_id = 1 ;
        $payment->type = "cc";
        $payment->save();
    }
}
