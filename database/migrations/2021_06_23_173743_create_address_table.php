<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unique();
            $table->foreign('idUser')->references('id')->on('users');
            $table->string('description');
            $table->integer('idState');
            $table->foreign('idState')->references('id')->on('entitySubClass');
            $table->integer('idCity');
            $table->foreign('idCity')->references('id')->on('entitySubClass');
            $table->integer('idCountry');
            $table->foreign('idCountry')->references('id')->on('entitySubClass');
            $table->integer('idParish');
            $table->foreign('idParish')->references('id')->on('entitySubClass');
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
        Schema::dropIfExists('address');
    }
}