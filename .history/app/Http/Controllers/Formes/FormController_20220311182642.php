<?php

namespace App\Http\Controllers\Formes;

use App\Http\Controllers\Redirect;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


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



public function Roule(){

    $roule = [
        'name' => 'max:100',
        'Phone' => 'max:18',
        'quantity' => 'max:10',
        'password' => 'max:100',
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

