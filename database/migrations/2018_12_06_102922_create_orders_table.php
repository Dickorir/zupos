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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->unique();
            $table->integer('waiter_id')->nullable(); // if waiter
            $table->integer('customer_id')->default(0)->nullable(); // if customer
            $table->float('discount')->default(0)->nullable();
            $table->float('total_price')->default(0);
            $table->boolean('paid')->default(0);
            $table->string('confirm_by')->default(0)->nullable(); // to confirm an order placed by customer by waiter
            $table->integer('order_by')->default(0);
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
