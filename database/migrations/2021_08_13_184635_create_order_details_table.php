<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idOrders');
            $table->foreign('idOrders')->references('id')->on('orders');
            $table->integer('idProduct');
            $table->foreign('idProduct')->references('id')->on('product');
            $table->integer('idPresentation');
            $table->foreign('idPresentation')->references('id')->on('entitySubClass');
            $table->integer('lot');
            $table->decimal('amount', 15, 4);

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
        Schema::dropIfExists('order_details');
    }
}