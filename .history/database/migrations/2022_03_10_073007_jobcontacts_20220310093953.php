<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobcontacts extends Migration
{

    public function up()
    {

        Schema::create('scrapcars', function (Blueprint $table) {

            $table->id()->unique();
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->string('message');
            $table->integer('typeofcontacts');
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('scrapcars');
    }
}

