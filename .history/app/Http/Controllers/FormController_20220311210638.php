<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Redirect;


use App\table\jobcontact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormController extends Controller
{


    PUBLIC function contactstore(Request $request){

        create($request);


    }



public function Roule(){

    $roule = [
        'name' => 'max:100',
        'Phone' => 'max:18',
        'email'  =>  'max:100',
        'typrofscrape'  =>  'max:100',
    ];
    return $roule;
    }


    public function masseges(){

        $masseges = [
        'email'  =>  'you have to Enter Email like @gmail.com'
        ];
        return $masseges;
        }




    public function viewdata(){

            $data = DB::table('clients')->get();
            return view('asidTestPages\Aside')-> with( 'date', $data);
    }


    PUBLIC function careerjob(Request $request){



    }



    PUBLIC function create(Request $request){

        $validator = validator($request->all(),$this->Roule());

        if($validator ->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput($request -> all());
        }else {jobcontact::create([

         'name' => $request -> name,
         'email'=> $request -> email,
         'phone' => $request ->Phone,
         'typeofcontacts'=> "Contactm",
         'message' => $request ->message,


       ]);

       return redirect()->back()->with(['success'=>'The offer has been successfully added']);
    }

    }





}

