<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identity', function (Blueprint $table) {
            $table->primary('id');
            $table->increments('id');
            $table->integer('idUser');
            $table->foreign('idUser')->references('id')->on('users')->unique();
            $table->string('rif')->unique();
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
        Schema::dropIfExists('identity');
    }
}