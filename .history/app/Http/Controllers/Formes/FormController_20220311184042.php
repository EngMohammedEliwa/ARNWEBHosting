<?php

namespace App\Http\Controllers\Formes;

use App\Http\Controllers\Redirect;


use App\table\jobcontact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormController extends Controller
{


    PUBLIC function contactstore(Request $request){
        $validator = validator($request->all(),$this->Roule());

        if($validator ->fails()){

            //return $validator ->errors();
            return redirect()->back()->withErrors($validator->errors())->withInput($request -> all());
           // return Redirect::back()->withErrors($validator)->withInput($request -> all());

        }else {jobcontact::create([

         'name' => $request -> name,
         'email'=> $request -> email,
         'phone' => $request ->Phone,
         'message'=>  $request -> Password,
         'typrofscrape'=> 'Contactm',
       ]);

       return redirect()->back()->with(['success'=>'The offer has been successfully added']);
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


}

