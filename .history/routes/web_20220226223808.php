<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('about');
});




route::get('Home', 'ControllerName@Indexpage')->name('home') ;
route::get('Services', 'ControllerName@Servicespage')->name('services') ;
route::get('About', 'ControllerName@Aboutpage')->name('about') ;
route::get('Equipments', 'ControllerName@Equipmentspage')->name('equipments') ;
route::get('Products', 'ControllerName@Productspage')->name('products') ;
route::get('Image-gallery', 'ControllerName@Imagegallerypage')->name('image-gallery') ;
route::get('Menu-Contact', 'ControllerName@MenuContactpage')->name('contact');
route::get('News-And-Events', 'ControllerName@NewsAndEventspage')->name('news-and-events');

// return Redirect::to('job_view')->with(['id'=>$id,]);

//route::get('About1', 'ControllerName@NewsAndEventspage2')->name('about1') ;


Route::get('/About1', array('as' => 'about', 'uses' => 'ControllerName@Aboutpage'))->name('about1');
