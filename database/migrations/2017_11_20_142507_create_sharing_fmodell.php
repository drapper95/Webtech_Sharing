<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharingFmodell extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FModell', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->integer('idMarke')->unsigned();
            $table->foreign('idMarke')->references('id')->on('FMarke');
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
        Schema::dropIfExists('FModell');
    }
}
