<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_no')->unique();
            $table->string('order_id');
            $table->string('order_number');
            $table->float('discount')->default(0)->nullable();
            $table->float('total_pay')->default(0)->nullable(); // amount customer is supposed to pay
            $table->float('balance')->default(0)->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('code')->nullable();
            $table->integer('received_by')->default(0)->nullable();// 0-default.no user // id of the person receiving the payments
            $table->float('amount_received')->default(0)->nullable(); // full amount received from customer without change
            $table->float('change')->default(0)->nullable();
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
        Schema::dropIfExists('payments');
    }
}
