<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CartSeeders::class,
            UsersSeeders::class,
            PaymentMethodSeeders::class,
            MarketSeeders::class,
            CategorySeeders::class,
            SupplierSeeders::class,
            OrderSeeders::class,
            ProductSeeders::class
        ]);
    }
}
