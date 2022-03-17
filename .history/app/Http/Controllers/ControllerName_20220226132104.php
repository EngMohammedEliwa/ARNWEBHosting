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

        return view('index');

    }


    PUBLIC function Servicespage(){

        return view('services');

    }


    PUBLIC function Aboutpage(){

        return view('about');

    }


    PUBLIC function Equipmentspage(){

        return view('equipments');

    }

    PUBLIC function Productspage(){

        return view('products');

    }

    PUBLIC function Imagegallerypage(){

        return view('image-gallery');

    }


    PUBLIC function MenuContactpage(){

        return view('contact');

    }
    PUBLIC function NewsAndEventspage(){

        return view('news-and-events');

    }

    PUBLIC function NewsAndEventspage2(){

      $if = 1;

        return view('about')->with('id' , $if );

    }



}


