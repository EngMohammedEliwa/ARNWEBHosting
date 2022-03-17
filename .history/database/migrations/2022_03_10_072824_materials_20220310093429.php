<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materials extends Migration
{

    public function up()
    {

        Schema::create('materials', function (Blueprint $table) {

            $table->id()->unique();
            $table->string('typeOfScrap');
            $table->string('kind');
            $table->integer('quantity');
            $table ->string('typeOfScrap');
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('materials');
    }
}

