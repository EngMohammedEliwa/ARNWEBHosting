<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


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





route::get('Home1', 'ControllerName@Indexpage')->name('home1') ;
route::get('Services', 'ControllerName@Servicespage')->name('services') ;
route::get('About', 'ControllerName@Aboutpage')->name('about') ;
route::get('Equipments', 'ControllerName@Equipmentspage')->name('equipments') ;
route::get('Products', 'ControllerName@Productspage')->name('products') ;
route::get('Image-gallery', 'ControllerName@Imagegallerypage')->name('image-gallery') ;
route::get('Menu-Contact', 'ControllerName@MenuContactpage')->name('contact');


route::get('News-And-Events', 'ControllerName@NewsAndEventspage')->name('news-and-events');
route::get('Carear', 'ControllerName@carear')->name('carear');












Auth::routes();

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('/Aside', 'ControllerName@AsideForm')->name('aside')->middleware('auth');







// return Redirect::to('job_view')->with(['id'=>$id,]);
