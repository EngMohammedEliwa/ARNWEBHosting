<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materials extends Migration
{

    public function up()
    {

        Schema::create('cliens', function (Blueprint $table) {

            $table->id()->unique();
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table ->string('typeOfScrap');
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('cliens');
    }
}

