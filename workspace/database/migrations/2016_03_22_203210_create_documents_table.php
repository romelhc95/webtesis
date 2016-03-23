<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('date');
            $table->string('thesis');
            $table->string('state');
            $table->string('observation');
            $table->timestamps();
            $table->integer('idthesis_student')->unsigned();
            $table->foreign('idthesis_student')->references('id')->on('thesis-students');
            $table->integer('idchief')->unsigned();
            $table->foreign('idchief')->references('id')->on('area-chiefs');
            $table->integer('idreviser')->unsigned();
            $table->foreign('idreviser')->references('id')->on('revisers');
            $table->integer('idschema')->unsigned();
            $table->foreign('idschema')->references('id')->on('schemes');
            $table->integer('idfaculty')->unsigned();
            $table->foreign('idfaculty')->references('id')->on('faculties');
            $table->integer('idcareer')->unsigned();
            $table->foreign('idcareer')->references('id')->on('careers');
            $table->integer('idarea')->unsigned();
            $table->foreign('idarea')->references('id')->on('areas');
            $table->integer('idline')->unsigned();
            $table->foreign('idline')->references('id')->on('lines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documents');
    }
}
