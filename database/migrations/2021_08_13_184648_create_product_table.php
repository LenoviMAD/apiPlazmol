<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->primary('id');
            $table->increments('id');
            $table->integer('idCathegory');
            $table->foreign('idCathegory')->references('id')->on('entitySubClass');
            $table->integer('idDiscount');
            $table->foreign('idDiscount')->references('id')->on('entitySubClass');
            $table->string('name');
            $table->integer('stock');
            $table->decimal('price', 15, 4);
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
        Schema::dropIfExists('product');
    }
}