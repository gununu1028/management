<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('sex');
          $table->string('age');
          $table->string('phonenumber');
          $table->string('e-mail');
          $table->string('date');
          $table->string('course');
          $table->string('sympton');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}