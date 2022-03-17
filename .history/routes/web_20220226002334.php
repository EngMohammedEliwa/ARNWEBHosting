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


