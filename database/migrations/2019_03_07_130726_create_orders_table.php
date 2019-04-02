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
            $table->bigIncrements('id');
            $table->string('order_num')->unique();
            $table->dateTime('date');
            $table->bigInteger('user_id', false, true);
            $table->bigInteger('address_delivery_id', false, true);
            $table->bigInteger('address_billing_id', false, true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('address_delivery_id')->references('id')->on('addresses');
            $table->foreign('address_billing_id')->references('id')->on('addresses');
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
