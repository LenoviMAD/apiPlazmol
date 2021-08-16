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
            $table->primary('id');
            $table->increments('id');
            $table->integer('idUser');
            $table->foreign('idUser')->references('id')->on('users')->unique();
            $table->string('description');
            $table->string('idState');
            $table->foreign('idState')->references('id')->on('entitySubClass');
            $table->string('idCity');
            $table->foreign('idCity')->references('id')->on('entitySubClass');
            $table->string('idCountry');
            $table->foreign('idCountry')->references('id')->on('entitySubClass');
            $table->string('idParish');
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