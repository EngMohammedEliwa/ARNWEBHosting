<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table = 'events';


    protected $fillable = [
        'name', 'email', 'password', 'typrofscrape','phone',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
