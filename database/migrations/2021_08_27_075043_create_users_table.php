<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('user_id')->primary()->unique();
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('password',72);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address', 120);
            $table->rememberToken();
            $table->string('phone', 13);
            $table->integer('role');
            $table->foreign('role')->references('role_id')->on('roles');
            $table->timestamps();
            $table->string('updated_by', 10)->nullable();
            $table->string('profilepic', 100)->nullable();
            $table->string('description', 255)->nullable();
            // $table->integer('cart');
            // $table->foreign('cart')->references('cart_id')->on('cart');
            // $table->integer('token')->nullable();
            // $table->foreign('token')->references('token')->on('password_resets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
