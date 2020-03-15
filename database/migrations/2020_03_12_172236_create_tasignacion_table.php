<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasignacionTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasignacion', function (Blueprint $table) {
            $table->integer('id_a')->unsigned();
            $table->integer('id_as')->unsigned();
            $table->integer('id_d')->unsigned();
            $table->foreign('id_a')->references('id')->on('talumno');
            $table->foreign('id_as')->references('id')->on('tasignatura');
            $table->foreign('id_d')->references('id')->on('tdocente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasignacion');
    }
}
