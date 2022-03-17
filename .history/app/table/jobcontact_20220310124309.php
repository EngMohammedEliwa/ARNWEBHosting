<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class jobcontact extends Model
{







    protected $table = 'jobcontacts';


    protected $fillable = [
        'name', 'email', 'phone', 'message ','typeofcontacts ',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];




}
