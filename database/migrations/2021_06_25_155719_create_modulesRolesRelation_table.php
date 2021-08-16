<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesRolesRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulesRolesRelation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idRoles');
            $table->foreign('idRoles')->references('id')->on('roles');
            $table->integer('idModules');
            $table->foreign('idModules')->references('id')->on('modules');
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
        Schema::dropIfExists('modulesRolesRelation');
    }
}