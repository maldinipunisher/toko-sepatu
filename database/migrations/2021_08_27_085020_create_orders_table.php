<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id')->unique()->primary();
            $table->integer('user');
            $table->foreign('user')->references('user_id')->on('users');
            $table->integer('quantity');
            $table->integer('payment_method');
            $table->foreign('payment_method')->references('payment_id')->on('payment_methods');
            $table->integer('market');
            $table->foreign('market')->references('market_id')->on('market');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
