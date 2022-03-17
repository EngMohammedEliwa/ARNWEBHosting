<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Redirect;


use App\table\Client;
use App\table\material;
use App\table\jobcontact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormController extends Controller
{


    PUBLIC function contactstore(Request $request){

        $this->create($request,"Contact");

        return redirect()->back()->with(['success'=>'The offer has been successfully added']);


    }


    PUBLIC function careerjob(Request $request){

        $this->create($request,"job");

        return redirect()->back()->with(['success'=>'The offer has been successfully added']);

    }



    PUBLIC function create(Request $request , $type){

        $validator = validator($request->all(),$this->Roule());

        if($validator ->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput($request -> all());
        }else {jobcontact::create([

         'name' => $request -> name,
         'email'=> $request -> email,
         'phone' => $request ->Phone,
         'typeofcontacts'=> $type,
         'message' => $request ->message,


       ]);


    }

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



////////////////////////////////////////////////////////////////////////////////////////


    public function Ordergforme(Request $request){




    }




    PUBLIC function createorder(Request $request , $type){

        $validator = validator($request->all(),$this->Roule());

        if($validator ->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput($request -> all());
        }else {Client::create([

         'name' => $request -> name,
         'email'=> $request -> email,
         'phone' => $request ->Phone,
         'typeOfScrap'=> $type,
       ]);



       material::create([

        'kind' => $request -> name,
        'quantity'=> $request -> email,
        'dec' => $request ->Phone,

      ]);



    }

    }

}

