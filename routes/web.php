<?php

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


Route::get('/home','pageController@home');
Route::get('/','pageController@home');

//Mladenovac Vesti----------------------------
Route::get('vesti','MladenovacController@vesti');

//MLadenovac Vesti kraj-----------------------


//Sport---------------
Route::get('fudbal','SportController@fudbal');
Route::get('kosarka','SportController@kosarka');
Route::get('odbojka','SportController@odbojka');
Route::get('ostaliSportovi','SportController@ostaliSportovi');


//Sport kraj-------------
Route::get('celaVest/{id}','PageController@celaVest');



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('getMess','MesageController@getMess');
