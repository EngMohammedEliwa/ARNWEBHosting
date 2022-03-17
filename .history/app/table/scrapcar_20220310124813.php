<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class scrapcar extends Model
{

   protected $table = 'scrapcars';


    protected $fillable = [
        'typeOfScrap', 'mark', 'model', 'quantity',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];





}
