<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{




    protected $table = 'events';





    $table->id()->unique();
    $table->string('title');
    $table->string('perfdec');
    $table->text('dec');
    $table->string('photo', 250)->unique();
    $table->timestamps();

    protected $fillable = [
        'title', 'perfdec', 'dec', 'photo','phone',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];






}
