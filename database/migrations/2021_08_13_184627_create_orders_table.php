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
            $table->increments('id');
            $table->integer('idUser');
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('idSeller');
            $table->foreign('idSeller')->references('id')->on('users');
            $table->primary('numberOrder');
            $table->string('numberOrder')->unique();
            $table->longText('description');
            $table->date('dateDispatch');
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
        Schema::dropIfExists('orders');
    }
}