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
            $table->string('order_id',20)->unique()->primary();
            $table->string('user',20);
            $table->foreign('user')->references('user_id')->on('users');
            $table->integer('quantity');
            $table->integer('payment_method');
            $table->foreign('payment_method')->references('payment_id')->on('payment_methods');
            $table->string('market',20);
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
