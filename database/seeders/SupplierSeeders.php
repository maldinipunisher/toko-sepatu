<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new Supplier();
        $supplier->supplier_id=1 ;
        $supplier->name="Adidas";
        $supplier->address ="Jakarta Utara";
        $supplier->save();
    }
}
