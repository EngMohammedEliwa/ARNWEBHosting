<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{





    protected $table = 'materials';


    protected $fillable = [
         'kind', 'quantity', 'dec',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];






}
