<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ControllerName extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    PUBLIC function __construct() {

    }


    PUBLIC function Indexpage(){

        return view('index');

    }

}
