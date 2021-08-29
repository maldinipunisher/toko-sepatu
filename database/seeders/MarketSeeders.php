<?php

namespace Database\Seeders;

use App\Models\Market;
use Illuminate\Database\Seeder;

class MarketSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $market = new Market();
        $market->market_id = 1 ;
        $market->income = "20000000";
        $market->outcome = "10000000";
        $market->save();
    }
}
