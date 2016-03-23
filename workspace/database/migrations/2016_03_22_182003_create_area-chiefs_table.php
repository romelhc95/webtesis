<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaChiefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area-chiefs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idlevel')->unsigned();
            $table->foreign('idlevel')->references('id')->on('levels');
            $table->string('last_name');
            $table->string('name');
            $table->string('photo');
            $table->integer('dni');
            $table->string('key');
            $table->string('state');
            $table->integer('security');
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
        Schema::drop('area-chiefs');
    }
}
