<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class jobcontact extends Model
{







    protected $table = 'events';


    protected $fillable = [
        'title', 'perfdec', 'dec', 'photo',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];




}
