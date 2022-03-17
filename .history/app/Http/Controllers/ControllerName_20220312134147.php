<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Redirect;

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

        return view('pages\index');

    }


    PUBLIC function Servicespage(){

        return view('pages\services');

    }


    PUBLIC function Aboutpage(){

     //   $shape1 = 'about';
        return view('pages\about');

    }


    PUBLIC function Equipmentspage(){

        return view('pages\equipments');

    }

    PUBLIC function Productspage(){

        return view('pages\products');

    }

    PUBLIC function Imagegallerypage(){

        return view('pages\image-gallery');

    }


    PUBLIC function MenuContactpage(){

        return view('pages\contact');

    }
    PUBLIC function NewsAndEventspage(){

        return view('pages\news-and-events');

    }


    PUBLIC function Newspage(){

        return view('pages\news');

    }


    PUBLIC function AsideForm(){

        return view('pages\Asid');

    }
    PUBLIC function carear(){

        return view('pages\career');

    }

    PUBLIC function login(){

        return view('pages\login');

    }

}


