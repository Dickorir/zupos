<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartHoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_holds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hold_id');
            $table->integer('product_id');
            $table->integer('qty');
            $table->integer('waiter_id');
            $table->integer('customer_id')->nullable();
            $table->string('table_no')->nullable();
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
        Schema::dropIfExists('cart_holds');
    }
}
