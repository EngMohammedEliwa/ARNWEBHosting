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


    PUBLIC function contactstore(Request $request){
        $validator = validator($request->all(),$this->Roule());

        if($validator ->fails()){

            //return $validator ->errors();
            return redirect()->back()->withErrors($validator->errors())->withInput($request -> all());
           // return Redirect::back()->withErrors($validator)->withInput($request -> all());

        }else {client::create([

         'name' => $request -> name,
         'email'=> $request -> email,
         'password'=>  $request -> Password,
         'typrofscrape'=> $request -> typrofscrape,
         'phone' => $request ->Phone,
         'quantity'=> $request -> quantity,
       ]);

       return redirect()->back()->with(['success'=>'The offer has been successfully added']);
    }
    }

}

