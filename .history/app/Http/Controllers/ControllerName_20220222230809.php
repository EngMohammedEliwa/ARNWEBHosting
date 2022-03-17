<?php

namespace App\Http\Controllers\NameSpaceController;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ControllerName extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    PUBLIC function __construct() { // هنا بالحركه هادي رحت طبقت الاوث على كل الكنترولار باستثناء الي حطيتهم داخل القوس

        $this ->middleware('auth') ->except( 'GetName','GetName1','welcome' ,'Aside' );

    }


    PUBLIC function GetName(){

        return "Mohammed Eliwa";

    }


    PUBLIC function GetName1(){

        return "Mohammed Eliwa295";

    }

    PUBLIC function welcome(){

        return view('welcome');

    }



    PUBLIC function welcome2(){

        return view('welcome');

    }
    PUBLIC function welcome3(){

        return view('welcome');

    }
    PUBLIC function welcome4(){

        return view('welcome');

    }


    PUBLIC function Aside(){

        return view('asidTestPages/Aside');

    }



}
