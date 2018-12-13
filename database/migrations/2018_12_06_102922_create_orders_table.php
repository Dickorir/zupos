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
            $table->integer('orderby_id'); // if waiter
            $table->integer('orderby_title'); // if waiter or customer or admin
            $table->float('discount')->default(0)->nullable();
            $table->float('total_price')->default(0);
            $table->string('status');
            $table->string('confirm')->default(0)->nullable(); // to confirm an order placed by customer by waiter
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
