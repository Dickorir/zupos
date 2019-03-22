<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* the person who has ordered, it is confirmed by a waiter i.e waiter_id */
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->unique();
            $table->integer('waiter_id')->nullable(); // if waiter
            $table->integer('customer_id')->default(0)->nullable(); // if customer
            $table->integer('table_id')->default(0)->nullable(); // if customer
            $table->float('discount')->default(0)->nullable();
            $table->float('total_price')->default(0);
            $table->boolean('paid')->default(0);
            $table->integer('order_by')->default(0);// 0-customer1-admin 2-manager 3-cashier 4-waiter 5-kitchen
            $table->integer('kitchen')->default(0);// 0-placed orders 1-viewed 2-finished 3-cannot be completed
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
        Schema::dropIfExists('orders');
    }
}
