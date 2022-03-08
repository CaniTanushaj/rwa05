<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervacijaAutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacija_auti', function (Blueprint $table) {
            $table->increments('id');

            $table->Integer('auti_id')->unsigned()->nullable();
            $table->foreign('auti_id')->references('id')->on('autis')->onDelete('cascade');

            $table->Integer('rezervacija_id')->unsigned()->nullable();
            $table->foreign('rezervacija_id')->references('id')->on('rezervacijas')->onDelete('cascade');


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
        Schema::dropIfExists('rezervacija_auti');
    }
}
