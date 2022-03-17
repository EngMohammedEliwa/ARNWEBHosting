<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{


    protected $table = 'cliens';



    protected $fillable = [
        'name', 'email', 'phone', 'typeOfScrap',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];

}
