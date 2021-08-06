<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webConfig', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName')->unique();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('localphone');
            $table->string('cellphone');
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
        Schema::dropIfExists('webConfig');
    }
}
