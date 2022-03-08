<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('Marka');
            $table->string('Model');
            $table->string('Kategorija');
            $table->text('Deskripcija');
            $table->integer('Kubikaza');
            $table->integer('Snaga');
            $table->integer('Godina');
            $table->integer('Kilometraza');
            $table->string('Gorivo');
            $table->string('Mjenjac');
            $table->integer('CijenaRezervacije');
            $table->boolean('Dostupno')->default(true);
            $table->integer('Cijena');
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
        Schema::dropIfExists('autis');
    }
}
