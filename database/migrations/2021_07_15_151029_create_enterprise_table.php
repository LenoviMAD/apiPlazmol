<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterpriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName')->unique();
            $table->string('shortName');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('phone');
            $table->string('secondPhone');
            $table->string('local');
            $table->string('secondlocal');
            $table->string('email');
            $table->string('rif');
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
        Schema::dropIfExists('enterprise');
    }
}