<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('tel')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('gender')->default('male');
            $table->string('role')->default('0'); //1-admin 2-manager 3-cashier 4-waiter 5-kitchen 0-customer
            $table->integer('status')->default('0'); // if suspended 1-suspended 0-not_suspended
            $table->timestamp('last_login')->nullable();
            $table->string('token')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
