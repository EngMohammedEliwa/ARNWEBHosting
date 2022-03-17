<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{





    protected $table = 'materials';


    protected $fillable = [
        'name', 'email', 'phone', 'message ','typeofcontacts',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];






}
