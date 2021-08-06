<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->foreign('idUser')->references('id')->on('users')->unique();
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();;
            $table->string('primerApellido');
            $table->string('segundoApellido')->nullable();;
            $table->string('rif');
            $table->date('fechaNacimiento')->nullable();
            $table->string('celular');
            $table->string('telefono');
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
        Schema::dropIfExists('person');
    }
}