<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AutiKategorijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auti_kategorija', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('auti_id')->unsigned()->nullable();
            $table->foreign('auti_id')->references('id')->on('autis')->onDelete('cascade');


            $table->integer('kategorija_id')->unsigned()->nullable();
            $table->foreign('kategorija_id')->references('id')->on('kategorijas')->onDelete('cascade');
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
        Schema::dropIfExists('auti_kategorija');
    }
}
