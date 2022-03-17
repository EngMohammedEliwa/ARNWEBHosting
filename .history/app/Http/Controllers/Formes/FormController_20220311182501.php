<?php

namespace App\Http\Controllers\Formes;

use App\Http\Controllers\Redirect;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{


    PUBLIC function contactstore(){

        return view('pages\index');

    }

}

