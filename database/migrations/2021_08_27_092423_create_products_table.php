<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('product_id',20)->unique()->primary();
            $table->string('name', 70);
            $table->text('description');
            $table->integer('price');
            $table->integer('stock');
            $table->integer('supplier');
            $table->foreign('supplier')->references('supplier_id')->on('suppliers');
            $table->string('updated_by', 10)->nullable();
            // $table->integer('users');
            // $table->foreign('users')->references('user_id')->on('users');
            $table->string('order',20)->nullable();
            $table->foreign('order')->references('order_id')->on('orders');
            $table->string('market',20);
            $table->foreign('market')->references('market_id')->on('market');
            $table->integer('category');
            $table->foreign('category')->references('category_id')->on('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
