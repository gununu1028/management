<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResavationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resavations', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('sex');
          $table->string('age');
          $table->string('phonenumber');
          $table->string('e-mail');
          $table->string('course_id');
          $table->string('resavation datatime');
          $table->string('symption');
          $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resavations');
    }
}