<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliens extends Migration
{
    public function up()
    {

        Schema::create('events', function (Blueprint $table) {

            $table->id()->unique();
            $table->string('name');
            $table->string('email');
            $table->text('dec');
            $table->integer('phone');
            $table ->string('typeOfScrap');
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
        Schema::dropIfExists('events');
    }
}
